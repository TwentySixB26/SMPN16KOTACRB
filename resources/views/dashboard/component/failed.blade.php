@if (session()->has('error'))
    <div class="p-4 mb-4 text-sm text-white rounded-lg bg-red-500 dark:bg-gray-800 dark:text-red-400 relative w-[100%] sm:w-[100%] lg:w-[100%]" role="alert">
        <span class="font-medium">
            {{ session('error') }}
        </span>
    </div>
@endif
