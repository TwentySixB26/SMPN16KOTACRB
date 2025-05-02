@if (session()->has('error'))
    <div class="p-4 mb-4 text-sm text-red-600 rounded-lg bg-red-100 dark:bg-gray-800 dark:text-red-400 relative w-[95%] sm:w-[60%] lg:w-[30%]" role="alert">
        <span class="font-medium">
            {{ session('error') }}
        </span>
    </div>
@endif
