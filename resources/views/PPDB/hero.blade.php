<div class="relative flex items-center">
    <div class=" w-[100%] overflow-hidden  h-full lg:h-full relative p-0 m-0 ">
        <div class=" wrapper pointer-events-none flex aspect-video overflow-x-auto snap-x snap-mandatory scroll-smooth duration-1000 transition-all ease-linear  h-full lg:h-screen w-full" id="carouselSlide">
            <img src="/img/brosur1.png" alt="" class="w-full  h-full lg:h-[100vh] flex-1 shrink-0 basis-full snap-start object-fill lg:object-fill" id="slide1">
            <img src="/img/PPDB.jpg" alt="" class="w-full  h-full lg:h-[100vh] flex-1 shrink-0 basis-full snap-start object-cover" id="slide3">
            <img src="/img/hero-img.jpg" alt="" class="w-full  h-full lg:h-[100vh] flex-1 shrink-0 basis-full snap-start object-cover" id="slide2">
        </div>
        <div class="absolute inset-0 bg-black bg-opacity-50 h-screen  "></div>
    </div>
    <div class="px-5  button-holder absolute text-blue-100  flex justify-between items-center w-full text-2xl  h-full">
        {{-- <i class="cursor-pointer fa-solid fa-circle-arrow-left" id="arrowL"></i> --}}
        {{-- <i class="cursor-pointer fa-solid fa-circle-arrow-right" id="arrowR"></i> --}}
        <span class="cursor-pointer text-xl sm:text-3xl lg:text-3xl text-gray-200" id="arrowL">&laquo;</span>
        <div class=" self-end py-5 flex gap-x-3">
            <div class="w-1.5 h-1.5 sm:w-2 sm:h-2 lg:w-2 lg:h-2 bg-gray-100 rounded-full carouselRound"></div>
            <div class="w-1.5 h-1.5 sm:w-2 sm:h-2 lg:w-2 lg:h-2 bg-gray-500 rounded-full carouselRound"></div>
            <div class="w-1.5 h-1.5 sm:w-2 sm:h-2 lg:w-2 lg:h-2 bg-gray-500 rounded-full carouselRound"></div>
        </div>
        <span class="cursor-pointer text-xl sm:text-3xl lg:text-3xl text-gray-200" id="arrowR">&raquo;</span>
    </div>
</div>
