@extends('layouts.app')

@section('title', 'About')
@section('content')

{{-- about hero --}}
<section class="w-full z-20 relative overflow-hidden bg-gray-700">
    <div class="absolute z-10 left-[0%] md:left-[50%] top-0 md:-top-[30%] bg-gray-700/70">
        <img src="/assets/about/about3.jpg" class="inset-0 object-cover max-h-full max-w-full" alt="">
        <div class="absolute inset-0 bg-gradient-to-r from-gray-700 via-transparent to-gray-700 pointer-events-none"></div>
        
        <div class="absolute inset-0 bg-gray-700/70 pointer-events-none"></div>
        
    </div>

    <div class="container h-[19rem] md:h-[24rem] w-full flex items-center px-20 relative mx-auto z-20">
        <div class="text-left z-20">
            <h1 class="font-extrabold text-4xl md:text-9xl text-white z-50">About Us</h1>
            {{-- <p class="text-gray-200">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa, dignissimos.</p> --}}
        </div>
    </div>
    {{-- <div class="absolute inset-0 bg-gradient-to-b from-transparent from-4% to-gray-300 to-96% pointer-events-none"></div> --}}
</section>

{{-- <section>
    <div class="container mx-auto">
        <div class="flex">
            <div class="w-1/3 h-[20rem] bg-teal-500">
                <h1>The Story Behind SID</h1>
                <p>Yayasan Institut Pengembangan Suara Mitra or also known as the SUMMIT Institute of Development (SID) was legally established in 2007. The idea of forming a foundation came from several former Senior Management Team Members of the SUMMIT. The SUMMIT was a large scale randomized controlled trial conducted in Lombok, West Nusa Tenggara, Indonesia with the goal to reduce maternal and infant death in the context of routine prenatal care. The study enrolled nearly 42000 pregnant women and employed around 500 field staff from 2001-2004. The study showed that health can be improved by enhancing routine prenatal care with participatory approaches and evidence-based decisions. The enhancement can be achieved with the improvement of the quality of human resources. Therefore the SID was envisioned to achieve improvement in health and human development at the community level through participatory evidence-based decision making and sustainable action.</p>
            </div>
            <div class="w-2/3 h-[20rem] bg-indigo-500">
                <div>
                    <h1>Visi</h1>
                    <p>Improvement through health research and human development at the community level through participatory evidence-based decision making and sustainable action.</p>
                </div>
                <div>
                    <h1>Misi</h1>
                    <ol class="items-center sm:flex">
                        <li class="relative mb-6 sm:mb-0">
                            <div class="flex items-center">
                                <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                    <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                            </div>
                            <div class="mt-3 sm:pe-8">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Flowbite Library v1.0.0</h3>
                                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on December 2, 2021</time>
                                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Improved participation of every member of the community in decision making, in forms of information, idea, suggestion or opinions.</p>
                            </div>
                        </li>
                        <li class="relative mb-6 sm:mb-0">
                            <div class="flex items-center">
                                <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                    <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                            </div>
                            <div class="mt-3 sm:pe-8">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Flowbite Library v1.2.0</h3>
                                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on December 23, 2021</time>
                                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Improved access to information and health services</p>
                            </div>
                        </li>
                        <li class="relative mb-6 sm:mb-0">
                            <div class="flex items-center">
                                <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                    <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                            </div>
                            <div class="mt-3 sm:pe-8">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Flowbite Library v1.3.0</h3>
                                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on January 5, 2022</time>
                                <p class="text-base font-normal text-gray-500 dark:text-gray-400">To establish communication and information system at the community level to obtain evidence needed for decision-making processes</p>
                            </div>
                        </li>
                        <li class="relative mb-6 sm:mb-0">
                            <div class="flex items-center">
                                <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                    <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                            </div>
                            <div class="mt-3 sm:pe-8">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Flowbite Library v1.3.0</h3>
                                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on January 5, 2022</time>
                                <p class="text-base font-normal text-gray-500 dark:text-gray-400">To develop human resource to become agents of change that will drive for better behavior at the community level.</p>
                            </div>
                        </li>
                    </ol>

                </div>
            </div>
        </div>
    </div>
</section> --}}

