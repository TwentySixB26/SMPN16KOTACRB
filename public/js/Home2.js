// navbar transparan
const hamburgerMenu = document.querySelector('.hamburgerMenu')
const header = document.querySelector('header')
const fixedNav = header.offsetTop

window.onscroll = function () {
    if (window.pageYOffset > fixedNav) {
        header.classList.add('navbar-fixed')
    } else{
        header.classList.remove('navbar-fixed')
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
        //jika ada menu yang kebuka lebih dari satu,maka yg lain akan tertutup
        navbarMenuLists.forEach(navbarMenuList => {
            navbarMenuList.classList.remove('block' );
            navbarMenuList.classList.add('hidden');

            if (navbarMenuList.parentElement.parentElement.classList.contains('defaultColor')) {
                navbarMenuList.parentElement.parentElement.classList.remove('text-slate-200' , 'lg:text-blue-600','lg:text-slate-300', 'lg:text-slate-900')
                navbarMenuList.parentElement.parentElement.classList.add('text-slate-200' , 'lg:text-blue-600' )
                return
            }
            navbarMenuList.parentElement.parentElement.classList.remove('text-slate-200' , 'lg:text-blue-600', 'lg:text-slate-300','lg:text-slate-900' , 'after:w-[50%]')
            navbarMenuList.parentElement.parentElement.classList.add('text-slate-200' , 'lg:text-slate-900' ,'after:w-0')
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

        // navbarMenuList.parentElement.parentElement.classList.remove('text-slate-200' , 'lg:text-blue-600', 'lg:text-slate-300','lg:text-slate-900' , 'after:w-[50%]')
        // navbarMenuList.parentElement.parentElement.classList.add('text-slate-200' , 'lg:text-slate-900' ,'after:w-0')


        if (navbarMenuList.parentElement.parentElement.classList.contains('lg:text-blue-600')) {

            if (navbarMenuList.parentElement.parentElement.classList.contains('defaultColor')) {
                navbarMenuList.parentElement.parentElement.classList.remove('text-slate-200' , 'lg:text-blue-600', 'lg:text-slate-300','lg:text-slate-900' , 'after:w-[50%]')
                navbarMenuList.parentElement.parentElement.classList.add('text-slate-200' , 'lg:text-blue-600' ,'after:w-[50%]')
                return
            }
            navbarMenuList.parentElement.parentElement.classList.remove('text-slate-200' , 'lg:text-blue-600', 'lg:text-slate-300','lg:text-slate-900' , 'after:w-[50%]')
            navbarMenuList.parentElement.parentElement.classList.add('text-slate-200' , 'lg:text-slate-900' ,'after:w-0')
        }
    });
});
// akhir navbar menu list




// tentang sekolah load window
let rightTentangSekolah = document.querySelector('#rightTentangSekola')
let leftTentangSekolah = document.querySelector('#leftTentangSekola')

window.addEventListener('load', function() {

    rightTentangSekolah.classList.remove('translate-x-72' , 'opacity-0')
    rightTentangSekolah.classList.add('translate-x-0' , 'opacity-100')


    leftTentangSekolah.classList.remove('-translate-x-72' , 'opacity-0')
    leftTentangSekolah.classList.add('translate-x-0' ,'opacity-100' )
})
// tentang sekolah load window











// img galery
const images = document.querySelectorAll('.imageGalery img');
const cameraBtn = document.querySelectorAll('#cameraBtn') ;
// ====popup
const popup = document.querySelector('.popup');
const closeBtn = document.querySelector('.close-btn');
const largeImage = document.querySelector('.large-image');
const leftArrow = document.querySelector('.left-arrow');
const rightArrow = document.querySelector('.right-arrow');

let index = 0;

cameraBtn.forEach((item, i) => {
    item.addEventListener('click', () => {

        popup.classList.toggle('active');
        let srcImage = images[i].getAttribute('src') ;
        updateImage(srcImage,i);
    })
})


const updateImage = (srcImage,i) => {
    let path = srcImage;
    largeImage.src = path;
    index = i;
}

closeBtn.addEventListener('click', () => {
    popup.classList.toggle('active');
})

leftArrow.addEventListener('click', () => {
    if(index > 0){
        index = index-1
        let indexBack = images[index] ;
        let srcBack = indexBack.getAttribute('src') ;
        updateImage(srcBack, index);
    }
})

rightArrow.addEventListener('click', () => {
    if(index < images.length - 1){
        index = index+1
        let indexNext = images[index] ;
        let srcNext = indexNext.getAttribute('src') ;
        // console.log(imgNext) ;
        updateImage(srcNext, index);
    }
})
// akhir img galery
