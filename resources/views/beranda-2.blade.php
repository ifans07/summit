@extends('layouts.app')

@section('title', 'Beranda')
@section('content')

{{-- hero --}}
{{-- <section>
    <div class="w-full bg-center bg-cover h-[34rem] md:h-[38rem] relative overflow-hidden test-video">
        <!-- <div class="absolute -z-10"> -->
            <video src="{{ asset('assets/file.mp4') }}" autoplay loop muted playsinline loading="lazy"></video>
        <!-- </div> -->
        <div class="flex items-center justify-center w-full h-full bg-gray-900/40">
            <div class="text-center">
                <h1 class="text-3xl font-semibold text-white lg:text-6xl mb-4">Improvement through <span class="text-blue-500">Health Research</span><br> and <br><span class="text-blue-500">Human Development</span></h1>

                <!-- From Uiverse.io by elijahgummer --> 
                <button class="button-with-icon bg-blue-600 rounded-lg px-10 py-2.5">
                    <svg
                    class="icon"
                    id="Play"
                    viewBox="0 0 48 48"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                    class="color000000 svgShape"
                    fill="#ffffff"
                    d="M12 39c-.549 0-1.095-.15-1.578-.447A3.008 3.008 0 0 1 9 36V12c0-1.041.54-2.007 1.422-2.553a3.014 3.014 0 0 1 2.919-.132l24 12a3.003 3.003 0 0 1 0 5.37l-24 12c-.42.21-.885.315-1.341.315z"
                    ></path>
                </svg>
                <span class="text">Learn More</span>
                </button>
            </div>
        </div>
    </div>
</section> --}}
{{-- hero baru carousel --}}
<section>
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-[38rem]">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out relative" data-carousel-item>
                <video src="{{ asset('assets/file.mp4') }}" autoplay loop muted playsinline loading="lazy" class="absolute z-0"></video>
                <div class="flex items-center w-full h-screen relative z-40">
                    <div class="px-4 md:ml-20">
                        <h1 class="text-3xl font-bold lg:text-7xl mb-6 text-white text-zoom">Newborn New Hope</h1>
                        <p class="mb-6 text-base md:text-2xl text-gray-300">SID is committed to improving maternal and child health in <br> Indonesia through participatory, evidence-based <br> solutions rooted in real-world impact</p>

                        <!-- From Uiverse.io by elijahgummer --> 
                        <button class="group relative button-with-icon border border-gray-100 rounded-lg px-10 py-2.5">
                            <div class="absolute w-full h-full bg-blue-900 transition- duration-300 -translate-x-[100%] group-hover:-translate-x-[0%]"></div>
                            <svg class="icon" id="Play" viewBox="0 0 48 48" xmlns="http://www.w3.org/svg">
                                <path class="color000000 svgShape" fill="#ffffff" d="M12 39c-.549 0-1.095-.15-1.578-.447A3.008 3.008 0 0 1 9 36V12c0-1.041.54-2.007 1.422-2.553a3.014 3.014 0 0 1 2.919-.132l24 12a3.003 3.003 0 0 1 0 5.37l-24 12c-.42.21-.885.315-1.341.315z"></path>
                            </svg>
                            <span class="text">Learn More</span>
                        </button>
                    </div>
                </div>
                <div class="absolute inset-0 bg-gradient-to-r from-gray-700 via-transparent to-gray-700 bg-gray-700/60 z-30"></div>
                <div class="absolute inset-0 bg-gray-700/60 pointer-events-none z-30"></div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('/assets/about/about4.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <div class="absolute inset-0 bg-gradient-to-r from-gray-700 from-0% via-transparent to-gray-700 pointer-events-none z-30">Testing testing</div>
                <div class="absolute inset-0 bg-gray-700/60 pointer-events-none z-30"></div>
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('/assets/about/about3.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <div class="absolute inset-0 bg-gradient-to-r from-gray-700 from-0% via-transparent to-gray-700 pointer-events-none z-30">Testing testing</div>
                <div class="absolute inset-0 bg-gray-700/60 pointer-events-none z-30"></div>
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('/assets/about/about5.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <div class="absolute inset-0 bg-gradient-to-r from-gray-700 from-0% via-transparent to-gray-700 pointer-events-none z-30">Testing testing</div>
                <div class="absolute inset-0 bg-gray-700/60 pointer-events-none z-30"></div>
            </div>
            <!-- Item 3 -->
            {{-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('/assets/partners/1.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('/assets/partners/1.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('/assets/partners/1.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div> --}}
        </div>
        <!-- Slider indicators -->
        {{-- <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div> --}}
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</section>

<!-- mitra -->
<section class="overflow-hidden">
    <div class="logos whitespace-nowrap bg-white flex py-7">
        <div class="logo-slide flex">
            <img src="{{asset('assets/partners/healthy-mother-healthy-babies.png')}}" alt="" class="object-contain h-16 w-full" loading="lazy">
            <img src="{{asset('/assets/partners/bill-melinda-gates.png')}}" alt="" class="object-contain h-16 w-full" loading="lazy">
            <img src="{{asset('/assets/partners/Kementerian Kesehatan.png')}}" alt="" class="object-contain h-16 w-full" loading="lazy">
            <!-- <img src="/assets/partners/lobar.jpeg" alt="" class="object-contain h-16 w-full"> -->
            <!-- <img src="/assets/partners/loteng.jpg" alt="" class="object-contain h-16 w-full"> -->
            <!-- <img src="/assets/partners/ntb.png" alt="" class="object-contain h-16 w-full"> -->
            <img src="{{asset('/assets/partners/opensrp.png')}}" alt="" class="object-contain h-16 w-full" loading="lazy">
            <img src="{{asset('/assets/partners/politeknik-semarang.png')}}" alt="" class="object-contain h-16 w-full" loading="lazy">
            <img src="{{asset('/assets/partners/qualcomm.png')}}" alt="" class="object-contain h-16 w-full" loading="lazy">
            <img src="{{asset('/assets/partners/the-lancet.png')}}" alt="" class="object-contain h-16 w-full" loading="lazy">
            <img src="{{asset('/assets/partners/ucdavis.png')}}" alt="" class="object-contain h-16 w-full" loading="lazy">
            <!-- <img src="/assets/partners/unicef.png" alt="" class="object-contain h-16 w-full"> -->
            <img src="{{asset('/assets/partners/unram.png')}}" alt="" class="object-contain h-16 w-full" loading="lazy">
            <img src="{{asset('/assets/partners/who.png')}}" alt="" class="object-contain h-16 w-full" loading="lazy">
        </div>
        <!-- duplikat -->
        <div class="logo-slide flex">
            <img src="{{asset('/assets/partners/healthy-mother-healthy-babies.png')}}" alt="" class="object-contain h-16 w-full" loading="lazy">
            <img src="{{asset('/assets/partners/bill-melinda-gates.png')}}" alt="" class="object-contain h-16 w-full" loading="lazy">
            <img src="{{asset('/assets/partners/Kementerian Kesehatan.png')}}" alt="" class="object-contain h-16 w-full" loading="lazy">
            <!-- <img src="/assets/partners/lobar.jpeg" alt="" class="object-contain h-16 w-full"> -->
            <!-- <img src="/assets/partners/loteng.jpg" alt="" class="object-contain h-16 w-full"> -->
            <!-- <img src="/assets/partners/ntb.png" alt="" class="object-contain h-16 w-full"> -->
            <img src="{{asset('/assets/partners/opensrp.png')}}" alt="" class="object-contain h-16 w-full" loading="lazy">
            <img src="{{asset('/assets/partners/politeknik-semarang.png')}}" alt="" class="object-contain h-16 w-full" loading="lazy">
            <img src="{{asset('/assets/partners/qualcomm.png')}}" alt="" class="object-contain h-16 w-full" loading="lazy">
            <img src="{{asset('/assets/partners/the-lancet.png')}}" alt="" class="object-contain h-16 w-full" loading="lazy">
            <img src="{{asset('/assets/partners/ucdavis.png')}}" alt="" class="object-contain h-16 w-full" loading="lazy">
            <!-- <img src="/assets/partners/unicef.png" alt="" class="object-contain h-16 w-full"> -->
            <img src="{{asset('/assets/partners/unram.png')}}" alt="" class="object-contain h-16 w-full" loading="lazy">
            <img src="{{asset('/assets/partners/who.png')}}" alt="" class="object-contain h-16 w-full" loading="lazy">
        </div>
    </div>
</section>

<!-- visi misi -->
<section>
    <div class="w-full h-[30rem] relative">
        <div class="absolute bg-gray-900/50 h-full w-full flex items-center justify-center">
            <!-- <div class="text-center">
                <p class="text-3xl md:text-6xl text-white mb-6">"With every newborn baby, a little sun rises"</p>
                <small class="text-2xl text-white">-Irmgard Erath</small>
            </div> -->
            <div class="w-full mx-auto text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-100 mb-8" viewBox="0 0 975.036 975.036">
                    <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                </svg>
                <p class="leading-relaxed text-3xl md:text-6xl text-white font-medium">With every newborn baby, a <span class="text-blue-600">little sun rises</span>.</p>
                <span class="inline-block h-1 w-10 rounded bg-blue-600 mt-8 mb-6"></span>
                <h2 class="text-gray-100 font-medium title-font tracking-wider text-xl">IRMGARD ERATH</h2>
                <p class="text-gray-300">Penulis</p>
            </div>
        </div>
        <img src="{{asset('/assets/partners/1.jpg')}}" alt="" class="object-cover h-full w-full bg-fixed">
    </div>
</section>

<section class="bg-white pb-24">
    <div class="flex items-center bg-white justify-center flex-wrap md:flex-nowrap w-full gap-3 md:gap-20 -mt-12 md:-mt-16">
        <div class="w-full mx-3 overflow-hidden bg-white rounded-lg shadow-xl md:w-96 z-20 transition duration-400 hover:scale-110">
            <h3 class="py-2 font-bold tracking-wide text-center text-gray-800 uppercase text-2xl">Visi</h3>
    
            <div class="flex items-center flex-col px-4 py-4 bg-white">
                <span class="text-gray-800 mb-3">Improvement through health research and human development at the community level through participatory evidence-based decision making and sustainable action.</span>
                <hr class="w-full border border-gray-300 my-4">
                <a href="#" class="text-blue-400">More</a>
            </div>
        </div>
        <div class="w-full mx-3 overflow-hidden bg-white rounded-lg shadow-xl md:w-96 z-20 transition duration-400 hover:scale-110">
            <h3 class="py-2 font-bold tracking-wide text-center text-gray-800 uppercase text-2xl">Misi</h3>
    
            <div class="flex items-center flex-col px-4 py-4 bg-white">
                <span class="text-gray-800 mb-3">Improvement through community-driven health development by enhancing participation, access to information, and capacity building to support evidence-based and sustainable decision making.</span>
                <hr class="w-full border border-gray-300 my-4">
                <a href="#" class="text-blue-400">More</a>
            </div>
        </div>
    </div>
</section>
<!-- end visi misi -->

<!-- galery -->
<section class="bg-white">
    <div class="container py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Dokumentasi Kegiatan Kami</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p>
        </div>
        <div class="wrap-galery mx-4">
            <!-- <div class="grid grid-cols-2 md:grid-rows-8 gap-4"> -->
            {{-- <div class="flex flex-col gap-4">
                <div class="flex gap-4 whitespace-nowrap">
                    <div class="grid grid-cols-3 gap-4 scrol-1" id="scrol-1">
                        <div>
                            <img class="h-auto max-w-full rounded-lg transition duration-500 hover:scale-110" src="{{asset('/assets/galery/11-12174a_8ec3416906f741498a5761e4c1378d10~mv2.jpg')}}" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{asset('/assets/galery/12-12174a_11efd114e08c436787086bba5930830c~mv2.jpg')}}" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{asset('/assets/galery/13-12174a_70d108379ad2466c96421465a1cfc6bd~mv2.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-4 scrol-1" id="scrol-1">
                        <div>
                            <img class="h-auto max-w-full rounded-lg transition duration-500 hover:scale-110" src="{{asset('/assets/galery/11-12174a_8ec3416906f741498a5761e4c1378d10~mv2.jpg')}}" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{asset('/assets/galery/12-12174a_11efd114e08c436787086bba5930830c~mv2.jpg')}}" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{asset('/assets/galery/13-12174a_70d108379ad2466c96421465a1cfc6bd~mv2.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-3 gap-4 scrol-2" id="scrol-2">
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{asset('/assets/galery/1-12174a_1cbe4a01aab44d95a534e4f6ce3506d3~mv2.jpg')}}" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{asset('/assets/galery/2-12174a_36256ca9c0c54e33927f565a8cdae4a1~mv2.jpg')}}" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{asset('/assets/galery/3-12174a_11b67d0f6041442ba46a2b7586f51673~mv2.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-3 gap-4 scrol-3" id="scrol-3">
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{asset('/assets/galery/4-12174a_8c82b979b2c646298a4691ee448bddff~mv2.jpg')}}" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{asset('/assets/galery/5-12174a_60c68ba4763349f982e6272e7503fe96~mv2.jpg')}}" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="/assets/galery/6-12174a_8c04425ca9ee40769b45e3ead8d28d0c~mv2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid gap-4 grid-cols-3 scrol-4" id="scrol-4">
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="/assets/galery/7-12174a_69e962749961427c8bf47aca7b806ff5~mv2.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="/assets/galery/8-12174a_7dbe2d315d7d4b71b2c9585f9897bf80~mv2.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="/assets/galery/10-12174a_7344d87ada224ce9b353e2b1cd35d40c~mv2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- duplikasi -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="">
                    <div class="grid gap-4 scrol-1" id="scrol-1">
                        <div class="group overflow-hidden rounded-lg relative">
                            <div class="absolute w-full h-full bg-gray-900/55 hidden group-hover:inline-block"></div>
                            <img class="filter brightness-110 h-auto max-w-full rounded-lg transition duration-500 group-hover:scale-125 group-hover:brightness-75" src="/assets/galery/11-12174a_8ec3416906f741498a5761e4c1378d10~mv2.jpg" alt="">
                            <div class="absolute opacity-0 -bottom-16 group-hover:bottom-0 group-hover:opacity-100 transition-all duration-200 w-full text-center py-4">
                                <h3 class="text-lg font-bold text-gray-100">Kegiatan</h3>
                                <p class="text-sm text-gray-300">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                        <div class="group overflow-hidden rounded-lg relative">
                            <img class="filter brightness-110 h-auto max-w-full rounded-lg transition duration-500 group-hover:scale-125 group-hover:brightness-75" src="/assets/galery/12-12174a_11efd114e08c436787086bba5930830c~mv2.jpg" alt="">
                            <div class="absolute -bottom-16 group-hover:bottom-0 transition-all duration-300 w-full text-center py-4">
                                <h3 class="text-lg font-bold text-gray-100">Kegiatan</h3>
                                <p class="text-sm text-gray-300">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                        <div class="group overflow-hidden rounded-lg relative">
                            <img class="filter brightness-110 h-auto max-w-full rounded-lg transition duration-500 group-hover:scale-125 group-hover:brightness-75" src="/assets/galery/13-12174a_70d108379ad2466c96421465a1cfc6bd~mv2.jpg" alt="">
                            <div class="absolute -bottom-16 group-hover:bottom-0 transition-all duration-300 w-full text-center py-4">
                                <h3 class="text-lg font-bold text-gray-100">Kegiatan</h3>
                                <p class="text-sm text-gray-300">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid gap-4 scrol-2" id="scrol-2">
                        <div class="group overflow-hidden rounded-lg relative">
                            <img class="filter brightness-110 h-auto max-w-full rounded-lg transition duration-500 group-hover:scale-125 group-hover:brightness-75" src="/assets/galery/1-12174a_1cbe4a01aab44d95a534e4f6ce3506d3~mv2.jpg" alt="">
                            <div class="absolute -bottom-16 group-hover:bottom-0 transition-all duration-300 w-full text-center py-4">
                                <h3 class="text-lg font-bold text-gray-100">Kegiatan</h3>
                                <p class="text-sm text-gray-300">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                        <div class="group overflow-hidden rounded-lg relative">
                            <img class="filter brightness-110 h-auto max-w-full rounded-lg transition duration-500 group-hover:scale-125 group-hover:brightness-75" src="/assets/galery/2-12174a_36256ca9c0c54e33927f565a8cdae4a1~mv2.jpg" alt="">
                            <div class="absolute -bottom-16 group-hover:bottom-0 transition-all duration-300 w-full text-center py-4">
                                <h3 class="text-lg font-bold text-gray-100">Kegiatan</h3>
                                <p class="text-sm text-gray-300">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                        <div class="group overflow-hidden rounded-lg relative">
                            <img class="filter brightness-110 h-auto max-w-full rounded-lg transition duration-500 group-hover:scale-125 group-hover:brightness-75" src="/assets/galery/3-12174a_11b67d0f6041442ba46a2b7586f51673~mv2.jpg" alt="">
                            <div class="absolute -bottom-16 group-hover:bottom-0 transition-all duration-300 w-full text-center py-4">
                                <h3 class="text-lg font-bold text-gray-100">Kegiatan</h3>
                                <p class="text-sm text-gray-300">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid gap-4 scrol-3" id="scrol-3">
                        <div class="group overflow-hidden rounded-lg relative">
                            <img class="filter brightness-110 h-auto max-w-full rounded-lg transition duration-500 group-hover:scale-125 group-hover:brightness-75" src="/assets/galery/4-12174a_8c82b979b2c646298a4691ee448bddff~mv2.jpg" alt="">
                            <div class="absolute -bottom-16 group-hover:bottom-0 transition-all duration-300 w-full text-center py-4">
                                <h3 class="text-lg font-bold text-gray-100">Kegiatan</h3>
                                <p class="text-sm text-gray-300">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                        <div class="group overflow-hidden rounded-lg relative">
                            <img class="filter brightness-110 h-auto max-w-full rounded-lg transition duration-500 group-hover:scale-125 group-hover:brightness-75" src="/assets/galery/5-12174a_60c68ba4763349f982e6272e7503fe96~mv2.jpg" alt="">
                            <div class="absolute -bottom-16 group-hover:bottom-0 transition-all duration-300 w-full text-center py-4">
                                <h3 class="text-lg font-bold text-gray-100">Kegiatan</h3>
                                <p class="text-sm text-gray-300">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                        <div class="group overflow-hidden rounded-lg relative">
                            <img class="filter brightness-110 h-auto max-w-full rounded-lg transition duration-500 group-hover:scale-125 group-hover:brightness-75" src="/assets/galery/6-12174a_8c04425ca9ee40769b45e3ead8d28d0c~mv2.jpg" alt="">
                            <div class="absolute -bottom-16 group-hover:bottom-0 transition-all duration-300 w-full text-center py-4">
                                <h3 class="text-lg font-bold text-gray-100">Kegiatan</h3>
                                <p class="text-sm text-gray-300">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid gap-4 scrol-4" id="scrol-4">
                        <div class="group overflow-hidden rounded-lg relative">
                            <img class="filter brightness-110 h-auto max-w-full rounded-lg transition duration-500 group-hover:scale-125 group-hover:brightness-75" src="/assets/galery/7-12174a_69e962749961427c8bf47aca7b806ff5~mv2.jpg" alt="">
                            <div class="absolute -bottom-16 group-hover:bottom-0 transition-all duration-300 w-full text-center py-4">
                                <h3 class="text-lg font-bold text-gray-100">Kegiatan</h3>
                                <p class="text-sm text-gray-300">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                        <div class="group overflow-hidden rounded-lg relative">
                            <img class="filter brightness-110 h-auto max-w-full rounded-lg transition duration-500 group-hover:scale-125 group-hover:brightness-75" src="/assets/galery/8-12174a_7dbe2d315d7d4b71b2c9585f9897bf80~mv2.jpg" alt="">
                            <div class="absolute -bottom-16 group-hover:bottom-0 transition-all duration-300 w-full text-center py-4">
                                <h3 class="text-lg font-bold text-gray-100">Kegiatan</h3>
                                <p class="text-sm text-gray-300">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                        <div class="group overflow-hidden rounded-lg relative">
                            <img class="filter brightness-110 h-auto max-w-full rounded-lg transition duration-500 group-hover:scale-125 group-hover:brightness-75" src="/assets/galery/10-12174a_7344d87ada224ce9b353e2b1cd35d40c~mv2.jpg" alt="">
                            <div class="absolute -bottom-16 group-hover:bottom-0 transition-all duration-300 w-full text-center py-4">
                                <h3 class="text-lg font-bold text-gray-100">Kegiatan</h3>
                                <p class="text-sm text-gray-300">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- blog -->
<section class="text-gray-600 body-font bg-gray-300">
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
</section>

@endsection()