{{-- why --}}
<section class="bg-gray-300 relative pb-20 overflow-hidden">
    <div class="mx-auto max-w-screen-xl px-4 py-20 sm:px-6 lg:px-0">
        <h2 class="text-4xl md:text-8xl font-bold text-gray-900 mb-16 text-right">
            <div class="hidden md:hidden absolute uppercase text-gray-400 -left-[29%] -top-[6%] text-center text-[14rem]">history</div>
            <div class="hidden md:hidden absolute uppercase text-gray-400 -right-[33%] -top-[6%] text-center text-[14rem]">history</div>
            {{-- <span class="relative z-30 text-gray-700">How It All Began</span> --}}
            <span class="relative z-30 text-gray-700">The Story Behind SID</span>
        </h2>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:items-center md:gap-8">
            <div class="relative w-full h-full">
                <div class="flex absolute top-[0] gap-8 left-0 transform -translate-x-[105%] z-10 opacity-30 md:opacity-100">
                    <img src="https://images.unsplash.com/photo-1731690415686-e68f78e2b5bd?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="rounded" alt="">
                    <img
                    src="https://images.unsplash.com/photo-1731690415686-e68f78e2b5bd?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="rounded" alt="" />
                </div>
            </div>
            <div>
                <div class="max-w-lg md:max-w-none z-20 bg-gray-300">
                    <p class="text-gray-800 text-sm md:text-lg">
                        Yayasan Institut Pengembangan Suara Mitra or also known as the SUMMIT Institute of Development (SID) was legally established in 2007. The idea of forming a foundation came from several former Senior Management Team Members of the SUMMIT. The SUMMIT was a large scale randomized controlled trial conducted in Lombok, West Nusa Tenggara, Indonesia with the goal to reduce maternal and infant death in the context of routine prenatal care. The study enrolled nearly 42000 pregnant women and employed around 500 field staff from 2001-2004. The study showed that health can be improved by enhancing routine prenatal care with participatory approaches and evidence-based decisions. The enhancement can be achieved with the improvement of the quality of human resources. Therefore the SID was envisioned to achieve improvement in health and human development at the community level through participatory evidence-based decision making and sustainable action.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- visi misi --}}
