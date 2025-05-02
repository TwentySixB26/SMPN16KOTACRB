<aside class="relative bg-gray-900 h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Teacher</a>

    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="/dashboard" class="flex items-center {{ $link == 'dashboard' ? 'bg-blue-700' : 'opacity-75 hover:opacity-100'  }}
                text-white py-4 pl-6 nav-item">
            <i class="fa-solid fa-address-book mr-3"></i>
            Presensi
        </a>
        <a href="/profileUser" class="flex items-center {{ $link == 'profile' ? 'bg-blue-700' : 'opacity-75 hover:opacity-100'  }} text-white  py-4 pl-6 nav-item">
            <i class="fa-solid fa-id-card mr-3"></i>
            Profile
        </a>
        @if (auth()->user()->admin)
        <a href="/admin" class="flex items-center {{ $link == 'admin' ? 'bg-blue-700' : 'opacity-75 hover:opacity-100'  }} text-white  py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            Admin
        </a>
        @endif

    </nav>
</aside>
