@extends('layouts.app')

@section('title', 'About')
@section('content')

{{-- about hero --}}
<section class="w-full bg-blue-500 relative">
    <div class="absolute z-20 -left-10" style="width: max-content;">
        {{-- <svg width="1600" height="398" viewBox="0 0 1517 398" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="path-line" d="M3.40776 0.474558C1.51067 253.172 584.62 347.787 876.411 363.507L1328.02 394.328L1497.65 238.235L1515.05 247.893" stroke="white" stroke-width="4"/>
        </svg> --}}
    </div>
    <div class="absolute bottom-0 left-0 z-10">
        <svg width="1536" height="320" viewBox="0 0 1536 320" xmlns="http://www.w3.org/2000/svg" fill="none">
            <path
                class="path-line"
                d="
                M 0 160 
                H 350

                L 360 120 
                L 370 160 
                L 380 180 
                L 390 80 
                L 400 240 
                L 410 160 
                H 740

                L 750 120 
                L 760 160 
                L 770 180 
                L 780 80 
                L 790 240 
                L 800 160 
                H 1090

                L 1100 120 
                L 1110 160 
                L 1120 180 
                L 1130 80 
                L 1140 240 
                L 1150 160 
                H 1536
                "
                stroke="#ffffff"
                stroke-width="3"
                stroke-linejoin="round"
                stroke-linecap="round"
            />
        </svg>
    </div>
    {{-- <div class="absolute z-20 top-72 -right-[19rem]">
        <svg width="1600" height="834" viewBox="0 0 1528 834" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="path-line-2" d="M1524.85 0.519102C1526.75 253.216 916 385 711.263 385L263.018 329.716C173.438 318.668 87.5586 368.989 53.4067 452.537L18.2829 538.462C5.7969 569.008 1.06286 602.168 4.50285 634.987L25.2626 833.045" stroke="white" stroke-width="4"/>
        </svg>
    </div> --}}

    <div class="container h-[20rem] bg-blue-500 w-full flex items-center justify-center relative mx-auto">
        <div class="text-center z-20 bg-blue-500">
            <h1 class="font-extrabold text-6xl md:text-9xl text-white z-50">About Us</h1>
            <p class="text-gray-200">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa, dignissimos.</p>
        </div>
    </div>
</section>

{{-- why --}}
<section class="bg-gray-300 relative overflow-hidden">
    <div class="mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:px-8">
        <h2 class="text-8xl font-bold text-gray-900 text-center mb-12">
            <div class="absolute uppercase text-gray-400 -left-[29%] -top-[6%] text-center text-[14rem]">history</div>
            <div class="absolute uppercase text-gray-400 -right-[33%] -top-[6%] text-center text-[14rem]">history</div>
            <span class="relative z-30">HISTORY</span>
        </h2>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:items-center md:gap-8">
            <div class="z-20 relative w-full h-full">
                <div class="flex absolute top-[0] gap-8 left-0 transform -translate-x-[105%]">
                    <img src="https://images.unsplash.com/photo-1731690415686-e68f78e2b5bd?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="rounded" alt="">
                    <img
                    src="https://images.unsplash.com/photo-1731690415686-e68f78e2b5bd?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="rounded" alt="" />
                </div>
            </div>
            <div>
                <div class="max-w-lg md:max-w-none">
                    <p class="text-gray-700 text-sm md:text-lg z-20">
                        Yayasan Institut Pengembangan Suara Mitra or also known as the SUMMIT Institute of Development (SID) was legally established in 2007. The idea of forming a foundation came from several former Senior Management Team Members of the SUMMIT. The SUMMIT was a large scale randomized controlled trial conducted in Lombok, West Nusa Tenggara, Indonesia with the goal to reduce maternal and infant death in the context of routine prenatal care. The study enrolled nearly 42000 pregnant women and employed around 500 field staff from 2001-2004. The study showed that health can be improved by enhancing routine prenatal care with participatory approaches and evidence-based decisions. The enhancement can be achieved with the improvement of the quality of human resources. Therefore the SID was envisioned to achieve improvement in health and human development at the community level through participatory evidence-based decision making and sustainable action.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- values --}}
