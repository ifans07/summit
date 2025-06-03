@extends('layouts.app')

@section('title', 'Beranda')
@section('content')


{{-- hero --}}
{{-- <section class="relative z-10" id="satu">
    <div class="w-full bg-center bg-cover h-[34rem] md:h-[38rem] relative overflow-hidden test-video">
        <!-- <div class="absolute -z-10"> -->
            <video src="{{ asset('assets/file.mp4') }}" autoplay loop muted playsinline loading="lazy"></video>
        <!-- </div> -->
        <div class="flex items-center w-full h-full bg-gray-900/80">
            <div class="px-4 md:ml-20 relative z-10">
                <h1 class="text-3xl font-bold lg:text-7xl mb-6 text-white text-zoom">Newborn New Hope</h1>
                <p class="mb-6 text-base md:text-2xl text-gray-300 text-zoom-1">SID is committed to improving maternal and child health in <br> Indonesia through participatory, evidence-based <br> solutions rooted in real-world impact</p>

                <!-- From Uiverse.io by elijahgummer --> 
                <button class="group relative button-with-icon border-2 border-gray-100 rounded-lg px-10 py-2.5 z-40">
                    <div class="absolute w-full h-full bg-blue-900 transition- duration-300 -translate-x-[100%] group-hover:-translate-x-[0%]"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="icon" id="Play">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>

                    <span class="text">Learn More</span>
                </button>
            </div>
        </div>
    </div>
    <div class="absolute inset-0 bg-gradient-to-r from-gray-700 via-transparent to-gray-700 pointer-events-none z-0"></div>
</section> --}}

<section>
    <div class="container mx-auto h-screen relative">
        <div class="absolute inset-0 bg-gray-950/80 w-full pointer-events-none h-full z-20">
        </div>
        <img src="/assets/about/about5.jpg" class="absolute inset-0 w-full h-full object-cover z-10" alt="">
        <div class="relative inset-0 h-full w-1/2 mx-auto z-30 text-white flex flex-col items-center justify-center text-center">
            <h1 class="text-7xl font-merriweather font-extrabold mb-4"><span class="underline decoration-blue-900">Newborn</span> <span class="text-blue-900">New</span> Hope</h1>
            <p class="text-xl mb-8">SID is committed to improving maternal and child health in Indonesia through participatory, evidence-based solutions rooted in real-world impact</p>
            <a href="" class="px-14 py-3 border-2 border-blue-900 bg-blue-900 rounded-lg font-medium hover:bg-blue-950 flex items-center">
                Learn More
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                </svg>
            </a>
        </div>
    </div>
</section>


<section class="overflow-hidden">
    <div class="container mx-auto py-28 relative">
        
        <h1 class="text-center text-2xl md:text-6xl text-gray-700 font-extrabold mb-8 font-merriweather">Our <span class="text-blue-900">Partners</span></h1>
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
        <div class="logos whitespace-nowrap bg-white flex py-7">
            <div class="logo-slide tengah flex">
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
            <div class="logo-slide tengah flex">
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
    </div>
