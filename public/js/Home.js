// navbar transparan
const hamburgerMenu = document.querySelector('.hamburgerMenu')
const header = document.querySelector('header')
const fixedNav = header.offsetTop
const liScrols = document.querySelectorAll('.liScrol')

window.onscroll = function () {


    if (window.pageYOffset > fixedNav) {
        header.classList.add('navbar-fixed')
        hamburgerMenu.classList.remove('text-slate-200')
        hamburgerMenu.classList.add('text-slate-900')

        liScrols.forEach((li) => {
            if (!li.classList.contains('defaultColor')) {
                if (li.classList.contains('lg:text-blue-600')) {
                    li.classList.remove('lg:text-blue-600','lg:text-slate-900','lg:text-slate-300' )
                    li.classList.add('lg:text-blue-600')
                    return
                }
                li.classList.remove('lg:text-blue-600','lg:text-slate-900','lg:text-slate-300' )
                li.classList.add('lg:text-slate-900')
            }
        });
    } else{
        header.classList.remove('navbar-fixed')
        hamburgerMenu.classList.remove('text-slate-900')
        hamburgerMenu.classList.add('text-slate-200')

        liScrols.forEach((li) => {
            if (!li.classList.contains('defaultColor')) {
                if (li.classList.contains('lg:text-blue-600')) {
                    li.classList.remove('lg:text-blue-600','lg:text-slate-900','lg:text-slate-300' )
                    li.classList.add('lg:text-blue-600')
                    return
                }
                li.classList.remove('lg:text-blue-600','lg:text-slate-900','lg:text-slate-300' )
                li.classList.add('lg:text-slate-300')
            }
        });
    }

}
// akhir navbar transparan




// navbar
const menuToogle = document.querySelector('#menuToogle')
const navbarMenu = document.querySelector('header div div ul')
const closeNav = document.querySelector('.closeNav')


menuToogle.addEventListener('click', function() {
    navbarMenu.classList.toggle('muncul')
})

closeNav.addEventListener('click', function() {
    navbarMenu.classList.toggle('muncul')
})

// akhir navbar






// navbar menu list

const toggleButtons = document.querySelectorAll('.navbar-click-menu');
const navbarMenuLists = document.querySelectorAll('.navbar-menu-list')

toggleButtons.forEach((toggleButton) => {

    toggleButton.addEventListener('click', (event) => {
        event.stopPropagation();

        //jika ada menu yang kebuka lebih dari satu,maka yg lain akan tertutup
        navbarMenuLists.forEach(navbarMenuList => {
            navbarMenuList.classList.remove('block' );
            navbarMenuList.classList.add('hidden');

            if (navbarMenuList.parentElement.parentElement.classList.contains('defaultColor')) {
                navbarMenuList.parentElement.parentElement.classList.remove('text-slate-200' , 'lg:text-blue-600','lg:text-slate-300', 'lg:text-slate-900')
                navbarMenuList.parentElement.parentElement.classList.add('text-slate-200' , 'lg:text-blue-600' )
                return
            } else {
                if (window.pageYOffset > fixedNav) {
                    navbarMenuList.parentElement.parentElement.classList.remove('text-slate-200' , 'lg:text-blue-600', 'lg:text-slate-300','lg:text-slate-900' , 'after:w-[50%]')
                    navbarMenuList.parentElement.parentElement.classList.add('text-slate-200' , 'lg:text-slate-900' ,'after:w-0')
                    return
                }
                navbarMenuList.parentElement.parentElement.classList.remove('text-slate-200' , 'lg:text-blue-600', 'lg:text-slate-300','lg:text-slate-900' , 'after:w-[50%]')
                navbarMenuList.parentElement.parentElement.classList.add('text-slate-200' , 'lg:text-slate-300' ,'after:w-0')
            }
        });

        toggleButton.nextElementSibling.firstElementChild.classList.remove('hidden')
        toggleButton.nextElementSibling.firstElementChild.classList.add('block')


        toggleButton.parentElement.classList.remove('text-slate-200' , 'lg:text-slate-300', 'lg:text-slate-900' ,'after:w-0')
        toggleButton.parentElement.classList.add('text-slate-200' , 'lg:text-blue-600' , 'after:w-[50%]')

    });


});

//=== ketika window diklik maka akan menyembunyikan menu navbar====
window.addEventListener('click', () => {
    navbarMenuLists.forEach(navbarMenuList => {
        navbarMenuList.classList.remove('block');
        navbarMenuList.classList.add('hidden');

        if (navbarMenuList.parentElement.parentElement.classList.contains('lg:text-blue-600')) {

            if (navbarMenuList.parentElement.parentElement.classList.contains('defaultColor')) {
                navbarMenuList.parentElement.parentElement.classList.remove('text-slate-200' , 'lg:text-blue-600', 'lg:text-slate-300','lg:text-slate-900' , 'after:w-[50%]')
                navbarMenuList.parentElement.parentElement.classList.add('text-slate-200' , 'lg:text-blue-600' ,'after:w-[50%]')
                return
            } else {
                if (window.pageYOffset > fixedNav) {
                    navbarMenuList.parentElement.parentElement.classList.remove('text-slate-200' , 'lg:text-blue-600', 'lg:text-slate-300','lg:text-slate-900' , 'after:w-[50%]')
                    navbarMenuList.parentElement.parentElement.classList.add('text-slate-200' , 'lg:text-slate-900' ,'after:w-0')
                    return
                }
                navbarMenuList.parentElement.parentElement.classList.remove('text-slate-200' , 'lg:text-blue-600', 'lg:text-slate-300','lg:text-slate-900' , 'after:w-[50%]')
                navbarMenuList.parentElement.parentElement.classList.add('text-slate-200' , 'lg:text-slate-300' ,'after:w-0')
            }
        }
    });
});
// akhir navbar menu list








