@extends('layouts.app')

@section('title', 'Leadership')
@section('content')

{{-- <section>
    <div class="container mx-auto px-8 py-28">
        <div class="flex flex-col md:flex-row gap-8">
            <div class="bg-blue-900 rounded-lg p-4 flex items-center justify-center">
                <h1 class="text-white text-4xl uppercase font-extrabold">Speciality</h1>
            </div>
            <div class="md:border-l-2 border-blue-900 md:pl-8">
                <h1 class="text-4xl md:text-7xl font-medium font-merriweather text-center md:text-left">Leaders with heart, driving better health for families</h1>
            </div>
        </div>
    </div>
</section> --}}

{{-- garis pembatas --}}
<div class="relative w-full z-40">
    <div class="absolute top-1/2 left-0 w-full h-1 bg-gray-300 transform -translate-y-1/2 pointer-events-none"></div>
</div>

<section class="text-gray-600 body-font relative">
    <div class="flex overflow-hidden" style="height: max-content">
        <h1 class="absolute lg:top-[2%] top-8 lg:left-[61.5%] left-[50%] transform -translate-x-1/2 lg:text-8xl text-2xl font-extrabold w-full md:w-auto text-white md:text-gray-700 text-center bg-[#10169f] md:bg-transparent md:text-left z-20 font-poppins">
            <span class="absolute font-extrabold text-[14rem] -right-24 top-6 text-right text-gray-200 z-0 hidden md:block">DO</span>
            <span class="relative z-20">Our</span>
            <span class="relative z-20 indent-32">Speciality</span>
        </h1>
        <div class="whitespace-nowrap animate-scrollY h-screen hidden md:block ml-8">
            <div class="w-[36rem]">
                <img class="rounded-lg" src="/assets/dokumentasi/1.jpg" alt="">
                <img class="rounded-lg" src="/assets/dokumentasi/2.jpg" alt="">
                <img class="rounded-lg" src="/assets/dokumentasi/3.jpg" alt="">
                <img class="rounded-lg" src="/assets/dokumentasi/4.jpg" alt="">
            </div>
            <div class="w-[36rem]">
                <img class="rounded-lg" src="/assets/galery/11-12174a_8ec3416906f741498a5761e4c1378d10~mv2.jpg" alt="">
                <img class="rounded-lg" src="/assets/galery/11-12174a_8ec3416906f741498a5761e4c1378d10~mv2.jpg" alt="">
                <img class="rounded-lg" src="/assets/galery/11-12174a_8ec3416906f741498a5761e4c1378d10~mv2.jpg" alt="">
                <img class="rounded-lg" src="/assets/galery/11-12174a_8ec3416906f741498a5761e4c1378d10~mv2.jpg" alt="">
            </div>
        </div>
    
        <div class="container px-5 mx-auto flex flex-wrap">
            <!-- STEP 1 -->
            <div class="flex relative lg:pt-72 pt-28 pb-20 sm:items-center md:w-2/3 mx-auto flex-row-reverse">
                <div class="h-full w-6 absolute right-0 top-0 flex items-center justify-center transform -translate-x-3 z-10">
                    <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-16 h-16 rounded-full transform translate-x-2 mt-10 sm:mt-0 inline-flex items-center justify-center bg-[#10169f] text-white relative z-10 title-font font-medium text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                    </svg>
                </div>
                <div class="flex-grow md:pr-8 pr-6 flex sm:items-center items-end flex-col sm:flex-row-reverse">
                    {{-- <div class="flex-shrink-0 w-24 h-24 bg-blue-100 text-blue-500 rounded-full inline-flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-12 h-12">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                        </svg>
                    </div> --}}
                    <div class="flex-grow sm:pr-6 mt-6 sm:mt-0 text-right">
                        <h2 class="font-medium title-font text-gray-900 mb-1 text-xl font-poppins">Evidence-Based Impact</h2>
                        <p class="leading-relaxed font-inter">We design and test innovative health solutions to improve lives at scale.</p>
                    </div>
                </div>
            </div>
    
            <!-- STEP 2 -->
            <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto flex-row-reverse">
                <div class="h-full w-6 absolute right-0 top-0 flex items-center justify-center transform -translate-x-3">
                    <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-16 h-16 rounded-full transform translate-x-2 mt-10 sm:mt-0 inline-flex items-center justify-center bg-[#10169f] text-white relative z-10 title-font font-medium text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                        </svg>
                </div>
                <div class="flex-grow md:pr-8 pr-6 flex sm:items-center items-end flex-col sm:flex-row-reverse">
                    {{-- <div class="flex-shrink-0 w-24 h-24 bg-blue-100 text-blue-500 rounded-full inline-flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-12 h-12">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                        </svg>
                    </div> --}}
                    <div class="flex-grow sm:pr-6 mt-6 sm:mt-0 text-right">
                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl font-poppins">Real-Time Support for Real Impact</h2>
                    <p class="leading-relaxed font-inter">Empowering frontline workers with mobile tools to drive real-time health impact.</p>
                    </div>
                </div>
            </div>
    
            <!-- STEP 3 -->
            <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto flex-row-reverse">
                <div class="h-full w-6 absolute right-0 top-0 flex items-center justify-center transform -translate-x-3">
                    <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-16 h-16 rounded-full transform translate-x-2 mt-10 sm:mt-0 inline-flex items-center justify-center bg-[#10169f] text-white relative z-10 title-font font-medium text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 0 1-3-3m3 3a3 3 0 1 0 0 6h13.5a3 3 0 1 0 0-6m-16.5-3a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3m-19.5 0a4.5 4.5 0 0 1 .9-2.7L5.737 5.1a3.375 3.375 0 0 1 2.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 0 1 .9 2.7m0 0a3 3 0 0 1-3 3m0 3h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Zm-3 6h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Z" />
                        </svg>
                </div>
                <div class="flex-grow md:pr-8 pr-6 flex sm:items-center items-end flex-col sm:flex-row-reverse">
                    {{-- <div class="flex-shrink-0 w-24 h-24 bg-blue-100 text-blue-500 rounded-full inline-flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-12 h-12">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 0 1-3-3m3 3a3 3 0 1 0 0 6h13.5a3 3 0 1 0 0-6m-16.5-3a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3m-19.5 0a4.5 4.5 0 0 1 .9-2.7L5.737 5.1a3.375 3.375 0 0 1 2.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 0 1 .9 2.7m0 0a3 3 0 0 1-3 3m0 3h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Zm-3 6h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Z" />
                        </svg>
                    </div> --}}
                    <div class="flex-grow sm:pr-6 mt-6 sm:mt-0 text-right">
                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl font-poppins">Adaptive Data Systems</h2>
                    <p class="leading-relaxed font-inter">Scaling surveys with smart data systems for real-time insight.</p>
                    </div>
                </div>
            </div>
    
            <!-- STEP 4 -->
            <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto flex-row-reverse">
                <div class="h-full w-6 absolute right-0 top-0 flex items-center justify-center transform -translate-x-3">
                    <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-16 h-16 rounded-full transform translate-x-2 mt-10 sm:mt-0 inline-flex items-center justify-center bg-[#10169f] text-white relative z-10 title-font font-medium text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                </div>
                <div class="flex-grow md:pr-8 pr-6 flex sm:items-center items-end flex-col sm:flex-row-reverse">
                    {{-- <div class="flex-shrink-0 w-24 h-24 bg-blue-100 text-blue-500 rounded-full inline-flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-12 h-12">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </div> --}}
                    <div class="flex-grow sm:pr-6 mt-6 sm:mt-0 text-right">
                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl font-poppins">Research-Driven Solutions</h2>
                    <p class="leading-relaxed font-inter">We co-create impactful programs through deep research and local collaboration.</p>
                    </div>
                </div>
            </div>
    
            <!-- STEP 5 -->
            <div class="flex relative pb-28 sm:items-center md:w-2/3 mx-auto flex-row-reverse">
                <div class="h-full w-6 absolute right-0 top-0 flex items-center justify-center transform -translate-x-3">
                    <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-16 h-16 rounded-full transform translate-x-2 mt-10 sm:mt-0 inline-flex items-center justify-center bg-[#10169f] text-white relative z-10 title-font font-medium text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                        </svg>
                </div>
                <div class="flex-grow md:pr-8 pr-6 flex sm:items-center items-end flex-col sm:flex-row-reverse">
                    {{-- <div class="flex-shrink-0 w-24 h-24 bg-blue-100 text-blue-500 rounded-full inline-flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-12 h-12">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                        </svg>
                    </div> --}}
                    <div class="flex-grow sm:pr-6 mt-6 sm:mt-0 text-right">
                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl font-poppins">Empowering Future Health Leaders</h2>
                    <p class="leading-relaxed font-inter">We build future public health leaders through education, scholarships, and hands-on training.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- garis pembatas --}}
<div class="relative w-full z-40">
    <div class="absolute top-1/2 left-0 w-full h-1 bg-gray-300 transform -translate-y-1/2 pointer-events-none"></div>
</div>

{{-- <section>
    <div class="container mx-auto px-8 py-28">
        <h1 class="text-4xl font-bold mb-16 font-poppins">More Information</h1>
        <div class="flex gap-8">
            <div class="lg:w-1/3">
                <a href="#" class="block group">
                    <img
                        alt=""
                        src="/assets/dokumentasi/1.jpg"
                        class="h-64 w-full object-cover sm:h-80 lg:h-96 rounded-4xl"
                    />

                    <h3 class="mt-4 text-lg font-bold text-gray-900 sm:text-xl font-poppins group-hover:underline underline-offset-8">Leadership</h3>

                    <p class="mt-2 max-w-sm text-gray-700 font-inter">
                        Leaders with heart, driving better health for families
                    </p>
                </a>
            </div>
            <div class="lg:w-1/3">
                <a href="#" class="block group">
                    <img
                        alt=""
                        src="/assets/dokumentasi/11.jpg"
                        class="h-64 w-full object-cover sm:h-80 lg:h-96 rounded-4xl"
                    />

                    <h3 class="mt-4 text-lg font-bold text-gray-900 sm:text-xl font-poppins group-hover:underline underline-offset-8">Our News</h3>

                    <p class="mt-2 max-w-sm text-gray-700 font-inter">
                        Professional insights and updates from our health foundation
                    </p>
                </a>
            </div>
            <div class="lg:w-1/3">
                <a href="#" class="block group">
                    <img
                        alt=""
                        src="/assets/dokumentasi/7.jpg"
                        class="h-64 w-full object-cover sm:h-80 lg:h-96 rounded-4xl"
                    />

                    <h3 class="mt-4 text-lg font-bold text-gray-900 sm:text-xl font-poppins group-hover:underline underline-offset-8">Our Programs</h3>

                    <p class="mt-2 max-w-sm text-gray-700 font-inter">
                        Together, we grow stronger families through health programs
                    </p>
                </a>
            </div>
        </div>
    </div>
</section> --}}

@endsection()