@if (session()->has('success'))
    <div class="p-4 mb-4 text-sm text-green-50 rounded-lg bg-green-500 dark:bg-gray-800 dark:text-green-400 relative w-[100%] sm:w-[100%] lg:w-[100%]" role="alert">
        <span class="font-medium">
            {{ session('success') }}
        </span>
        <i class="fa-solid fa-check ms-1"></i>
    </div>
@endif
