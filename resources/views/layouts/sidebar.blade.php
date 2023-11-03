<button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-3 mt-2 ml-3 text-sm text-dark-gray rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
<span class="sr-only">Open sidebar</span>
<svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
</svg>
</button>

<aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">

<div class="h-full px-3 py-4 overflow-y-auto bg-white dark:bg-gray-800">

    {{-- admin profile image --}}
    <div class="flex pt-4 pb-8 text-dark-gray">
        <div class="me-4">
            <div class="w-20 h-20 pt-5 bg-gray-200 rounded-full flex items-center justify-center overflow-hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-20 h-20 text-gray-400">
                    <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                  </svg>

            </div>
        </div>
        <div>
            <p>Ryan Tinamisan</p>
            <div class="text-xs text-light-gray mb-2">
                <p>Administrator</p>
            </div>
            <a href="#" class="text-indigo-600 text-xs">
                <div class="flex items-center">
                    <div class="hover:border-b hover:border-indigo-600 duration-200 ease-in-out">
                        <span class="float-left me-1">Edit</span>
                        <span class="float-right">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                              </svg>

                        </span>
                    </div>

                </div>
            </a>
        </div>
    </div>

    {{-- sidebar menu --}}
    <ul class="space-y-2 font-medium">
        <li>
            <a href="/admin/dashboard" class="{{ request()->is("admin/dashboard*") ? "bg-indigo-600 text-white" : "text-dark-gray"}} flex duration-300 ease-in-out items-center p-3 rounded-lg hover:bg-indigo-600 hover:text-white group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                </svg>
            <span class="ml-3">Dashboard</span>
            </a>
        </li>
        <li>
            <button type="button" class="text-dark-gray flex hover:bg-indigo-600 hover:text-white items-center w-full p-3 transition duration-300 rounded-lg group" aria-controls="dropdown-works" data-collapse-toggle="dropdown-works">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
            </svg>

            <span class="flex-1 ml-3 text-left whitespace-nowrap">Works</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
            </button>
            <ul id="dropdown-works" class="{{ request()->is("admin/works*") ? '' : 'hidden' }} py-2 space-y-2">
                <li>
                    <a href="/admin/works" class="{{ request()->is("admin/works") ? "bg-indigo-600 text-white" : "text-dark-gray"}} flex duration-300 ease-in-out items-center p-3 rounded-lg pl-11 hover:bg-indigo-600 hover:text-white group">All</a>
                </li>
                <li>
                    <a href="/" class="{{ request()->is("/works/categories") ? "bg-indigo-600 text-white" : "text-dark-gray"}} flex duration-300 ease-in-out items-center p-3 rounded-lg pl-11 hover:bg-indigo-600 hover:text-white group">Categories</a>
                </li>
                <li>
                    <a href="/" class="{{ request()->is("/works/tags") ? "bg-indigo-600 text-white" : "text-dark-gray"}} flex duration-300 ease-in-out items-center p-3 rounded-lg pl-11 hover:bg-indigo-600 hover:text-white group">Tags</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="/" class="{{ request()->is("/about") ? "bg-indigo-600 text-white" : "text-dark-gray"}} flex duration-300 ease-in-out items-center p-3 rounded-lg hover:bg-indigo-600 hover:text-white group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
            </svg>
            <span class="flex-1 ml-3 whitespace-nowrap">About me</span>
            </a>
        </li>
        <li>
            <a href="/" class="{{ request()->is("/contact") ? "bg-indigo-600 text-white" : "text-dark-gray"}} flex duration-300 ease-in-out items-center p-3 rounded-lg hover:bg-indigo-600 hover:text-white group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z" />
            </svg>
            <span class="flex-1 ml-3 whitespace-nowrap">Contact</span>
            </a>
        </li>
        <li>
            <a href="/" class="text-dark-gray flex duration-300 ease-in-out items-center p-3 rounded-lg hover:bg-indigo-600 hover:text-white group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
            </svg>
            <span class="flex-1 ml-3 whitespace-nowrap">Sign out</span>
            </a>
        </li>
    </ul>
</div>
</aside>
