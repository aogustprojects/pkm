<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Support\ValidatedData;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.postingan.index', [
            'postingan' => Post::where('author_id', Auth::id())->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.postingan.create', [
            'categories' =>Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:postingan',
            'category_id' => 'required',
            'image' => 'image|file|max:5120',
            'body' => 'required'
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['author_id'] = Auth::id();

        Post::create($validatedData);

        return redirect('/dashboard/postingan')->with('success', 'Postingan Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $postingan)
    {
        return view('dashboard.postingan.show', [
            'post' => $postingan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $postingan)
    {
        return view('dashboard.postingan.edit', [
            'post' => $postingan,
            'categories' =>Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $postingan)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:5120',
            'body' => 'required'
        ];


        if($request->slug != $postingan->slug) {
            $rules['slug'] = 'required|unique:postingan';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['author_id'] = Auth::id();

        Post::where('id', $postingan->id)
            ->update($validatedData);

        return redirect('/dashboard/postingan')->with('success', 'Postingan Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $postingan)
    {
        if($postingan->image){
            Storage::delete($postingan->image);
        }

        $postingan->delete();

        return redirect('/dashboard/postingan')->with('success', 'Postingan Berhasil Dihapus!');
    }

    public function checkSlug(Request $request) 
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
