<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PoliGigi;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Count posts for the current week
        $postCount = Post::whereBetween('created_at', [
            Carbon::now()->startOfWeek(), // Monday
            Carbon::now()->endOfWeek()   // Sunday
        ])->count();
        // Count poli_gigi records for the current day
        $poliGigiCount = PoliGigi::whereDate('created_at', Carbon::today())->count();

        return view('dashboard.index', [
            'postCount' => $postCount,
            'poliGigiCount' => $poliGigiCount,
            'title' => 'Dashboard'
        ]);
    }
}