</section>
{{-- <section class="relative z-20" id="tiga">
    <!-- mitra -->
    <section class="overflow-hidden" id="dua">
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
                    <span class="inline-block h-1 w-10 rounded bg-blue-500 mt-8 mb-6"></span>
                    <h2 class="text-gray-100 font-medium title-font tracking-wider text-xl">IRMGARD ERATH</h2>
                    <p class="text-gray-300">Penulis</p>
                </div>
            </div>
            <img src="{{asset('/assets/partners/1.jpg')}}" alt="" class="object-cover h-full w-full">
        </div>
    </section>
    <section class="pb-24">
        <div class="flex items-center bg-white justify-center flex-wrap md:flex-nowrap w-full gap-3 md:gap-20 -mt-12 md:-mt-16">
            <div class="w-full mx-3 overflow-hidden bg-white rounded-lg shadow-xl md:w-96 z-20 transition duration-300 hover:scale-110 visi">
                <h3 class="py-2 font-bold tracking-wide text-center text-gray-800 uppercase text-2xl">Visi</h3>
        
                <div class="flex items-center flex-col px-4 py-4 bg-white">
                    <span class="text-gray-800 mb-3">Improvement through health research and human development at the community level through participatory evidence-based decision making and sustainable action.</span>
                    <hr class="w-full border border-gray-300 my-4">
                    <a href="/about" class="text-blue-400">More</a>
                </div>
            </div>
            <div class="w-full mx-3 overflow-hidden bg-white rounded-lg shadow-xl md:w-96 z-20 transition duration-300 hover:scale-110 misi">
                <h3 class="py-2 font-bold tracking-wide text-center text-gray-800 uppercase text-2xl">Misi</h3>
        
                <div class="flex items-center flex-col px-4 py-4 bg-white">
                    <span class="text-gray-800 mb-3">Improvement through community-driven health development by enhancing participation, access to information, and capacity building to support evidence-based and sustainable decision making.</span>
                    <hr class="w-full border border-gray-300 my-4">
                    <a href="/about" class="text-blue-400">More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end visi misi -->

    <!-- galery -->
</section> --}}
<section>
    <div class="container mx-auto px-8 py-28">
        <h1 class="text-7xl font-bold font-merriweather mb-8 w-full text-center"><span class="text-blue-900 mr-auto">Visi</span>, <span class="text-blue-900">Misi</span> & Quote</h1>
        <div class="flex flex-col md:flex-row gap-8">
            <div class="md:w-3/5 relative rounded-lg">
                <img src="{{asset('assets/about/about4.jpg')}}" class="object-cover rounded-lg" alt="">
                <div class="absolute inset-0 text-white bg-gray-600/80 flex flex-col items-center justify-center rounded-lg px-4">
                    <figure class="max-w-screen-md mx-auto text-center">
                        <svg class="w-5 h-5 md:w-10 md:h-10 mx-auto mb-3 text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                            <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
                        </svg>
                        <blockquote>
                            <p class="text-xl md:text-4xl italic font-medium text-gray-900 dark:text-white leading-20">"With every newborn baby, a <span class="text-blue-950">little sun rises</span>."</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center mt-6 space-x-3 rtl:space-x-reverse">
                            {{-- <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture"> --}}
                            <div class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-500 dark:divide-gray-700">
                                <cite class="pe-3 font-medium text-xs md:text-md text-gray-900 dark:text-white">IRMGARD ERATH</cite>
                                <cite class="ps-3 text-xs md:text-sm text-gray-200">Penulis</cite>
                            </div>
                        </figcaption>
                    </figure>
                    {{-- <h2 class="text-white text-6xl text-center leading-normal">
                        With every newborn baby, a little sun rises.
                    </h2>
                    <p>- IRMGARD ERATH -</p> --}}
                </div>
            </div>
            <div class="md:w-2/5 flex gap-8 flex-col">
                <div class="rounded-lg bg-gray-300 shadow p-3">
                    <div class="flex items-center gap-8 mb-8">
                        <div class="w-18 h-18 md:w-24 md:h-24 rounded-lg bg-blue-900 flex items-center justify-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-12 h-12">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                            </svg>
                        </div>
                        <h2 class="font-bold text-4xl text-gray-700">Visi</h2>
                    </div>
                    <p class="text-gray-700 text-md md:text-lg">Improvement through health research and human development at the community level through participatory evidence-based decision making and sustainable action.</p>
                </div>
                <div class="rounded-lg bg-gray-300 p-3">
                    <div class="flex items-center gap-8 mb-8">
                        <div class="w-18 h-18 md:w-24 md:h-24 rounded-lg bg-blue-900 flex items-center justify-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-12 h-12">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </div>
                        <h2 class="font-bold text-4xl text-gray-700">Misi</h2>
                    </div>
                    <p class="text-gray-700 text-md md:text-lg">Improvement through community-driven health development by enhancing participation, access to information, and capacity building to support evidence-based and sustainable decision making.</p>
                </div>
                <a href="/about" class="block relative overflow-hidden px-12 py-2 border-2 border-blue-900 text-white bg-blue-900 hover:bg-blue-950 rounded-lg font-medium text-center">
                    <span>Learn More</span>
                </a>
            </div>
        </div>
    </div>
</section>

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