<section class="text-gray-600 body-font relative">
    <h2 class="absolute top-8 left-[50%] transform -translate-x-1/2 text-2xl font-bold block md:hidden">Our Values</h2>

    <div class="flex items-center justify-center">
        <div class="container px-5 w-full mx-auto flex flex-wrap">
            <div class="flex relative pt-28 pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="h-screen w-6 absolute inset-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-blue-500 text-white relative z-10 title-font font-medium text-sm">1</div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                    <div class="flex-shrink-0 w-24 h-24 bg-blue-100 text-blue-500 rounded-full inline-flex items-center justify-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>
                    </div>
                    <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Sustainability</h2>
                    <p class="leading-relaxed">Aksi kecil berdampak besar, menuju masa depan berkelanjutan.</p>
                    </div>
                </div>
            </div>
            <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-blue-500 text-white relative z-10 title-font font-medium text-sm">2</div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                    <div class="flex-shrink-0 w-24 h-24 bg-blue-100 text-blue-500 rounded-full inline-flex items-center justify-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                    </div>
                    <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Evidence-based decision making</h2>
                    <p class="leading-relaxed">Ambil keputusan cerdas, berdasarkan logika dan informasi akurat.</p>
                    </div>
                </div>
            </div>
            <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-blue-500 text-white relative z-10 title-font font-medium text-sm">3</div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                    <div class="flex-shrink-0 w-24 h-24 bg-blue-100 text-blue-500 rounded-full inline-flex items-center justify-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                        <circle cx="12" cy="5" r="3"></circle>
                        <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
                    </svg>
                    </div>
                    <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Community participation</h2>
                    <p class="leading-relaxed">Bersama membangun, suara didengar, perubahan nyata tercipta.</p>
                    </div>
                </div>
            </div>
            <div class="flex relative pb-28 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-blue-500 text-white relative z-10 title-font font-medium text-sm">4</div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                    <div class="flex-shrink-0 w-24 h-24 bg-blue-100 text-blue-500 rounded-full inline-flex items-center justify-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    </div>
                    <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Human development</h2>
                    <p class="leading-relaxed">Fokus pada pertumbuhan holistik untuk masa depan lebih cerah.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto text-right w-full mr-8 hidden md:block relative">
            <span class="absolute font-extrabold text-[14rem] -right-32 top-6 text-right text-gray-300 z-10 pointer-events-none">VALUES</span>
            <h1 class="text-9xl font-extrabold z-30 relative">What Our Values</h1>
        </div>
    </div>
</section>

{{-- garis pembatas --}}
<div class="relative w-full z-40">
    <div class="absolute top-1/2 left-0 w-full h-1 bg-gray-300 transform -translate-y-1/2 pointer-events-none"></div>
</div>

