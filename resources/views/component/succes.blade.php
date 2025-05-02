@if (session()->has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-100 dark:bg-gray-800 dark:text-green-200 relative w-[95%] sm:w-[60%] lg:w-[30%]" role="alert">
        <span class="font-medium">
            {{ session('success') }}
        </span>
    </div>
@endif
