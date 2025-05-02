<div class=" w-full min-h-screen px-5 sm:px-14 lg:px-16 mt-20 sm:mt-28 lg:mt-36  mx-auto lg:mx-0 "  id="galeri">
    <section>
        <div class="">
            {{-- header --}}
            <div class="w-full lg:px-5 text-center">
                <h1 class="font-fira-sans text-center text-blue-950  font-semibold mb-1 sm:mb-3  text-base  sm:text-3xl md:text-4xl lg:text-4xl font-jersey">Gallery SMP Negeri 16 Kota Cirebon</h1>
                <h4 class="text-slate-800 tracking-wide sm:text-center text-sm   sm:text-lg md:text-xl lg:text-lg">Enjoy Your Moment!</h4>
            </div>
            {{-- akhir header --}}

            {{-- gambar besar ketika di klik --}}
            <div class="popup lg:h-[100vh]">
                <!-- top bar -->
                <div class="top-bar">
                    <!-- <p class="image-name">img1.png</p> -->
                    <span class="close-btn"></span>
                </div>
                <!-- arrows -->
                <button class="arrow-btn left-arrow"><img src="/img/arrow.png" alt=""></button>
                <button class="arrow-btn right-arrow"><img src="/img/arrow.png" alt=""></button>
                <!-- image -->
                <img src="public/img/P1.jpeg" class="large-image" alt="">
                <!-- image-index -->
                <!-- <h1 class="index">01</h1> -->
            </div>
            {{-- akhir gambar besar ketika di klik --}}


            {{-- img kecil --}}
            <div class="w-full lg:px-5 mt-5 sm:mt-10 lg:mt-12 ">
                <div class=" grid grid-cols-2 sm:grid-cols-4  lg:grid-cols-5 ">

                    {{-- img 1 --}}
                    <div class=" aspect-[2/2] col-span-1 overflow-hidden bg-black relative group imageGalery">
                        {{-- img svg  --}}
                        <div class="bg-slate-50 text-cyan-600 p-2 w-12 h-12 justify-center items-center mx-auto rounded-full flex absolute top-[50%] left-[50%] -translate-y-[50%] -translate-x-[50%] z-40 opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-cyan-600 hover:text-slate-100 group cursor-pointer" id="cameraBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-5 h-5 fill-current" viewBox="0 0 24 24" style="transform: msFilter;"><path d="M12 8c-2.168 0-4 1.832-4 4s1.832 4 4 4 4-1.832 4-4-1.832-4-4-4zm0 6c-1.065 0-2-.935-2-2s.935-2 2-2 2 .935 2 2-.935 2-2 2z"></path><path d="M20 5h-2.586l-2.707-2.707A.996.996 0 0 0 14 2h-4a.996.996 0 0 0-.707.293L6.586 5H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 18V7h3c.266 0 .52-.105.707-.293L10.414 4h3.172l2.707 2.707A.996.996 0 0 0 17 7h3l.002 11H4z"></path></svg>
                        </div>
                        {{-- akhir img svg --}}

                        {{-- img --}}
                        <div class="w-full h-full ">
                            <img src="/img/hari ikan.png" alt="" class="group-hover:scale-125 group-hover:rotate-[5deg] group-hover:opacity-60 transition-all duration-700 ">
                        </div>
                        {{-- akhir img --}}
                    </div>
                    {{-- akhir img 1 --}}


                    {{-- img 2 --}}
                    <div class=" aspect-[2/2] col-span-1 overflow-hidden bg-black relative group imageGalery">
                        {{-- img svg  --}}
                        <div class="bg-slate-50 text-cyan-600 p-2 w-12 h-12 justify-center items-center mx-auto rounded-full flex absolute top-[50%] left-[50%] -translate-y-[50%] -translate-x-[50%] z-40 opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-cyan-600 hover:text-slate-100 group cursor-pointer" id="cameraBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-5 h-5 fill-current" viewBox="0 0 24 24" style="transform: msFilter;"><path d="M12 8c-2.168 0-4 1.832-4 4s1.832 4 4 4 4-1.832 4-4-1.832-4-4-4zm0 6c-1.065 0-2-.935-2-2s.935-2 2-2 2 .935 2 2-.935 2-2 2z"></path><path d="M20 5h-2.586l-2.707-2.707A.996.996 0 0 0 14 2h-4a.996.996 0 0 0-.707.293L6.586 5H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 18V7h3c.266 0 .52-.105.707-.293L10.414 4h3.172l2.707 2.707A.996.996 0 0 0 17 7h3l.002 11H4z"></path></svg>
                        </div>
                        {{-- akhir img svg --}}

                        {{-- img --}}
                        <div class="w-full h-full ">
                            <img src="/img/muridall.jpg" alt="" class="group-hover:scale-125 group-hover:rotate-[5deg] group-hover:opacity-60 transition-all duration-700 ">
                        </div>
                        {{-- akhir img --}}
                    </div>
                    {{-- akhir img 2 --}}



                    {{-- img 3 --}}
                    <div class=" aspect-[2/1] col-span-2 overflow-hidden bg-black relative group imageGalery">
                        {{-- img svg  --}}
                        <div class="bg-slate-50 text-cyan-600 p-2 w-12 h-12 justify-center items-center mx-auto rounded-full flex absolute top-[50%] left-[50%] -translate-y-[50%] -translate-x-[50%] z-40 opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-cyan-600 hover:text-slate-100 group cursor-pointer" id="cameraBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-5 h-5 fill-current" viewBox="0 0 24 24" style="transform: msFilter;"><path d="M12 8c-2.168 0-4 1.832-4 4s1.832 4 4 4 4-1.832 4-4-1.832-4-4-4zm0 6c-1.065 0-2-.935-2-2s.935-2 2-2 2 .935 2 2-.935 2-2 2z"></path><path d="M20 5h-2.586l-2.707-2.707A.996.996 0 0 0 14 2h-4a.996.996 0 0 0-.707.293L6.586 5H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 18V7h3c.266 0 .52-.105.707-.293L10.414 4h3.172l2.707 2.707A.996.996 0 0 0 17 7h3l.002 11H4z"></path></svg>
                        </div>
                        {{-- akhir img svg --}}

                        {{-- img --}}
                        <div class="w-full h-full ">
                            <img src="img/PPDB.jpg" alt="" class="group-hover:scale-125 group-hover:rotate-[5deg] group-hover:opacity-60 transition-all duration-700 ">
                        </div>
                        {{-- akhir img --}}
                    </div>
                    {{-- akhir img 3 --}}


                    {{-- img 4 --}}
                    <div class=" aspect-[2/2] col-span-1 overflow-hidden bg-black relative group imageGalery">
                        {{-- img svg  --}}
                        <div class="bg-slate-50 text-cyan-600 p-2 w-12 h-12 justify-center items-center mx-auto rounded-full flex absolute top-[50%] left-[50%] -translate-y-[50%] -translate-x-[50%] z-40 opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-cyan-600 hover:text-slate-100 group cursor-pointer" id="cameraBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-5 h-5 fill-current" viewBox="0 0 24 24" style="transform: msFilter;"><path d="M12 8c-2.168 0-4 1.832-4 4s1.832 4 4 4 4-1.832 4-4-1.832-4-4-4zm0 6c-1.065 0-2-.935-2-2s.935-2 2-2 2 .935 2 2-.935 2-2 2z"></path><path d="M20 5h-2.586l-2.707-2.707A.996.996 0 0 0 14 2h-4a.996.996 0 0 0-.707.293L6.586 5H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 18V7h3c.266 0 .52-.105.707-.293L10.414 4h3.172l2.707 2.707A.996.996 0 0 0 17 7h3l.002 11H4z"></path></svg>
                        </div>
                        {{-- akhir img svg --}}

                        {{-- img --}}
                        <div class="w-full h-full ">
                            <img src="/img/pentas seni SMPN 16.jpg" alt="" class="group-hover:scale-125 group-hover:rotate-[5deg] group-hover:opacity-60 transition-all duration-700 ">
                        </div>
                        {{-- akhir img --}}
                    </div>
                    {{-- akhir img 4 --}}

                    {{-- img 5 --}}
                    <div class=" aspect-[2/2] col-span-1 overflow-hidden bg-black relative group imageGalery">
                        {{-- img svg  --}}
                        <div class="bg-slate-50 text-cyan-600 p-2 w-12 h-12 justify-center items-center mx-auto rounded-full flex absolute top-[50%] left-[50%] -translate-y-[50%] -translate-x-[50%] z-40 opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-cyan-600 hover:text-slate-100 group cursor-pointer" id="cameraBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-5 h-5 fill-current" viewBox="0 0 24 24" style="transform: msFilter;"><path d="M12 8c-2.168 0-4 1.832-4 4s1.832 4 4 4 4-1.832 4-4-1.832-4-4-4zm0 6c-1.065 0-2-.935-2-2s.935-2 2-2 2 .935 2 2-.935 2-2 2z"></path><path d="M20 5h-2.586l-2.707-2.707A.996.996 0 0 0 14 2h-4a.996.996 0 0 0-.707.293L6.586 5H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 18V7h3c.266 0 .52-.105.707-.293L10.414 4h3.172l2.707 2.707A.996.996 0 0 0 17 7h3l.002 11H4z"></path></svg>
                        </div>
                        {{-- akhir img svg --}}

                        {{-- img --}}
                        <div class="w-full h-full ">
                            <img src="img/muridall03.jpg" alt="" class="group-hover:scale-125 group-hover:rotate-[5deg] group-hover:opacity-60 transition-all duration-700 ">
                        </div>
                        {{-- akhir img --}}
                    </div>
                    {{-- akhir img 5 --}}


                    {{-- img 6 --}}
                    <div class=" aspect-[2/1] col-span-2  overflow-hidden bg-black relative group imageGalery">
                        {{-- img svg  --}}
                        <div class="bg-slate-50 text-cyan-600 p-2 w-12 h-12 justify-center items-center mx-auto rounded-full flex absolute top-[50%] left-[50%] -translate-y-[50%] -translate-x-[50%] z-40 opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-cyan-600 hover:text-slate-100 group cursor-pointer" id="cameraBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-5 h-5 fill-current" viewBox="0 0 24 24" style="transform: msFilter;"><path d="M12 8c-2.168 0-4 1.832-4 4s1.832 4 4 4 4-1.832 4-4-1.832-4-4-4zm0 6c-1.065 0-2-.935-2-2s.935-2 2-2 2 .935 2 2-.935 2-2 2z"></path><path d="M20 5h-2.586l-2.707-2.707A.996.996 0 0 0 14 2h-4a.996.996 0 0 0-.707.293L6.586 5H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 18V7h3c.266 0 .52-.105.707-.293L10.414 4h3.172l2.707 2.707A.996.996 0 0 0 17 7h3l.002 11H4z"></path></svg>
                        </div>
                        {{-- akhir img svg --}}

                        {{-- img --}}
                        <div class="w-full h-full ">
                            <img src="/img/PPDB2.jpg" alt="" class="group-hover:scale-125 group-hover:rotate-[5deg] group-hover:opacity-60 transition-all duration-700 ">
                        </div>
                        {{-- akhir img --}}
                    </div>
                    {{-- akhir img 6 --}}


                    {{-- img 7 --}}
                    <div class=" aspect-[2/2] col-span-1 overflow-hidden bg-black relative group imageGalery">
                        {{-- img svg  --}}
                        <div class="bg-slate-50 text-cyan-600 p-2 w-12 h-12 justify-center items-center mx-auto rounded-full flex absolute top-[50%] left-[50%] -translate-y-[50%] -translate-x-[50%] z-40 opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-cyan-600 hover:text-slate-100 group cursor-pointer" id="cameraBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-5 h-5 fill-current" viewBox="0 0 24 24" style="transform: msFilter;"><path d="M12 8c-2.168 0-4 1.832-4 4s1.832 4 4 4 4-1.832 4-4-1.832-4-4-4zm0 6c-1.065 0-2-.935-2-2s.935-2 2-2 2 .935 2 2-.935 2-2 2z"></path><path d="M20 5h-2.586l-2.707-2.707A.996.996 0 0 0 14 2h-4a.996.996 0 0 0-.707.293L6.586 5H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 18V7h3c.266 0 .52-.105.707-.293L10.414 4h3.172l2.707 2.707A.996.996 0 0 0 17 7h3l.002 11H4z"></path></svg>
                        </div>
                        {{-- akhir img svg --}}


                        {{-- img --}}
                        <div class="w-full h-full ">
                            <img src="/img/muridall04.jpg" alt="" class="group-hover:scale-125 group-hover:rotate-[5deg] group-hover:opacity-60 transition-all duration-700 ">
                        </div>
                        {{-- akhir img --}}

                    </div>
                    {{-- akhir img 7 --}}



                    {{-- img 8 --}}
                    <div class=" aspect-[2/2] col-span-1 overflow-hidden bg-black relative group imageGalery">
                        {{-- img svg  --}}
                        <div class="bg-slate-50 text-cyan-600 p-2 w-12 h-12 justify-center items-center mx-auto rounded-full flex absolute top-[50%] left-[50%] -translate-y-[50%] -translate-x-[50%] z-40 opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-cyan-600 hover:text-slate-100 group cursor-pointer" id="cameraBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-5 h-5 fill-current" viewBox="0 0 24 24" style="transform: msFilter;"><path d="M12 8c-2.168 0-4 1.832-4 4s1.832 4 4 4 4-1.832 4-4-1.832-4-4-4zm0 6c-1.065 0-2-.935-2-2s.935-2 2-2 2 .935 2 2-.935 2-2 2z"></path><path d="M20 5h-2.586l-2.707-2.707A.996.996 0 0 0 14 2h-4a.996.996 0 0 0-.707.293L6.586 5H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 18V7h3c.266 0 .52-.105.707-.293L10.414 4h3.172l2.707 2.707A.996.996 0 0 0 17 7h3l.002 11H4z"></path></svg>
                        </div>
                        {{-- akhir img svg --}}


                        {{-- img --}}
                        <div class="w-full h-full ">
                            <img src="/img/muridall05.jpg" alt="" class="group-hover:scale-125 group-hover:rotate-[5deg] group-hover:opacity-60 transition-all duration-700 ">
                        </div>
                        {{-- akhir img --}}

                    </div>
                    {{-- akhir img 8 --}}



                    {{-- img 9 --}}
                    <div class=" aspect-[2/1] col-span-2 overflow-hidden bg-black relative group imageGalery">
                        {{-- img svg  --}}
                        <div class="bg-slate-50 text-cyan-600 p-2 w-12 h-12 justify-center items-center mx-auto rounded-full flex absolute top-[50%] left-[50%] -translate-y-[50%] -translate-x-[50%] z-40 opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-cyan-600 hover:text-slate-100 group cursor-pointer" id="cameraBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-5 h-5 fill-current" viewBox="0 0 24 24" style="transform: msFilter;"><path d="M12 8c-2.168 0-4 1.832-4 4s1.832 4 4 4 4-1.832 4-4-1.832-4-4-4zm0 6c-1.065 0-2-.935-2-2s.935-2 2-2 2 .935 2 2-.935 2-2 2z"></path><path d="M20 5h-2.586l-2.707-2.707A.996.996 0 0 0 14 2h-4a.996.996 0 0 0-.707.293L6.586 5H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 18V7h3c.266 0 .52-.105.707-.293L10.414 4h3.172l2.707 2.707A.996.996 0 0 0 17 7h3l.002 11H4z"></path></svg>
                        </div>
                        {{-- akhir img svg --}}


                        {{-- img --}}
                        <div class="w-full h-full ">
                            <img src="/img/muridall15.jpg" alt="" class="group-hover:scale-125 group-hover:rotate-[5deg] group-hover:opacity-60 transition-all duration-700 ">
                        </div>
                        {{-- akhir img --}}

                    </div>
                    {{-- akhir img 9 --}}


                    {{-- img 10 --}}
                    <div class=" aspect-[2/2] col-span-1 overflow-hidden bg-black relative group imageGalery">
                        {{-- img svg  --}}
                        <div class="bg-slate-50 text-cyan-600 p-2 w-12 h-12 justify-center items-center mx-auto rounded-full flex absolute top-[50%] left-[50%] -translate-y-[50%] -translate-x-[50%] z-40 opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-cyan-600 hover:text-slate-100 group cursor-pointer" id="cameraBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-5 h-5 fill-current" viewBox="0 0 24 24" style="transform: msFilter;"><path d="M12 8c-2.168 0-4 1.832-4 4s1.832 4 4 4 4-1.832 4-4-1.832-4-4-4zm0 6c-1.065 0-2-.935-2-2s.935-2 2-2 2 .935 2 2-.935 2-2 2z"></path><path d="M20 5h-2.586l-2.707-2.707A.996.996 0 0 0 14 2h-4a.996.996 0 0 0-.707.293L6.586 5H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 18V7h3c.266 0 .52-.105.707-.293L10.414 4h3.172l2.707 2.707A.996.996 0 0 0 17 7h3l.002 11H4z"></path></svg>
                        </div>
                        {{-- akhir img svg --}}


                        {{-- img --}}
                        <div class="w-full h-full ">
                            <img src="/img/muridall06.jpg" alt="" class="group-hover:scale-125 group-hover:rotate-[5deg] group-hover:opacity-60 transition-all duration-700 ">
                        </div>
                        {{-- akhir img --}}

                    </div>
                    {{-- akhir img 10 --}}



                    {{-- img 11 --}}
                    <div class=" aspect-[2/2] col-span-1 overflow-hidden bg-black relative group imageGalery">
                        {{-- img svg  --}}
                        <div class="bg-slate-50 text-cyan-600 p-2 w-12 h-12 justify-center items-center mx-auto rounded-full flex absolute top-[50%] left-[50%] -translate-y-[50%] -translate-x-[50%] z-40 opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-cyan-600 hover:text-slate-100 group cursor-pointer" id="cameraBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-5 h-5 fill-current" viewBox="0 0 24 24" style="transform: msFilter;"><path d="M12 8c-2.168 0-4 1.832-4 4s1.832 4 4 4 4-1.832 4-4-1.832-4-4-4zm0 6c-1.065 0-2-.935-2-2s.935-2 2-2 2 .935 2 2-.935 2-2 2z"></path><path d="M20 5h-2.586l-2.707-2.707A.996.996 0 0 0 14 2h-4a.996.996 0 0 0-.707.293L6.586 5H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 18V7h3c.266 0 .52-.105.707-.293L10.414 4h3.172l2.707 2.707A.996.996 0 0 0 17 7h3l.002 11H4z"></path></svg>
                        </div>
                        {{-- akhir img svg --}}


                        {{-- img --}}
                        <div class="w-full h-full ">
                            <img src="/img/muridall07.jpg" alt="" class="group-hover:scale-125 group-hover:rotate-[5deg] group-hover:opacity-60 transition-all duration-700 ">
                        </div>
                        {{-- akhir img --}}

                    </div>
                    {{-- akhir img 11 --}}



                    {{-- img 12 --}}
                    <div class=" aspect-[2/2] col-span-1 overflow-hidden bg-black relative group imageGalery">
                        {{-- img svg  --}}
                        <div class="bg-slate-50 text-cyan-600 p-2 w-12 h-12 justify-center items-center mx-auto rounded-full flex absolute top-[50%] left-[50%] -translate-y-[50%] -translate-x-[50%] z-40 opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-cyan-600 hover:text-slate-100 group cursor-pointer" id="cameraBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-5 h-5 fill-current" viewBox="0 0 24 24" style="transform: msFilter;"><path d="M12 8c-2.168 0-4 1.832-4 4s1.832 4 4 4 4-1.832 4-4-1.832-4-4-4zm0 6c-1.065 0-2-.935-2-2s.935-2 2-2 2 .935 2 2-.935 2-2 2z"></path><path d="M20 5h-2.586l-2.707-2.707A.996.996 0 0 0 14 2h-4a.996.996 0 0 0-.707.293L6.586 5H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 18V7h3c.266 0 .52-.105.707-.293L10.414 4h3.172l2.707 2.707A.996.996 0 0 0 17 7h3l.002 11H4z"></path></svg>
                        </div>
                        {{-- akhir img svg --}}


                        {{-- img --}}
                        <div class="w-full h-full ">
                            <img src="/img/muridall08.jpg" alt="" class="group-hover:scale-125 group-hover:rotate-[5deg] group-hover:opacity-60 transition-all duration-700 ">
                        </div>
                        {{-- akhir img --}}

                    </div>
                    {{-- akhir img 12 --}}


                    {{-- img 13 --}}
                    <div class=" aspect-[2/2] col-span-1 overflow-hidden bg-black relative group imageGalery">
                        {{-- img svg  --}}
                        <div class="bg-slate-50 text-cyan-600 p-2 w-12 h-12 justify-center items-center mx-auto rounded-full flex absolute top-[50%] left-[50%] -translate-y-[50%] -translate-x-[50%] z-40 opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-cyan-600 hover:text-slate-100 group cursor-pointer" id="cameraBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-5 h-5 fill-current" viewBox="0 0 24 24" style="transform: msFilter;"><path d="M12 8c-2.168 0-4 1.832-4 4s1.832 4 4 4 4-1.832 4-4-1.832-4-4-4zm0 6c-1.065 0-2-.935-2-2s.935-2 2-2 2 .935 2 2-.935 2-2 2z"></path><path d="M20 5h-2.586l-2.707-2.707A.996.996 0 0 0 14 2h-4a.996.996 0 0 0-.707.293L6.586 5H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 18V7h3c.266 0 .52-.105.707-.293L10.414 4h3.172l2.707 2.707A.996.996 0 0 0 17 7h3l.002 11H4z"></path></svg>
                        </div>
                        {{-- akhir img svg --}}


                        {{-- img --}}
                        <div class="w-full h-full ">
                            <img src="/img/muridall09.jpg" alt="" class="group-hover:scale-125 group-hover:rotate-[5deg] group-hover:opacity-60 transition-all duration-700 ">
                        </div>
                        {{-- akhir img --}}

                    </div>
                    {{-- akhir img 13 --}}


                    {{-- img 14 --}}
                    <div class=" aspect-[2/2] col-span-1 overflow-hidden bg-black relative group imageGalery">
                        {{-- img svg  --}}
                        <div class="bg-slate-50 text-cyan-600 p-2 w-12 h-12 justify-center items-center mx-auto rounded-full flex absolute top-[50%] left-[50%] -translate-y-[50%] -translate-x-[50%] z-40 opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-cyan-600 hover:text-slate-100 group cursor-pointer" id="cameraBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-5 h-5 fill-current" viewBox="0 0 24 24" style="transform: msFilter;"><path d="M12 8c-2.168 0-4 1.832-4 4s1.832 4 4 4 4-1.832 4-4-1.832-4-4-4zm0 6c-1.065 0-2-.935-2-2s.935-2 2-2 2 .935 2 2-.935 2-2 2z"></path><path d="M20 5h-2.586l-2.707-2.707A.996.996 0 0 0 14 2h-4a.996.996 0 0 0-.707.293L6.586 5H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 18V7h3c.266 0 .52-.105.707-.293L10.414 4h3.172l2.707 2.707A.996.996 0 0 0 17 7h3l.002 11H4z"></path></svg>
                        </div>
                        {{-- akhir img svg --}}


                        {{-- img --}}
                        <div class="w-full h-full ">
                            <img src="/img/muridall10.jpg" alt="" class="group-hover:scale-125 group-hover:rotate-[5deg] group-hover:opacity-60 transition-all duration-700 ">
                        </div>
                        {{-- akhir img --}}

                    </div>
                    {{-- akhir img 14 --}}


                    {{-- img 15 --}}
                    <div class=" aspect-[2/2] col-span-1 overflow-hidden bg-black relative group imageGalery">
                        {{-- img svg  --}}
                        <div class="bg-slate-50 text-cyan-600 p-2 w-12 h-12 justify-center items-center mx-auto rounded-full flex absolute top-[50%] left-[50%] -translate-y-[50%] -translate-x-[50%] z-40 opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-cyan-600 hover:text-slate-100 group cursor-pointer" id="cameraBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-5 h-5 fill-current" viewBox="0 0 24 24" style="transform: msFilter;"><path d="M12 8c-2.168 0-4 1.832-4 4s1.832 4 4 4 4-1.832 4-4-1.832-4-4-4zm0 6c-1.065 0-2-.935-2-2s.935-2 2-2 2 .935 2 2-.935 2-2 2z"></path><path d="M20 5h-2.586l-2.707-2.707A.996.996 0 0 0 14 2h-4a.996.996 0 0 0-.707.293L6.586 5H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 18V7h3c.266 0 .52-.105.707-.293L10.414 4h3.172l2.707 2.707A.996.996 0 0 0 17 7h3l.002 11H4z"></path></svg>
                        </div>
                        {{-- akhir img svg --}}


                        {{-- img --}}
                        <div class="w-full h-full ">
                            <img src="/img/muridall11.jpg" alt="" class="group-hover:scale-125 group-hover:rotate-[5deg] group-hover:opacity-60 transition-all duration-700 ">
                        </div>
                        {{-- akhir img --}}

                    </div>
                    {{-- akhir img 15 --}}



                    {{-- img 16 --}}
                    <div class=" aspect-[2/2] col-span-1 overflow-hidden bg-black relative group imageGalery">
                        {{-- img svg  --}}
                        <div class="bg-slate-50 text-cyan-600 p-2 w-12 h-12 justify-center items-center mx-auto rounded-full flex absolute top-[50%] left-[50%] -translate-y-[50%] -translate-x-[50%] z-40 opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-cyan-600 hover:text-slate-100 group cursor-pointer" id="cameraBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-5 h-5 fill-current" viewBox="0 0 24 24" style="transform: msFilter;"><path d="M12 8c-2.168 0-4 1.832-4 4s1.832 4 4 4 4-1.832 4-4-1.832-4-4-4zm0 6c-1.065 0-2-.935-2-2s.935-2 2-2 2 .935 2 2-.935 2-2 2z"></path><path d="M20 5h-2.586l-2.707-2.707A.996.996 0 0 0 14 2h-4a.996.996 0 0 0-.707.293L6.586 5H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 18V7h3c.266 0 .52-.105.707-.293L10.414 4h3.172l2.707 2.707A.996.996 0 0 0 17 7h3l.002 11H4z"></path></svg>
                        </div>
                        {{-- akhir img svg --}}


                        {{-- img --}}
                        <div class="w-full h-full ">
                            <img src="/img/muridall12.jpg" alt="" class="group-hover:scale-125 group-hover:rotate-[5deg] group-hover:opacity-60 transition-all duration-700 ">
                        </div>
                        {{-- akhir img --}}

                    </div>
                    {{-- akhir img 16 --}}


                    {{-- img 17 --}}
                    <div class=" aspect-[2/2] col-span-1 overflow-hidden bg-black relative group imageGalery">
                        {{-- img svg  --}}
                        <div class="bg-slate-50 text-cyan-600 p-2 w-12 h-12 justify-center items-center mx-auto rounded-full flex absolute top-[50%] left-[50%] -translate-y-[50%] -translate-x-[50%] z-40 opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-cyan-600 hover:text-slate-100 group cursor-pointer" id="cameraBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-5 h-5 fill-current" viewBox="0 0 24 24" style="transform: msFilter;"><path d="M12 8c-2.168 0-4 1.832-4 4s1.832 4 4 4 4-1.832 4-4-1.832-4-4-4zm0 6c-1.065 0-2-.935-2-2s.935-2 2-2 2 .935 2 2-.935 2-2 2z"></path><path d="M20 5h-2.586l-2.707-2.707A.996.996 0 0 0 14 2h-4a.996.996 0 0 0-.707.293L6.586 5H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 18V7h3c.266 0 .52-.105.707-.293L10.414 4h3.172l2.707 2.707A.996.996 0 0 0 17 7h3l.002 11H4z"></path></svg>
                        </div>
                        {{-- akhir img svg --}}


                        {{-- img --}}
                        <div class="w-full h-full ">
                            <img src="/img/muridall13.jpg" alt="" class="group-hover:scale-125 group-hover:rotate-[5deg] group-hover:opacity-60 transition-all duration-700 ">
                        </div>
                        {{-- akhir img --}}

                    </div>
                    {{-- akhir img 17 --}}


                    {{-- img 18 --}}
                    <div class=" aspect-[2/2] col-span-1 overflow-hidden bg-black relative group imageGalery">
                        {{-- img svg  --}}
                        <div class="bg-slate-50 text-cyan-600 p-2 w-12 h-12 justify-center items-center mx-auto rounded-full flex absolute top-[50%] left-[50%] -translate-y-[50%] -translate-x-[50%] z-40 opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-cyan-600 hover:text-slate-100 group cursor-pointer" id="cameraBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-5 h-5 fill-current" viewBox="0 0 24 24" style="transform: msFilter;"><path d="M12 8c-2.168 0-4 1.832-4 4s1.832 4 4 4 4-1.832 4-4-1.832-4-4-4zm0 6c-1.065 0-2-.935-2-2s.935-2 2-2 2 .935 2 2-.935 2-2 2z"></path><path d="M20 5h-2.586l-2.707-2.707A.996.996 0 0 0 14 2h-4a.996.996 0 0 0-.707.293L6.586 5H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 18V7h3c.266 0 .52-.105.707-.293L10.414 4h3.172l2.707 2.707A.996.996 0 0 0 17 7h3l.002 11H4z"></path></svg>
                        </div>
                        {{-- akhir img svg --}}


                        {{-- img --}}
                        <div class="w-full h-full ">
                            <img src="/img/muridall14.jpg" alt="" class="group-hover:scale-125 group-hover:rotate-[5deg] group-hover:opacity-60 transition-all duration-700 ">
                        </div>
                        {{-- akhir img --}}

                    </div>
                    {{-- akhir img 18 --}}


                    {{-- img 19 --}}
                    <div class=" aspect-[2/2] col-span-1 overflow-hidden bg-black relative group imageGalery">
                        {{-- img svg  --}}
                        <div class="bg-slate-50 text-cyan-600 p-2 w-12 h-12 justify-center items-center mx-auto rounded-full flex absolute top-[50%] left-[50%] -translate-y-[50%] -translate-x-[50%] z-40 opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-cyan-600 hover:text-slate-100 group cursor-pointer" id="cameraBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-5 h-5 fill-current" viewBox="0 0 24 24" style="transform: msFilter;"><path d="M12 8c-2.168 0-4 1.832-4 4s1.832 4 4 4 4-1.832 4-4-1.832-4-4-4zm0 6c-1.065 0-2-.935-2-2s.935-2 2-2 2 .935 2 2-.935 2-2 2z"></path><path d="M20 5h-2.586l-2.707-2.707A.996.996 0 0 0 14 2h-4a.996.996 0 0 0-.707.293L6.586 5H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 18V7h3c.266 0 .52-.105.707-.293L10.414 4h3.172l2.707 2.707A.996.996 0 0 0 17 7h3l.002 11H4z"></path></svg>
                        </div>
                        {{-- akhir img svg --}}


                        {{-- img --}}
                        <div class="w-full h-full ">
                            <img src="/img/muridall16.jpg" alt="" class="group-hover:scale-125 group-hover:rotate-[5deg] group-hover:opacity-60 transition-all duration-700 ">
                        </div>
                        {{-- akhir img --}}

                    </div>
                    {{-- akhir img 19 --}}

                </div>
            </div>
            {{-- img kecil --}}

        </div>
    </section>
</div>