{{-- we do --}}
<section class="text-gray-600 body-font relative">
    <div class="flex overflow-hidden" style="height: max-content">
        <h2 class="absolute top-8 left-[50%] transform -translate-x-1/2 text-2xl font-bold">Our Do</h2>
        <div class="whitespace-nowrap animate-scrollY h-screen hidden md:block">
            <div class="w-[36rem]">
                <img class="rounded-lg" src="/assets/galery/11-12174a_8ec3416906f741498a5761e4c1378d10~mv2.jpg" alt="">
                <img class="rounded-lg" src="/assets/galery/11-12174a_8ec3416906f741498a5761e4c1378d10~mv2.jpg" alt="">
                <img class="rounded-lg" src="/assets/galery/11-12174a_8ec3416906f741498a5761e4c1378d10~mv2.jpg" alt="">
                <img class="rounded-lg" src="/assets/galery/11-12174a_8ec3416906f741498a5761e4c1378d10~mv2.jpg" alt="">
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
            <div class="flex relative pt-28 pb-20 sm:items-center md:w-2/3 mx-auto flex-row-reverse">
                <div class="h-screen w-6 absolute right-0 top-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-blue-500 text-white relative z-10 title-font font-medium text-sm">1</div>
                <div class="flex-grow md:pr-8 pr-6 flex sm:items-center items-end flex-col sm:flex-row-reverse">
                    <div class="flex-shrink-0 w-24 h-24 bg-blue-100 text-blue-500 rounded-full inline-flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-12 h-12">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                        </svg>
                    </div>
                    <div class="flex-grow sm:pr-6 mt-6 sm:mt-0 text-right">
                        <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Evidence-Based Impact</h2>
                        <p class="leading-relaxed">We design and test innovative health solutions to improve lives at scale.</p>
                    </div>
                </div>
            </div>
    
            <!-- STEP 2 -->
            <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto flex-row-reverse">
                <div class="h-full w-6 absolute right-0 top-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-blue-500 text-white relative z-10 title-font font-medium text-sm">2</div>
                <div class="flex-grow md:pr-8 pr-6 flex sm:items-center items-end flex-col sm:flex-row-reverse">
                    <div class="flex-shrink-0 w-24 h-24 bg-blue-100 text-blue-500 rounded-full inline-flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-12 h-12">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                        </svg>
                    </div>
                    <div class="flex-grow sm:pr-6 mt-6 sm:mt-0 text-right">
                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Real-Time Support for Real Impact</h2>
                    <p class="leading-relaxed">Empowering frontline workers with mobile tools to drive real-time health impact.</p>
                    </div>
                </div>
            </div>
    
            <!-- STEP 3 -->
            <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto flex-row-reverse">
                <div class="h-full w-6 absolute right-0 top-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-blue-500 text-white relative z-10 title-font font-medium text-sm">3</div>
                <div class="flex-grow md:pr-8 pr-6 flex sm:items-center items-end flex-col sm:flex-row-reverse">
                    <div class="flex-shrink-0 w-24 h-24 bg-blue-100 text-blue-500 rounded-full inline-flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-12 h-12">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 0 1-3-3m3 3a3 3 0 1 0 0 6h13.5a3 3 0 1 0 0-6m-16.5-3a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3m-19.5 0a4.5 4.5 0 0 1 .9-2.7L5.737 5.1a3.375 3.375 0 0 1 2.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 0 1 .9 2.7m0 0a3 3 0 0 1-3 3m0 3h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Zm-3 6h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Z" />
                        </svg>
                    </div>
                    <div class="flex-grow sm:pr-6 mt-6 sm:mt-0 text-right">
                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Adaptive Data Systems</h2>
                    <p class="leading-relaxed">Scaling surveys with smart data systems for real-time insight.</p>
                    </div>
                </div>
            </div>
    
            <!-- STEP 4 -->
            <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto flex-row-reverse">
                <div class="h-full w-6 absolute right-0 top-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-blue-500 text-white relative z-10 title-font font-medium text-sm">4</div>
                <div class="flex-grow md:pr-8 pr-6 flex sm:items-center items-end flex-col sm:flex-row-reverse">
                    <div class="flex-shrink-0 w-24 h-24 bg-blue-100 text-blue-500 rounded-full inline-flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-12 h-12">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </div>
                    <div class="flex-grow sm:pr-6 mt-6 sm:mt-0 text-right">
                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Research-Driven Solutions</h2>
                    <p class="leading-relaxed">We co-create impactful programs through deep research and local collaboration.</p>
                    </div>
                </div>
            </div>
    
            <!-- STEP 5 -->
            <div class="flex relative pb-28 sm:items-center md:w-2/3 mx-auto flex-row-reverse">
                <div class="h-full w-6 absolute right-0 top-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-blue-500 text-white relative z-10 title-font font-medium text-sm">5</div>
                <div class="flex-grow md:pr-8 pr-6 flex sm:items-center items-end flex-col sm:flex-row-reverse">
                    <div class="flex-shrink-0 w-24 h-24 bg-blue-100 text-blue-500 rounded-full inline-flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-12 h-12">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                        </svg>
                    </div>
                    <div class="flex-grow sm:pr-6 mt-6 sm:mt-0 text-right">
                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Empowering Future Health Leaders</h2>
                    <p class="leading-relaxed">We build future public health leaders through education, scholarships, and hands-on training.</p>
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

{{-- visi --}}
<section class="bg-blue-500 relative">
    <div class="container px-5 mx-auto flex flex-wrap">
        <div class="flex relative pt-28 pb-28 sm:items-center md:w-2/3 mx-auto">
            <div class="h-screen w-6 absolute inset-0 flex items-center justify-center">
                <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
            </div>
            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                    <p class="leading-relaxed text-xl md:text-5xl font-bold text-gray-200">Improvement through health research and human development at the community level through participatory evidence-based decision making and sustainable action.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- garis pembatas --}}
<div class="relative w-full z-40">
    <div class="absolute top-1/2 left-0 w-full h-1 bg-gray-300 transform -translate-y-1/2 pointer-events-none"></div>
</div>

{{-- misi --}}
<section class="bg-blue-500 relative">
    <div class="container px-5 mx-auto flex flex-wrap h-auto">
        <div class="flex relative pt-28 pb-28 sm:items-center md:w-2/3 mx-auto flex-row-reverse">
            <div class="h-full w-6 absolute right-0 top-0 flex items-center justify-center">
                <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
            </div>
            <div class="flex-grow md:pr-8 pr-6 flex sm:items-center items-end flex-col sm:flex-row-reverse">
                <div class="flex-grow sm:pr-6 mt-6 w-full sm:mt-0 text-right">
                    <p class="leading-relaxed text-xl md:text-5xl font-bold text-gray-200 mb-5">Improvement through community driven health development by enhancing participation, access to information, and capacity building to support evidence-based and sustainable decision making.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection