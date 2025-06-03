<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css'], ['resources/js/app.js'], ['resources/js/main.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap');
        .test-video video{
            position: absolute; min-width: 100%; min-height: 100%; width: auto; height: auto; object-fit: cover; z-index: -1; 
            /* top: -130px; */
            top: 0;
            left: 0;
        }

        /* From Uiverse.io by elijahgummer */ 
        .button-with-icon {
            overflow: hidden;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            /* border: 1px solid #0f988e; */
            font-family: "Istok Web", sans-serif;
            letter-spacing: 1px;
            padding: 10px 12px;
            text-align: center;
            width: 240px;
            /* height: 40px; */
            font-size: 14px;
            text-transform: uppercase;
            font-weight: normal;
            border-radius: 5px;
            outline: none;
            user-select: none;
            cursor: pointer;
            transform: translateY(0px);
            position: relative;
            color: white;
            text-shadow: 0 1px 0 rgba(0, 0, 0, 0.3);
            transition: 150ms all ease-in-out;
        }

        .button-with-icon .icon {
            margin-right: 8px;
            width: 24px;
            height: 24px;
            transition: all 0.5s ease-in-out;
        }

        .button-with-icon:active {
            transform: translateY(3px);
            box-shadow:
                inset 0 16px 2px -15px rgba(0, 0, 0, 0),
                inset 0 0 0 1px rgba(255, 255, 255, 0.15),
                inset 0 1px 20px rgba(0, 0, 0, 0.1),
                0 0 0 #0f988e,
                0 0 0 2px rgba(255, 255, 255, 0.5),
                0 0 0 rgba(0, 0, 0, 0),
                0 0 0 rgba(0, 0, 0, 0);
        }

        .button-with-icon:hover .text {
            transform: translateX(280px);
        }
        .button-with-icon:hover .icon {
            transform: translate(60px);
        }

        .text {
            transition: all 0.5s ease-in-out;
        }

        @media (max-width: 768px){
            /* .batas{
                top: 100px;
            } */
            .test-video video{
                top: 0;
            }
            .swiper{
                padding: 0px 0 !important;
            }
        }

        @keyframes slide {
            from{
                transform: translateX(0);
            }
            to{
                transform: translateX(-100%);
            }
        }

        @keyframes slide-2 {
            from{
                transform: translateX(0);
            }
            to{
                transform: translateX(-100%);
            }
        }

        @keyframes slide-tengah {
            from{
                transform: translateX(-100%);
            }
            to{
                transform: translateX(0);
            }
        }

        /* infinite scroll */
        .logos{
            width: max-content;
        }

        .logo-slide{
            animation: 50s slide infinite linear;
        }
        .logo-slide-2{
            animation: 50s slide-2 infinite linear;
        }
        .tengah{
            animation: 50s slide-tengah infinite linear;
        }
        .logo-slide img{
            margin: 0 80px;
        }
        .logo-slide-2 img{
            margin: 0 80px;
        }
        
        .logos:hover .logo-slide{
            animation-play-state: paused;
        }

        /* animate line svg */
        .path-line{
            stroke-width: 5;
            fill: none;
            /* stroke-dasharray: 1600;
            stroke-dashoffset: 0; */
            stroke-dasharray: 2000;
            stroke-dashoffset: 2000;
            animation: dashmove 8s ease-in infinite;
        }
        .path-line-2{
            stroke-width: 8;
            fill: none;
            stroke-dasharray: 800;
            stroke-dashoffset: 0;
            animation: dashmove-1 6s ease-in-out infinite;
            /* animation-delay: 1s; */
        }
        @keyframes dashmove {
            0% {
                /* stroke-dashoffset: 3200; */
                stroke-dashoffset: 4000;
            }
            100% {
                stroke-dashoffset: 0;
            }
        }
        @keyframes dashmove-1 {
            0% {
                stroke-dashoffset: 0;
            }
            100% {
                stroke-dashoffset: 1600;
            }
        }

        /* animate scroll Y */
        @keyframes scrollY {
            0%{
                transform: translateY(0%)
            }
            100%{
                transform: translateY(-100vh)
            }
        }

        .animate-scrollY{
            animation: scrollY 30s linear infinite;
        }
        .animate-scrollY img{
            margin: 20px 0;
        }

        /* swiper video */
        .swiper-video .swiper-scrollbar {
            position: absolute !important;
            top: 0px !important;
            width: 100% !important;
            left: 0 !important;
            /* height: 100% !important; */
            bottom: auto !important;
            background-color: #fff; /* background track */
            height: 2px !important;
            border-radius: 0px !important;
        }
        .swiper-video .swiper-scrollbar-drag {
            background-color: #000; /* warna dragger */
            border-radius: 0px !important;
        }
        .swiper-video{
            padding: 72px 0 !important;
            /* overflow: hidden !important; */
        }

        /* swiper news */
        
    </style>
