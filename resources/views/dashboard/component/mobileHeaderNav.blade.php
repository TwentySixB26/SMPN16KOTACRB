<header x-data="{ isOpen: false }" class="w-full bg-gray-900 py-5 px-6 sm:hidden">
    <div class="flex items-center justify-between">
        <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Teacher</a>
        <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
            <i x-show="!isOpen" class="fas fa-bars"></i>
            <i x-show="isOpen" class="fas fa-times"></i>
        </button>
    </div>

    <!-- Dropdown Nav -->
    <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
        <h1 class="font-nunito font-medium text-lg flex items-center text-white py-2 pl-4">
            Selamat datang {{ auth()->user()->name }}
        </h1>
        <a href="/dashboard" class="flex items-center  {{ $link == 'dashboard' ? 'bg-blue-700' : 'opacity-75 hover:opacity-100'  }}  text-white py-2 pl-4 nav-item">
            <i class="fa-solid fa-address-book mr-3"></i>
            Presensi
        </a>
        <a href="/profileUser" class="flex items-center  {{ $link == 'profile' ? 'bg-blue-700' : 'opacity-75 hover:opacity-100'  }} text-white py-2 pl-4 nav-item">
            <i class="fa-solid fa-id-card mr-3"></i>
            Profile
        </a>
        @if (auth()->user()->admin)
        <a href="/admin" class="flex items-center  {{ $link == 'admin' ? 'bg-blue-700' : 'opacity-75 hover:opacity-100'  }} text-white py-2 pl-4 nav-item">
            <i class="fas fa-table mr-3"></i>
            Admin
        </a>
        @endif
        <form action="/logout" method="post">
            @csrf
            <p class="flex items-center text-white py-2 pl-4 nav-item cursor-pointer">
                <button type="submit">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Sign Out
                </button>
            </p>
        </form>
    </nav>
    {{--  --}}
</header>
