<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css'], ['resources/js/app.js'], ['resources/js/main.js'])
    
    <style>
        .test-video video{
            position: absolute; min-width: 100%; min-height: 100vh; width: auto; height: auto; object-fit: cover; z-index: -1; top: -130px;
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
            .batas{
                top: 65px;
            }
            .test-video video{
                top: 0;
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

        /* infinite scroll */
        .logos{
            width: max-content;
        }

        .logo-slide{
            animation: 50s slide infinite linear;
        }
        .logo-slide img{
            margin: 0 80px;
        }
        
        .logos:hover .logo-slide{
            animation-play-state: paused;
        }

        /* @keyframes galeri-1 {
            from{
                transform: translateX(0);
            }
            to{
                transform: translateX(100%);
            }
        } */
        @keyframes galeri-2 {
            from{
                transform: translateX(0);
            }
            to{
                transform: translateX(-100%);
            }
        }
        @keyframes galeri-3 {
            from{
                transform: translateX(0);
            }
            to{
                transform: translateX(100%);
            }
        }
        @keyframes galeri-4 {
            from{
                transform: translateX(0);
            }
            to{
                transform: translateX(100%);
            }
        }

        .wrap-galery{
            /* width: max-content; */
            /* height: ; */
        }

        /* .scrol-1{
            animation: 10s galeri-1 infinite linear;
        }
        .scrol-2{
            animation: 10s galeri-2 infinite linear;
        }
        .scrol-3{
            animation: 10s galeri-3 infinite linear;
        }
        .scrol-4{
            animation: 10s galeri-4 infinite linear;
        } */
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

    </style>
</head>
<body class="overflow-x-hidden">
    
    @include('layouts.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function(){
            console.log(window.innerWidth)
            let lastScrollTop = 100;
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
                } else {
                    // Scroll ke bawah
                    hederAtas.style.top = "-40px"
                    navScroll.style.top = "-50px"
                    hederAtas.style.transition = "top .1s linear"
                    navScroll.style.transition = "top .1s linear"
                }
    
                lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // untuk mencegah nilai negatif
            })


        })
    </script>
</body>
</html>