</head>
<body class="overflow-x-hidden relative">
    
    @if($title == "Beranda-v3")
        @include('layouts.header-1')
    @else
        @include('layouts.header')
    @endif

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')
    
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    {{-- <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js" defer></script>s --}}

    {{-- <script>
        document.addEventListener("DOMContentLoaded", function(){
            gsap.registerPlugin(ScrollTrigger);
            ScrollTrigger.create({
                trigger: "#filter-section",
                start: "top 100px", // bisa diubah sesuai kebutuhan
                endTrigger: "#publication-section",
                end: "bottom center",
                pin: '#filter-section',
                pinSpacing: false,
                markers: true,
                // onUpdate: self => {
                onLeave: () => {
                    gsap.set("#filter-section", { clearProps: "" }); // reset posisi
                },
                onLeaveBack: () => {
                    gsap.set("#filter-section", { clearProps: "" }); // reset saat scroll balik ke atas
                }
            });
        });
    </script> --}}
    
    <script>
        function pauseAllYouTubeVideos() {
        const iframes = document.querySelectorAll('.swiper-video iframe');

        iframes.forEach(iframe => {
            iframe.contentWindow.postMessage(
                    JSON.stringify({
                        event: 'command',
                        func: 'pauseVideo',
                        args: [],
                    }),
                    '*'
                );
            });
        }

        const swiper = new Swiper('.swiper-video', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            // pagination: {
            //     el: '.swiper-pagination',
            // },

            // Navigation arrows
            // navigation: {
            //     nextEl: '.swiper-button-next',
            //     prevEl: '.swiper-button-prev',
            // },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
                clickable: true
            },
            on: {
                slideChange: (e) => {
                    pauseAllYouTubeVideos();
                }
            }
        });

        // Event tombol kustom
        document.getElementById('custom-prev').addEventListener('click', () => swiper.slidePrev());
        document.getElementById('custom-next').addEventListener('click', () => swiper.slideNext());
        document.getElementById('custom-prev-1').addEventListener('click', () => swiper.slidePrev());
        document.getElementById('custom-next-1').addEventListener('click', () => swiper.slideNext());


        // Swiper B: hanya blog/news, tidak perlu handler video
        const swiperNews = new Swiper('.swiper-news', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            // If we need pagination
            pagination: {
                el: '.swiper-news .swiper-pagination',
            },
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-news .swiper-button-next',
                prevEl: '.swiper-news .swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-news .swiper-scrollbar',
            },

            // slidesPerView: 1,
            // spaceBetween: 20,
            breakpoints: {
                768: { slidesPerView: 3 },
                1024: { slidesPerView: 3 },
            },
            // autoHeight: true,
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function(){
            // console.log(window.body.height)
            let lastScrollTop = 0;
            let hederAtas = document.querySelector('.scroll-hidden')
            let navScroll = document.querySelector('.nav-scroll')
            
            let heightScroll = hederAtas.height

            window.addEventListener("scroll", function(){
                let currentScroll = window.scrollY || document.documentElement.scrollTop;
                
                if (currentScroll < lastScrollTop) {
                    // Scroll ke atas
                    hederAtas.style.position = "relative"
                    hederAtas.style.top = "0px"
                    navScroll.style.top = "0px"
                    hederAtas.style.transition = "top .1s linear"
                    navScroll.style.transition = "top .1s linear"
                    navScroll.classList.remove('shadow')
                } else {
                    // Scroll ke bawah
                    hederAtas.style.top = "-40px"
                    navScroll.style.top = "-50px"
                    hederAtas.style.transition = "top .1s linear"
                    navScroll.style.transition = "top .1s linear"
                    navScroll.classList.add('shadow')
                }
    
                lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // untuk mencegah nilai negatif
            })


        })
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
        const items = document.querySelectorAll('[data-carousel-item]');
        const iframes = document.querySelectorAll('iframe');

        let activeIndex = 0;

        function showItem(index) {
            items.forEach((item, i) => {
                const iframe = item.querySelector('iframe');
                if (i === index) {
                item.classList.add('opacity-100', 'pointer-events-auto', 'z-10');
                item.classList.remove('opacity-0', 'pointer-events-none', 'z-0');
                } else {
                item.classList.add('opacity-0', 'pointer-events-none', 'z-0');
                item.classList.remove('opacity-100', 'pointer-events-auto', 'z-10');
                // stop video
                if (iframe) {
                    const src = iframe.src;
                    iframe.src = '';
                    iframe.src = src;
                }
                }
            });
            activeIndex = index;
            }

            // Contoh rotasi otomatis tiap 8 detik
            setInterval(() => {
            const nextIndex = (activeIndex + 1) % items.length;
            showItem(nextIndex);
            }, 8000);

            // Inisialisasi awal
            showItem(0);
        });
    </script>

</body>
</html>