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
            <h1 class="font-bold text-6xl md:text-8xl text-white z-50">About Us</h1>
            <p class="text-gray-200">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa, dignissimos.</p>
        </div>
    </div>
</section>

{{-- why --}}
<section class="bg-gray-300 relative overflow-hidden">
    <div class="absolute left-0 -top-10">
        {{-- <svg width="2064" height="864" viewBox="0 0 1164 1064" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="path-line-2" d="M1164 38C580.651 39.1644 291.684 63.7014 168.839 85.7122C118.975 94.6467 93.0291 136.157 91.2832 186.786L79.1342 539.107C75.2345 652.199 165.857 746 279.015 746H898.21C1007.01 746 1095.85 659.029 1098.16 550.254L1105.47 207.102C1107.92 91.6676 1012.4 -1.86273 897.041 3.02717L245.419 30.6489C145.928 34.8662 64.6959 111.633 54.8662 210.727L2.97256 733.871C0.309497 760.718 21.3965 784 48.3749 784V784C73.5729 784 94 804.427 94 829.625V1064" stroke="white" stroke-width="4"/>
        </svg> --}}
        <svg width="800" height="841" viewBox="0 0 1103 1141" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="path-line-2" d="M575 1141V1141C575 1044.9 497.098 967 401 967H89V967C37.5871 967 -2.59876 922.631 2.47627 871.469L49.8662 393.727C59.6959 294.633 140.928 217.866 240.419 213.649L892.041 186.027C1007.4 181.137 1102.92 274.668 1100.47 390.102L1093.16 733.254C1090.85 842.029 1002.01 929 893.21 929H274.015C160.857 929 70.2345 835.199 74.1342 722.107L86.2832 369.786C88.0291 319.157 43.985 253.948 93.4543 243.036C140.672 232.621 255.721 224.304 512.85 221.761C593.912 220.959 667.035 172.025 697.73 96.9944L737 1" stroke="white" stroke-width="4"/>
        </svg>
    </div>
    <div class="mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:items-center md:gap-8">
            <div>
                <div class="max-w-lg md:max-w-none">
                    <h2 class="text-4xl font-semibold text-gray-900 sm:text-3xl">
                        HISTORY
                    </h2>

                    <p class="mt-4 text-gray-700 text-lg z-20">
                        Yayasan Institut Pengembangan Suara Mitra or also known as the SUMMIT Institute of Development (SID) was legally established in 2007. The idea of forming a foundation came from several former Senior Management Team Members of the SUMMIT. The SUMMIT was a large scale randomized controlled trial conducted in Lombok, West Nusa Tenggara, Indonesia with the goal to reduce maternal and infant death in the context of routine prenatal care. The study enrolled nearly 42000 pregnant women and employed around 500 field staff from 2001-2004. The study showed that health can be improved by enhancing routine prenatal care with participatory approaches and evidence-based decisions. The enhancement can be achieved with the improvement of the quality of human resources. Therefore the SID was envisioned to achieve improvement in health and human development at the community level through participatory evidence-based decision making and sustainable action.
                    </p>
                </div>
            </div>

            <div class="z-20">
                <img
                src="https://images.unsplash.com/photo-1731690415686-e68f78e2b5bd?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="rounded"
                alt=""
                />
            </div>
        </div>
    </div>
</section>

{{-- values --}}
<section class="text-gray-600 body-font">
    <div class="container px-5 pb-24 mx-auto flex flex-wrap">
        <div class="flex relative pt-24 pb-20 sm:items-center md:w-2/3 mx-auto">
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
        <div class="flex relative pb-10 sm:items-center md:w-2/3 mx-auto">
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
</section>

{{-- we do --}}
<section class="text-gray-600 body-font">
<div class="container px-5 py-24 mx-auto flex flex-wrap">
    <div class="flex flex-wrap w-full">
    <div class="lg:w-2/5 md:w-1/2 md:pr-10 md:py-6">
        <div class="flex relative pb-12">
        <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
        </div>
        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
            </svg>
        </div>
        <div class="flex-grow pl-4">
            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 1</h2>
            <p class="leading-relaxed">VHS cornhole pop-up, try-hard 8-bit iceland helvetica. Kinfolk bespoke try-hard cliche palo santo offal.</p>
        </div>
        </div>
        <div class="flex relative pb-12">
        <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
        </div>
        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
            </svg>
        </div>
        <div class="flex-grow pl-4">
            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 2</h2>
            <p class="leading-relaxed">Vice migas literally kitsch +1 pok pok. Truffaut hot chicken slow-carb health goth, vape typewriter.</p>
        </div>
        </div>
        <div class="flex relative pb-12">
        <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
        </div>
        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <circle cx="12" cy="5" r="3"></circle>
            <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
            </svg>
        </div>
        <div class="flex-grow pl-4">
            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 3</h2>
            <p class="leading-relaxed">Coloring book nar whal glossier master cleanse umami. Salvia +1 master cleanse blog taiyaki.</p>
        </div>
        </div>
        <div class="flex relative pb-12">
        <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
        </div>
        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
            </svg>
        </div>
        <div class="flex-grow pl-4">
            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 4</h2>
            <p class="leading-relaxed">VHS cornhole pop-up, try-hard 8-bit iceland helvetica. Kinfolk bespoke try-hard cliche palo santo offal.</p>
        </div>
        </div>
        <div class="flex relative">
        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
            </svg>
        </div>
        <div class="flex-grow pl-4">
            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">FINISH</h2>
            <p class="leading-relaxed">Pitchfork ugh tattooed scenester echo park gastropub whatever cold-pressed retro.</p>
        </div>
        </div>
    </div>
    <img class="lg:w-3/5 md:w-1/2 object-cover object-center rounded-lg md:mt-0 mt-12" src="https://dummyimage.com/1200x500" alt="step">
    </div>
</div>
</section>

@endsection