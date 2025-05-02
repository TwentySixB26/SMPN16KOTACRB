@extends('dashboard/EditProfileUser/layout/layout')

@section('content')
    {{-- menu left --}}
    @include('dashboard.component.menuLeft')
    {{-- akhir menu left --}}

    {{-- content --}}
    <div class="w-full flex flex-col h-screen overflow-y-hidden bg-gray-200">
        <!-- Desktop Header -->
        @include('dashboard.component.headerDesktop')
        {{-- akhir dekstop header --}}

        <!-- Mobile Header & Nav -->
        @include('dashboard.component.mobileHeaderNav')
        {{-- akhir Mobile header & Nav --}}

        <div class="w-full overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6 mb-14">
                @include('dashboard.component.success')
                <div class="mt-5 w-full sm:w-[90%] mx-auto shadowMe">
                    @include('dashboard.EditProfileUser.component.contentProfileUser')
                </div>
            </main>
        </div>

    </div>
    {{-- content --}}
@endsection