<section class="relative bg-[#10169f]">
    
    <div class="container relative mx-auto py-40 z-10">
        <div class="flex flex-wrap md:flex-nowrap gap-4 px-4">
            <div class="w-full md:w-1/2 h-auto flex justify-center flex-col md:px-12 relative">
                <h1 class="text-6xl md:text-8xl font-bold text-gray-100 text-left z-30">Our Vision</h1>
                <h1 class="uppercase font-extrabold text-8xl md:text-9xl absolute z-0 text-gray-200 opacity-10 top-[20%] -left-[8%] md:-left-[0%]">Vision</h1>
                <div class="mt-2 mb-4">
                    <span class="inline-block w-40 h-1 bg-gray-200 rounded-full"></span>
                    <span class="inline-block w-3 h-1 ml-1 bg-gray-200 rounded-full"></span>
                    <span class="inline-block w-1 h-1 ml-1 bg-gray-200 rounded-full"></span>
                </div>
                <p class="text-gray-200 text-base md:text-xl">Improvement through health research and human development at the community level through participatory evidence-based decision making and sustainable action.</p>
            </div>
            <div class="md:w-1/2 h-auto">
                <div>
                    {{-- <h1>Our Mision</h1> --}}
                    {{-- <div class="grid grid-cols-2 h-full">
                        <div class="bg-blue-500">
                            Misi 1
                        </div>
                        <div class="bg-blue-300">Misi 2</div>
                        <div class="bg-blue-400">Misi 3</div>
                        <div class="bg-blue-600">Misi 4</div>
                    </div> --}}
                    <div class="grid w-full grid-cols-1 gap-4 xl:gap-4 md:grid-cols-2 md:pr-4">
                        <div class="space-y-3 shadow-2xl p-3 rounded-lg bg-white">
                            <div class="flex gap-4 items-center">
                                <span class="inline-block p-3 text-white bg-[#10169f] rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                                    </svg>
                                </span>
                                
                                <h1 class="text-xl font-semibold text-gray-700 capitalize">Every Voice Matters</h1>
                            </div>


                            <p class="text-gray-600">
                                Improved participation of every member of the community in decision making, in forms of information, idea, suggestion or opinions.
                            </p>
                        </div>

                        <div class="space-y-3 shadow-2xl p-3 rounded-lg bg-white">
                            <div class="flex gap-4 items-center">
                                <span class="inline-block p-3 text-white bg-[#10169f] rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 0 1-1.161.886l-.143.048a1.107 1.107 0 0 0-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 0 1-1.652.928l-.679-.906a1.125 1.125 0 0 0-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 0 0-8.862 12.872M12.75 3.031a9 9 0 0 1 6.69 14.036m0 0-.177-.529A2.25 2.25 0 0 0 17.128 15H16.5l-.324-.324a1.453 1.453 0 0 0-2.328.377l-.036.073a1.586 1.586 0 0 1-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 0 1-5.276 3.67m0 0a9 9 0 0 1-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                                    </svg>
    
                                </span>
                                <h1 class="text-xl font-semibold text-gray-700 capitalize">Accessible Care for All</h1>
                            </div>


                            <p class="text-gray-600">
                                Improved access to information and health services.
                            </p>
                        </div>

                        <div class="space-y-3 shadow-2xl p-3 rounded-lg bg-white">
                            <div class="flex items-center gap-4">
                                <span class="inline-block p-3 text-white bg-[#10169f] rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                                    </svg>
                                </span>
                                <h1 class="text-xl font-semibold text-gray-700 capitalize">Connected Communities & Informed Decisions</h1>
                            </div>

                            <p class="text-gray-600">
                                To establish communication and information system at the community level to obtain evidence needed for decision-making processes.
                            </p>
                        </div>

                        <div class="space-y-3 shadow-2xl p-3 rounded-lg bg-white">
                            <div class="flex items-center gap-4">
                                <span class="inline-block p-3 text-white bg-[#10169f] rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                                    </svg>
                                </span>
                                <h1 class="text-xl font-semibold text-gray-700 capitalize">Empowering Change Makers</h1>
                            </div>


                            <p class="text-gray-600">
                                To develop human resource to become agents of change that will drive for better behavior at the community level.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- <div class="absolute -bottom-[93%] md:-bottom-[64%] right-0 w-full h-full"> --}}
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="absolute -bottom-[0%] md:-bottom-[14%] left-0 z-0 pointer-events-none"><path fill="#ffffff" fill-opacity="1" d="M0,160L80,138.7C160,117,320,75,480,96C640,117,800,203,960,224C1120,245,1280,203,1360,181.3L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
    {{-- </div> --}}
</section>


