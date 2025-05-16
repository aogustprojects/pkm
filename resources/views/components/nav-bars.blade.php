<nav class="w-full bg-gradient-to-r from-indigo-900 via-gray-900 to-indigo-800 border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <!-- drawer init and show -->
                <div class="text-center">
                    <button class="text-white bg-indigo-900 hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-300 font-medium rounded-lg text-sm px-3 py-2 dark:bg-indigo-600 dark:hover:bg-indigo-700 focus:outline-none dark:focus:ring-indigo-800" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
              <!-- Logo -->
              <p class="flex ms-2 md:me-24">
                  <span class="self-center text-md font-semibold sm:text-xl text-white whitespace-nowrap dark:text-dark">Dashboard</span>
              </p>
          </div>

          <!-- User Profile -->
          <div class="flex items-center">
              <div class="flex items-center ms-3">
                  <div>
                      <button type="button" class="flex text-sm bg-indigo-900 hover:bg-indigo-700 p-3 rounded-lg focus:ring-2 focus:ring-gray-300" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                          <i class="fa-solid fa-user text-white"></i>
                      </button>
                  </div>
                  <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-md shadow-sm dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                      <div class="px-4 py-3" role="none">
                          <p class="text-sm text-gray-900 dark:text-white" role="none">
                              {{ auth()->user()->name }}
                          </p>
                          <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                              {{ auth()->user()->email }}
                          </p>
                      </div>
                      <ul class="py-1" role="none">
                          <li><a href="/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Landing Page</a></li>
                          <li><a href="/dashboard" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a></li>
                          <li><a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</nav>