// efek ketik
document.addEventListener("DOMContentLoaded", () => {
    new Typed("#textTyped", {
        strings: ["SMP Negeri 16 Kota Cirebon"],
        typeSpeed: 90,
        backSpeed: 100,
        loop: true,
        showCursor: true,
        cursorChar: "|",
    });
});
// akhir efek ketik





// angka bertambah (murid,guru,ruang kelas)
let numbers = this.document.querySelectorAll('.number')
let interval = 6000  //skala per detik
let counting = false //mencagah loop

//jika window di scroll
window.addEventListener('scroll', function() {
    let wScroll = this.scrollY;
    console.log(wScroll)

    // jika scroll diatas 340 maka tmbah angka nya
    if (wScroll > 250 && !counting) {
        counting = true;

        //ubah datanya satu per satu
        numbers.forEach(function (number,index) {
            let startValue = 0; //data mulai dari 0
            let endValue = parseInt(number.getAttribute("data-val")); //angka terakhir yang ingin ditampilkan
            let duration = Math.floor(interval / endValue); //durasi,durasi kecepatan nya akan sama setiap angka

            // jalankan interval, fungsinya adalah menambah terus menerus
            let counter = setInterval(function () {
                startValue += 1; //angka akan ditambah

                //menganti isi dari textcontent number
                number.textContent = startValue;

                //berhentikan pertambahan nilai jika sudah melebihi batas interveal,batas interval diambil dari atribute (data-val)
                if (startValue === endValue) {
                    clearInterval(counter);
                }
            }, duration);
        });
    }
})
//akhir angka bertambah (murid,guru,ruang kelas)






// carousel
const carousel = document.querySelector('#carouselSlide');
const arrowR = document.querySelector('#arrowR');
const arrowL = document.querySelector('#arrowL');
const carouselRounds = document.querySelectorAll('.carouselRound')

document.addEventListener("DOMContentLoaded", () => {
    // ====  arrow right click
    arrowR.addEventListener('click', () => {
        // lebar  gambar di carousel
        const slideWidth = carousel.offsetWidth;

        // pindah
        if ( Math.ceil(carousel.scrollLeft) >= slideWidth*2 ) {
            carousel.scrollBy({
                left: -(slideWidth*2),  // jika sudah mentok
            });
        } else {
            carousel.scrollBy({
                left: slideWidth,  // Menggeser ke kanan
            });
        }

        // carousel round
        carouselRounds.forEach((round, index) => {
            if (Math.ceil(carousel.scrollLeft)== 0 ) {
                round.classList.remove('bg-gray-100')
                round.classList.add('bg-gray-500')
                carouselRounds[1].classList.remove('bg-gray-500');
                carouselRounds[1].classList.add('bg-gray-100');
                console.log('ini 1')
            } else if (Math.ceil(carousel.scrollLeft) >= carousel.offsetWidth && Math.ceil(carousel.scrollLeft) < carousel.offsetWidth*2 ){
                round.classList.remove('bg-gray-100')
                round.classList.add('bg-gray-500')
                carouselRounds[2].classList.remove('bg-gray-500');
                carouselRounds[2].classList.add('bg-gray-100');
                console.log('ini 2')
            } else  {
                round.classList.remove('bg-gray-100')
                round.classList.add('bg-gray-500')
                carouselRounds[0].classList.remove('bg-gray-500');
                carouselRounds[0].classList.add('bg-gray-100');
                console.log('ini 3')
            }
        });
        // carousel round

    });


    // ===== arrow left click
    arrowL.addEventListener('click', () => {
        // lebar  gambar di carousel
        const slideWidth = carousel.offsetWidth;
        const sLeft = carousel.scrollLeft ;
        const sWidth = carousel.offsetWidth ;

        // carouael round
        carouselRounds.forEach((round, index) => {
            if (Math.ceil(carousel.scrollLeft) == 0 ) {
                round.classList.remove('bg-gray-100')
                round.classList.add('bg-gray-500')
                carouselRounds[2].classList.remove('bg-gray-500');
                carouselRounds[2].classList.add('bg-gray-100');
            } else if (Math.ceil(carousel.scrollLeft) >= carousel.offsetWidth && Math.ceil(carousel.scrollLeft) >= carousel.offsetWidth*2 ){
                round.classList.remove('bg-gray-100')
                round.classList.add('bg-gray-500')
                carouselRounds[1].classList.remove('bg-gray-500');
                carouselRounds[1].classList.add('bg-gray-100');
                console.log('hi')
            } else  {
                round.classList.remove('bg-gray-100')
                round.classList.add('bg-gray-500')
                carouselRounds[0].classList.remove('bg-gray-500');
                carouselRounds[0].classList.add('bg-gray-100');
            }
        });
        // carousel round

        // pindah
        if (Math.ceil(carousel.scrollLeft) <= 0  ) {
            carousel.scrollBy({
                left: (slideWidth*2),  // Menggeser ke kanan
            });
        } else {
            carousel.scrollBy({
                left: -slideWidth,  // Menggeser ke kanan
            });
        }

    });
})
// akhir carousel