{{-- values --}}
<section class="text-gray-600 body-font relative">
    <div class="flex items-center justify-center">
        <h1 class="absolute top-8 left-[50%] transform -translate-x-1/2 text-2xl font-extrabold md:hidden w-full text-center text-white bg-[#10169f] z-20">What Are Our Values?</h1>
        <div class="container px-5 w-full mx-auto flex flex-wrap">
            <div class="flex relative pt-28 pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center transform translate-x-3">
                    <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-16 h-16 transform -translate-x-2 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-[#10169f] text-white relative z-10 title-font font-medium text-sm"><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg></div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                    {{-- <div class="flex-shrink-0 w-24 h-24 bg-blue-100 text-blue-500 rounded-full inline-flex items-center justify-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>
                    </div> --}}
                    <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Sustainability</h2>
                    <p class="leading-relaxed">Aksi kecil berdampak besar, menuju masa depan berkelanjutan.</p>
                    </div>
                </div>
            </div>

            <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center transform translate-x-3">
                    <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-16 h-16 rounded-full transform -translate-x-2 mt-10 sm:mt-0 inline-flex items-center justify-center bg-[#10169f] text-white relative z-10 title-font font-medium text-sm">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                    {{-- <div class="flex-shrink-0 w-24 h-24 bg-blue-100 text-blue-500 rounded-full inline-flex items-center justify-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                    </div> --}}
                    <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Evidence-based decision making</h2>
                    <p class="leading-relaxed">Ambil keputusan cerdas, berdasarkan logika dan informasi akurat.</p>
                    </div>
                </div>
            </div>

            <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center transform translate-x-3">
                    <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-16 h-16 rounded-full transform -translate-x-2 mt-10 sm:mt-0 inline-flex items-center justify-center bg-[#10169f] text-white relative z-10 title-font font-medium text-sm">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
                        <circle cx="12" cy="5" r="3"></circle>
                        <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
                    </svg>
                </div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                    {{-- <div class="flex-shrink-0 w-24 h-24 bg-blue-100 text-blue-500 rounded-full inline-flex items-center justify-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                        <circle cx="12" cy="5" r="3"></circle>
                        <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
                    </svg>
                    </div> --}}
                    <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Community participation</h2>
                    <p class="leading-relaxed">Bersama membangun, suara didengar, perubahan nyata tercipta.</p>
                    </div>
                </div>
            </div>

            <div class="flex relative pb-28 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center transform translate-x-3">
                    <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-16 h-16 rounded-full transform -translate-x-2 mt-10 sm:mt-0 inline-flex items-center justify-center bg-[#10169f] text-white relative z-10 title-font font-medium text-sm">
                    {{-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                    </svg>
                </div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                    {{-- <div class="flex-shrink-0 w-24 h-24 bg-blue-100 text-blue-500 rounded-full inline-flex items-center justify-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    </div> --}}
                    <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Human development</h2>
                    <p class="leading-relaxed">Fokus pada pertumbuhan holistik untuk masa depan lebih cerah.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto text-right w-full mr-8 hidden md:block relative">
            <span class="absolute font-extrabold text-[14rem] -right-32 top-6 text-right text-gray-200 z-10 pointer-events-none">VALUES</span>
            <h1 class="text-8xl font-extrabold z-30 relative">What Are Our Values?</h1>
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
        <h1 class="absolute lg:top-[2%] top-8 lg:left-[60%] left-[50%] transform -translate-x-1/2 lg:text-8xl text-2xl font-extrabold w-full md:w-auto text-white md:text-gray-700 text-center bg-[#10169f] md:bg-transparent md:text-left z-20">
            <span class="absolute font-extrabold text-[14rem] -right-24 top-6 text-right text-gray-200 z-0 hidden md:block">DO</span>
            <span class="relative z-20">What Do We Do?</span>
        </h1>
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
                        <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Evidence-Based Impact</h2>
                        <p class="leading-relaxed">We design and test innovative health solutions to improve lives at scale.</p>
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
                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Real-Time Support for Real Impact</h2>
                    <p class="leading-relaxed">Empowering frontline workers with mobile tools to drive real-time health impact.</p>
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
                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Adaptive Data Systems</h2>
                    <p class="leading-relaxed">Scaling surveys with smart data systems for real-time insight.</p>
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
                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Research-Driven Solutions</h2>
                    <p class="leading-relaxed">We co-create impactful programs through deep research and local collaboration.</p>
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
<section class="bg-[#10169f] relative">
    <div class="container px-5 mx-auto flex flex-wrap">
        <div class="flex relative pt-28 pb-28 sm:items-center md:w-2/3 mx-auto">
            <div class="h-auto w-6 absolute inset-0 flex items-center justify-center">
                <div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
            </div>
            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                <div class="flex items-center justify-center flex-col flex-grow sm:pl-6 mt-6 sm:mt-0">
                    <h1 class="text-2xl md:text-4xl text-gray-200 font-medium mb-4 text-center flex">
                        Mari Bersama Membangun Negeri
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-12 h-12 ml-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 0 1-1.161.886l-.143.048a1.107 1.107 0 0 0-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 0 1-1.652.928l-.679-.906a1.125 1.125 0 0 0-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 0 0-8.862 12.872M12.75 3.031a9 9 0 0 1 6.69 14.036m0 0-.177-.529A2.25 2.25 0 0 0 17.128 15H16.5l-.324-.324a1.453 1.453 0 0 0-2.328.377l-.036.073a1.586 1.586 0 0 1-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 0 1-5.276 3.67m0 0a9 9 0 0 1-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                        </svg>
                    </h1>
                    <button class="border-2 border-gray-200 px-12 py-2 rounded-lg font-medium text-gray-100 cursor-pointer flex items-center justify-center text-base md:w-60 group transition-all duration-500 overflow-hidden hover:bg-white hover:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-5 h-5 ml-2 -translate-x-24 group-hover:translate-x-14 transition duration-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                        <span class="group-hover:translate-x-48 transition duration-500">Learn more</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 ml-2 group-hover:translate-x-24 transition duration-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </button>
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
{{-- <section class="bg-blue-500 relative">
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
</section> --}}

@endsection