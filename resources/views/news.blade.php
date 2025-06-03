@extends('layouts.app')

@section('title', 'News')
@section('content')


<section>
    <div class="container mx-auto px-8 py-28">
        <div class="flex flex-col md:flex-row gap-8">
            <div class="bg-blue-900 rounded-lg p-4 flex items-center justify-center">
                <h1 class="text-white text-4xl uppercase font-extrabold">News</h1>
            </div>
            <div class="md:border-l-2 border-blue-900 md:pl-8">
                <h1 class="text-4xl md:text-7xl font-medium font-merriweather">Professional insights and updates from our health foundation</h1>
            </div>
        </div>
    </div>
</section>
{{-- <section class="w-full bg-gray-700 relative">
    <div class="container h-[20rem] bg-gray-700 w-full flex items-center justify-center relative mx-auto">
        <div class="text-center z-20">
            <h1 class="font-extrabold text-6xl md:text-9xl text-white z-50">News</h1>
            <p class="text-gray-200">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa, dignissimos.</p>
        </div>
    </div>
</section> --}}

{{-- recent post --}}
<section class="bg-white">
    <div class="container px-6 py-10 mx-auto">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl">recent posts </h1>

            <button class="focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600 transition-colors duration-300 transform hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
        </div>

        <hr class="my-8 border-gray-200">

        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3">
            <div>
                <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80" src="{{asset('assets/news/popular.jpg')}}" alt="">

                <div class="mt-8">
                    <span class="text-blue-500 uppercase">category</span>

                    <h1 class="mt-4 text-xl font-semibold text-gray-800">
                        Community based nutrition and public health intervention: Lesson Learnt from The Field
                    </h1>

                    <p class="mt-2 text-gray-500">
                        Summit Institute for Development with students in Faculty of Medicine Universitas Mataram Mataram, May 6th, 2025  – The Faculty of...
                    </p>

                    <div class="flex items-center justify-between mt-4">
                        <div>
                            <a href="#" class="text-lg font-medium text-gray-700 hover:underline hover:text-gray-500">
                                recruitment892
                            </a>

                            <p class="text-sm text-gray-500">May 14, 2025</p>
                        </div>

                        <a href="#" class="inline-block text-blue-500 underline hover:text-blue-400">Read more</a>
                    </div>

                </div>
            </div>

            <div>
                <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80" src="{{asset('assets/news/koneksi.jpg')}}" alt="">

                <div class="mt-8">
                    <span class="text-blue-500 uppercase">category</span>

                    <h1 class="mt-4 text-xl font-semibold text-gray-800">
                        KONEKSI (Kolaborasi Pengetahuan, Inovasi, dan Teknologi Australia dan</h1>

                    <p class="mt-2 text-gray-500">
                        Bali, May 3-5th 2025 - Summit Institute for Development (SID) was selected to attend a boot camp organized by KONEKSI-Partnership in...
                    </p>

                    <div class="flex items-center justify-between mt-4">
                        <div>
                            <a href="#" class="text-lg font-medium text-gray-700 hover:underline hover:text-gray-500">
                                recruitment892
                            </a>

                            <p class="text-sm text-gray-500">May 9, 2025</p>
                        </div>

                        <a href="#" class="inline-block text-blue-500 underline hover:text-blue-400">Read more</a>
                    </div>

                </div>
            </div>

            <div>
                <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80" src="{{asset('assets/news/garut.webp')}}" alt="">

                <div class="mt-8">
                    <span class="text-blue-500 uppercase">category</span>

                    <h1 class="mt-4 text-xl font-semibold text-gray-800">
                        Gates Foundation Visit to Garut
                    </h1>

                    <p class="mt-2 text-gray-500">
                        Gates Foundation Visit to Garut: Appreciation for the Synergy of Puskesmas, Pustu, Posyandu, and the Health Office in Strengthening...
                    </p>

                    <div class="flex items-center justify-between mt-4">
                        <div>
                            <a href="#" class="text-lg font-medium text-gray-700 hover:underline hover:text-gray-500">
                                lalanur
                            </a>

                            <p class="text-sm text-gray-500">April 29, 2025</p>
                        </div>

                        <a href="#" class="inline-block text-blue-500 underline hover:text-blue-400">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="text-gray-600 body-font bg-gray-300">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Berita & Cerita</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p>
        </div>
        <div class="flex flex-wrap -m-4">
        <div class="p-4 md:w-1/3">
            <div class="h-full border-2 border-gray-200 shadow-2xs border-opacity-60 bg-white rounded-lg overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset('/assets/galery/1-c77141_582e72a8037847749618686f49dd03b5~mv2.jpg')}}" alt="blog" loading="lazy">
            <div class="p-6 bg-white">
                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">CISDI on site visit to SID: Strengthening Primary Health Care with Digital Innovation</h1>
                <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                <div class="flex items-center flex-wrap ">
                <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                    </svg>1.2K
                </span>
                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                    </svg>6
                </span>
                </div>
            </div>
            </div>
        </div>
        <div class="p-4 md:w-1/3">
            <div class="h-full border-2 border-gray-200 shadow-2xs border-opacity-60 bg-white rounded-lg overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset('/assets/galery/23-12174a_87bc91aa6f074aa3b180b0b8457f499f~mv2.jpg')}}" alt="blog" loading="lazy">
            <div class="p-6 bg-white">
                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The 400 Blows</h1>
                <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                <div class="flex items-center flex-wrap">
                <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                    </svg>1.2K
                </span>
                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                    </svg>6
                </span>
                </div>
            </div>
            </div>
        </div>
        <div class="p-4 md:w-1/3">
            <div class="h-full border-2 border-gray-200 shadow-2xs border-opacity-60 bg-white rounded-lg overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset('/assets/galery/dan-gold-4_jhDO54BYg-unsplash.jpg')}}" alt="blog" loading="lazy">
            <div class="p-6 bg-white">
                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
                <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                <div class="flex items-center flex-wrap ">
                <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                    </svg>1.2K
                </span>
                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                    </svg>6
                </span>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</section> --}}

