<!-- navbar  -->
<header class="bg-transparent fixed top-0 left-0 w-full flex items-center z-50 font-cabin transition-all duration-500 ease-in">
    <div class="lg:container w-full">
        <div class=" flex items-center justify-between relative px-6  sm:px-9 lg:px-16 py-3 sm:py-7 lg:py-3 text-base sm:text-xl lg:text-base ">

            {{-- logo --}}
            <div class="flex justify-center items-center w-[11%] sm:w-[9%] lg:w-[4.9%]  ">
                <a href="#" class="cursor-pointer">
                    <img src="/img/logo-smp.png" alt="logo SMP 15 Cirebon" class= "w-full  lg:pt-0 pt-0 ">
                </a>
            </div>
            {{-- akhir logo --}}


            {{-- menu --}}
            <ul class="items-start top-0 right-0 translate-x-[100%] transition-all ease-linear duration-[400ms] absolute justify-start flex flex-col w-10/12 h-screen lg:static lg:translate-x-0 lg:flex-row lg:h-max lg:w-max bg-blue-800 lg:bg-transparent">

                {{-- x button --}}
                <li class="cursor-pointer closeNav  my-[1.1rem] sm:my-[2rem] mx-8 sm:mx-12 lg:mx-0 font-medium lg:my-0  lg:ml-8 lg:hidden text-[1.2rem] sm:text-[1.5rem] text-slate-200">
                    <i class="fa-solid fa-x"></i>
                </li>
                {{-- x button --}}


                {{-- home --}}
                <li class="{{ $link == 'Home' ?
                'text-slate-200 lg:text-blue-600 after:w-[50%] defaultColor    ' :
                ' text-slate-200 lg:text-slate-300    '  }}
                after:absolute after:bg-slate-200 lg:after:bg-blue-600 after:h-[2px] after:w-0 after:left-0 after:bottom-[-7px] lg:after:bottom-[-4px] after:transition-all after:duration-300 hover:after:w-[50%] after:content-['']  my-[1.1rem] sm:my-[2rem] lg:my-0 mx-8 sm:mx-12  lg:mx-0    lg:ml-11    lg:hover:text-blue-600 cursor-pointer relative px-0 liScrol ">
                    <a href="/" class="flex items-center">Home  </a>
                </li>
                {{-- akhir home --}}


                {{-- profile --}}
                <li class="{{ $link == 'Profile' ?
                'text-slate-200 lg:text-blue-600 after:w-[50%] defaultColor     ' :
                ' text-slate-200 lg:text-slate-300  '  }}
                after:absolute after:bg-slate-200 lg:after:bg-blue-600 after:h-[2px] after:w-0 after:left-0 after:bottom-[-7px] lg:after:bottom-[-4px] after:transition-all after:duration-300 hover:after:w-[50%] after:content-['']  my-[1.1rem] sm:my-[2rem] lg:my-0 mx-8 sm:mx-12  lg:mx-0    lg:ml-11    lg:hover:text-blue-600 cursor-pointer  relative px-0 liScrol group">
                    <p  class="flex items-center navbar-click-menu">Profile <i class=" ml-2 text-[0.6rem] fa-solid fa-chevron-down"></i> </p>
                    <div class="dropDown block absolute z-30 left-0 top-[100%] bg-slate-50 rounded-md mt-5 w-56">
                        <ul class="hidden text-sm font-cabin text-slate-600 navbar-menu-list">
                            <a class="py-3 border-b border-b-slate-300 px-7 hover:text-blue-600 block" href="/profileSMPN16#tentangSekolah">Tentang Sekolah</a>
                            <a class="py-3 border-b border-b-slate-300 px-7 hover:text-blue-600 block" href="/profileSMPN16#VisiDanMisi">Visi Dan Misi</a>
                            <a class="py-3 border-b border-b-slate-300 px-7 hover:text-blue-600 block" href="/profileSMPN16#tataTertib">Tata Tertib</a>
                            <a class="py-3 px-7 hover:text-blue-600 block" href="/profileSMPN16#news">News</a>
                            {{-- <li class="py-3 border-b border-b-slate-900 px-7"><a href="#">tiket photo</a></li> --}}
                        </ul>
                    </div>
                </li>
                {{-- akhir profile --}}


                {{-- kesiswaan --}}
                <li class="{{ $link == 'Kesiswaan' ?
                'text-slate-200 lg:text-blue-600 after:w-[50%] defaultColor     ' :
                ' text-slate-200 lg:text-slate-300 '  }}
                after:absolute after:bg-slate-200 lg:after:bg-blue-600 after:h-[2px] after:w-0 after:left-0 after:bottom-[-7px] lg:after:bottom-[-4px] after:transition-all after:duration-300 hover:after:w-[50%] after:content-['']  my-[1.1rem] sm:my-[2rem] lg:my-0 mx-8 sm:mx-12  lg:mx-0    lg:ml-11    lg:hover:text-blue-600 cursor-pointer  relative px-0 liScrol group ">
                    <p class="flex items-center navbar-click-menu">Kesiswaan <i class=" ml-2 text-[0.6rem] fa-solid fa-chevron-down"></i> </p>
                    <div class="dropDown block absolute z-30 left-0 top-[100%] bg-slate-50 rounded-md mt-5 w-56">
                        <ul class="hidden text-sm font-cabin text-slate-600 navbar-menu-list">
                            <a href="/kesiswaan" class="py-3 border-b border-b-slate-300 px-7 hover:text-blue-600 block">Ekstrakurikuler</a>
                            <a href="/kesiswaan#galeri" class="py-3 border-b border-b-slate-300 px-7 hover:text-blue-600 block">Galeri</a>
                            <a href="/kesiswaan#prestasi" class="py-3 border-b border-b-slate-300 px-7 hover:text-blue-600 block">Prestasi</a>
                            <a href="/kesiswaan#Presensi" class="py-3 px-7 hover:text-blue-600 block">Recap Kehadiran</a>

                            {{-- <li class="py-3 border-b border-b-slate-900 px-7"><a href="#">tiket photo</a></li> --}}
                        </ul>
                    </div>
                </li>
                {{-- akhir kesiswaan --}}


                {{-- kurikulum --}}
                <li class="{{ $link == 'PPDB' ?
                'text-slate-200 lg:text-blue-600 after:w-[50%] defaultColor     ' :
                ' text-slate-200 lg:text-slate-300 '  }}
                after:absolute after:bg-slate-200 lg:after:bg-blue-600 after:h-[2px] after:w-0 after:left-0 after:bottom-[-7px] lg:after:bottom-[-4px] after:transition-all after:duration-300 hover:after:w-[50%] after:content-['']  my-[1.1rem] sm:my-[2rem] lg:my-0 mx-8 sm:mx-12  lg:mx-0    lg:ml-11    lg:hover:text-blue-600 cursor-pointer  relative px-0 liScrol">
                    <a href="/ppdb" class="flex items-center">PPDB </a>
                </li>
                {{-- akhir kurikulum --}}


                {{-- kepegawaian --}}
                <li class="{{ $link == 'Kepegawaian' ?
                'text-slate-200 lg:text-blue-600 after:w-[50%] defaultColor' :
                ' text-slate-200 lg:text-slate-300 '  }}
                after:absolute after:bg-slate-200 lg:after:bg-blue-600 after:h-[2px] after:w-0 after:left-0 after:bottom-[-7px] lg:after:bottom-[-4px] after:transition-all after:duration-300 hover:after:w-[50%] after:content-['']  my-[1.1rem] sm:my-[2rem] lg:my-0 mx-8 sm:mx-12  lg:mx-0    lg:ml-11    lg:hover:text-blue-600 cursor-pointer  relative px-0 liScrol group ">
                    <p class="flex items-center navbar-click-menu" >Tenaga Pengajar <i class=" ml-2 text-[0.6rem] fa-solid fa-chevron-down "></i> </p>
                    <div class=" dropDown block absolute z-30 left-0 top-[100%] bg-slate-50 rounded-md mt-5 w-56">
                        <ul class=" hidden text-sm font-cabin text-slate-600 navbar-menu-list ">
                            <a href="/kepegawaian#guru" class="py-3 border-b border-b-slate-300 px-7 hover:text-blue-600 block">Guru</a>
                            <a href="/kepegawaian#waliKelas" class="py-3 px-7 hover:text-blue-600 block">Wali Kelas</a>
                            {{-- <li class="py-3 border-b border-b-slate-900 px-7"><a href="#">tiket photo</a></li> --}}
                        </ul>
                    </div>
                </li>
                {{-- akhir kepegawaian --}}


                {{-- portal guru --}}
                <li class="{{ $link == 'PortalGuru' ?
                'text-slate-200 lg:text-blue-600 after:w-[50%] defaultColor' :
                ' text-slate-200 lg:text-slate-300 '  }}
                after:absolute after:bg-slate-200 lg:after:bg-blue-600 after:h-[2px] after:w-0 after:left-0 after:bottom-[-7px] lg:after:bottom-[-4px] after:transition-all after:duration-300 hover:after:w-[50%] after:content-['']  my-[1.1rem] sm:my-[2rem] lg:my-0 mx-8 sm:mx-12  lg:mx-0    lg:ml-11    lg:hover:text-blue-600 cursor-pointer  relative px-0 liScrol">
                    <a href="/login" class="flex items-center">Portal Guru  </a>
                </li>
                {{-- akhir portal guru --}}

            </ul>
            {{-- akhir menu --}}

            {{-- menu toogle --}}
            <div class="lg:hidden block cursor-pointer text-[1.55rem] sm:text-[2.2rem] text-slate-200 hamburgerMenu" id="menuToogle">
                <i class="fa-solid fa-bars"></i>
            </div>
            {{-- akhir menu toogle --}}
        </div>
    </div>
</header>
<!-- akhir navbar  -->