{{-- populer --}}
<section class="">
    <div class="container px-6 py-28 mx-auto">
        <h2 class="text-6xl font-bold py-8">Populer</h2>
        <div class="lg:flex lg:-mx-6">
            <div class="lg:w-3/5 lg:px-6">
                {{-- <img class="object-cover object-center w-full h-80 xl:h-[28rem] rounded-xl" src="https://images.unsplash.com/photo-1624996379697-f01d168b1a52?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt=""> --}}
                <img class="object-cover object-center w-full h-80 xl:h-[28rem] rounded-xl" src="{{asset('assets/news/popular.jpg')}}" alt="">

                <div class="w-full">
                    {{-- <p class="mt-6 text-sm text-gray-800 uppercase font-medium">Want to know</p> --}}

                    <h1 class="max-w-3xl mt-4 text-4xl font-semibold leading-tight hover:underline">
                        Community based nutrition and public health intervention: Lesson Learnt from The Field
                    </h1>

                    {{-- <div class="flex items-center mt-6">
                        <img class="object-cover object-center w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="">

                        <div class="mx-4">
                            <h1 class="text-sm text-gray-700">Amelia. Anderson</h1>
                            <p class="text-sm text-gray-500">Lead Developer</p>
                        </div>
                    </div> --}}
                </div>
            </div>

            <div class="mt-8 lg:w-2/5 lg:mt-0 lg:px-6">
                <div class="flex justify-between">
                    <div>
                        <h3 class=" capitalize">AI</h3>
    
                        <a href="#" class="block mt-2 font-medium hover:underline">
                            KONEKSI (Kolaborasi Pengetahuan, Inovasi, dan Teknologi Australia dan
                        </a>
                    </div>
                    <img class="object-cover object-center w-24 h-24 xl:h-24 rounded-xl" src="{{asset('assets/news/koneksi.jpg')}}" alt="">
                </div>

                <hr class="my-6 border-gray-300">

                <div class="flex justify-between">
                    <div>
                        <h3 class="capitalize">Premium</h3>
    
                        <a href="#" class="block mt-2 font-medium hover:underline">
                            Gates Foundation Visit to Garut
                        </a>
                    </div>
                    <img class="object-cover object-center w-24 h-24 xl:h-24 rounded-xl" src="{{asset('assets/news/garut.webp')}}" alt="">
                </div>

                <hr class="my-6 border-gray-300">

                <div class="flex justify-between">
                    <div>
                        <h3 class="capitalize">Premium Collection</h3>
    
                        <a href="#" class="block mt-2 font-medium hover:underline">
                            CISDI Onsite Visit to SID: Strengthening Primary Health Care with Digital Innovation
                        </a>
                    </div>
                    <img class="object-cover object-center w-24 h-24 xl:h-24 rounded-xl" src="{{asset('assets/news/cisdi.jpg')}}" alt="">
                </div>

                <hr class="my-6 border-gray-300">

                <div class="flex justify-between">
                    <div>
                        <h3 class="capitalize">Premium kits</h3>
    
                        <a href="#" class="block mt-2 font-medium hover:underline">
                            Indonesian Researchers Shine at International Pandemic Sciences Conference 2024
                        </a>
                    </div>
                    <img class="object-cover object-center w-24 h-24 xl:h-24 rounded-xl" src="{{asset('assets/news/indo.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="relative overflow-hidden container mx-auto px-8 py-48 h-[30rem] flex items-center justify-center">
        <div class="w-2/3 mx-auto relative z-10">
            <div>
                <h1 class="text-4xl font-bold text-center mb-2 text-gray-800">Keep Up with SID’s Impact on Maternal and Child Health</h1>
                <p class="text-center text-lg mb-8 text-gray-700">Get the latest news from SID. Subscribe to receive the latest updates on maternal and child health initiatives across Indonesia — including research, programs, events, and news from the SID team.</p>
            </div>
            <div class="flex w-full justify-center items-end">
                <div class="relative mr-4 lg:w-full xl:w-1/2 w-2/4">
                    {{-- <label for="hero-field" class="leading-7 text-sm text-gray-600">Placeholder</label> --}}
                    <input type="text" id="hero-field" name="hero-field" class="w-full bg-gray-50/40 bg-opacity-50 rounded border-2 border-blue-800 focus:ring-2 focus:ring-blue-900 focus:bg-transparent focus:border-blue-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <button class="inline-flex text-white bg-blue-900 py-2 px-6 border-2 border-blue-900  hover:bg-blue-950 rounded text-lg">Subscribe</button>
            </div>
        </div>
        <div class="absolute inset-0 grid grid-cols-6 z-0 w-full h-full">
            <img src="/assets/dokumentasi/1.jpg" class="h-[10rem] w-full" alt="">
            <img src="/assets/dokumentasi/2.jpg" class="h-[10rem] w-full" alt="">
            <img src="/assets/dokumentasi/3.jpg" class="h-[10rem] w-full" alt="">
            <img src="/assets/dokumentasi/4.jpg" class="h-[10rem] w-full" alt="">
            <img src="/assets/dokumentasi/5.jpg" class="h-[10rem] w-full" alt="">
            <img src="/assets/dokumentasi/6.jpg" class="h-[10rem] w-full" alt="">
            <img src="/assets/dokumentasi/7.jpg" class="h-[10rem] w-full" alt="">
            <img src="/assets/dokumentasi/8.jpg" class="h-[10rem] w-full" alt="">
            <img src="/assets/dokumentasi/9.jpg" class="h-[10rem] w-full" alt="">
            <img src="/assets/dokumentasi/10.jpg" class="h-[10rem] w-full" alt="">
            <img src="/assets/dokumentasi/11.jpg" class="h-[10rem] w-full" alt="">
            <img src="/assets/dokumentasi/12.jpg" class="h-[10rem] w-full" alt="">
            <img src="/assets/dokumentasi/13.jpg" class="h-[10rem] w-full" alt="">
            <img src="/assets/dokumentasi/14.jpg" class="h-[10rem] w-full" alt="">
            <img src="/assets/dokumentasi/15.jpg" class="h-[10rem] w-full" alt="">
            <img src="/assets/dokumentasi/16.jpg" class="h-[10rem] w-full" alt="">
            <img src="/assets/dokumentasi/17.jpg" class="h-[10rem] w-full" alt="">
            <img src="/assets/dokumentasi/1.jpg" class="h-[10rem] w-full" alt="">
        </div>
        <div class="absolute inset-0 bg-gray-300/90"></div>
    </div>
</section>

@endsection