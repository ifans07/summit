@extends('layouts.app')

@section('title', 'Leadership')
@section('content')

<section>
    <div class="container mx-auto px-8 py-28">
        <div class="flex flex-col lg:flex-row gap-8">
            <div class="bg-blue-900 rounded-lg p-4 flex items-center justify-center">
                <h1 class="text-white text-4xl uppercase font-extrabold font-poppins">Leadership</h1>
            </div>
            <div class="lg:border-l-2 border-blue-900 md:pl-8">
                <h1 class="text-4xl md:text-7xl font-medium font-poppins text-center md:text-center lg:text-left">Leaders with heart, driving better health for families</h1>
            </div>
        </div>
    </div>
</section>

{{-- management team --}}
<section class="relative">
    <div class="absolute text-9xl inset-0 text-gray-200 w-full top-[27%] left-[10%] font-extrabold pointer-events-none z-0 no-copy">SUMMIT INSTITUTE FOR DEVELOPMENT</div>
    <div class="container mx-auto px-8 py-28">
        <div>
            <div class="mb-8">
                <h1 class="text-4xl font-extrabold uppercase font-poppins mb-8 text-center">Management Team</h1>
            </div>
            <div class="flex flex-wrap justify-around relative z-10">
                <div class="p-4 lg:w-1/4 md:w-1/2 rounded-4xl group cursor-pointer" data-modal-target="medium-modal" data-modal-toggle="medium-modal">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-cover mb-4 group-hover:shadow-2xl" src="/assets/leadership/yuni.avif">
                        <div class="w-72">
                            <h2 class="title-font font-bold font-poppins text-2xl group-hover:underline decoration-[#f8ce46]">Yuni Dwi Setiyawati, MHID., Dietisien</h2>
                            <h3 class="text-gray-600 mb-3 font-inter">CEO, Chair of The Executive Board</h3>
                            {{-- <p class="mb-4">Leads SID with her expertise in public health and nutrition. She is responsible for overseeing the organization’s strategic direction and ensuring the successful implementation of its development programs.</p> --}}
                            <span class="inline-flex">
                            <a class="text-gray-500 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="w-6 h-6" viewBox="0 0 50 50">
                                    <path d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M17,20v19h-6V20H17z M11,14.47c0-1.4,1.2-2.47,3-2.47s2.93,1.07,3,2.47c0,1.4-1.12,2.53-3,2.53C12.2,17,11,15.87,11,14.47z M39,39h-6c0,0,0-9.26,0-10 c0-2-1-4-3.5-4.04h-0.08C27,24.96,26,27.02,26,29c0,0.91,0,10,0,10h-6V20h6v2.56c0,0,1.93-2.56,5.81-2.56 c3.97,0,7.19,2.73,7.19,8.26V39z"></path>
                                </svg>
                            </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="p-4 lg:w-1/4 md:w-1/2 rounded-4xl group cursor-pointer" data-modal-target="medium-modal-1" data-modal-toggle="medium-modal-1">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-cover mb-4 group-hover:shadow-2xl" src="/assets/leadership/tinus.avif">
                    <div class="w-72">
                        <h2 class="title-font font-extrabold font-poppins text-2xl text-gray-900 group-hover:underline decoration-[#f8ce46]">Martinus Pradipto</h2>
                        <h3 class="text-gray-500 mb-3 font-inter">Foundation Secretary | Human Resources Director</h3>
                        {{-- <p class="mb-4">Manages the administrative and operational functions at SID. His role is vital in supporting the organization’s initiatives and ensuring smooth coordination of programs and partnerships.</p> --}}
                        <span class="inline-flex">
                            <a class="text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="w-6 h-6" viewBox="0 0 50 50">
                                    <path d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M17,20v19h-6V20H17z M11,14.47c0-1.4,1.2-2.47,3-2.47s2.93,1.07,3,2.47c0,1.4-1.12,2.53-3,2.53C12.2,17,11,15.87,11,14.47z M39,39h-6c0,0,0-9.26,0-10 c0-2-1-4-3.5-4.04h-0.08C27,24.96,26,27.02,26,29c0,0.91,0,10,0,10h-6V20h6v2.56c0,0,1.93-2.56,5.81-2.56 c3.97,0,7.19,2.73,7.19,8.26V39z"></path>
                                </svg>
                            </a>
                        </span>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- advisor --}}
<section class="relative">
    <div class="absolute text-9xl inset-0 text-gray-200 w-full top-[27%] left-[10%] font-extrabold pointer-events-none z-0 no-copy">SUMMIT INSTITUTE FOR DEVELOPMENT</div>
    <div class="container mx-auto px-8 py-28">
        <div>
            <div class="mb-8">
                <h1 class="text-4xl font-extrabold uppercase font-poppins text-center mb-8">Advisor Team</h1>
            </div>
            <div class="flex flex-wrap justify-center relative z-10 gap-y-8">
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-cover mb-4" src="/assets/leadership/ratna.avif">
                        <div class="w-72">
                            <h2 class="title-font font-bold font-poppins text-2xl">Prof. Dr. dr. Ratna Sitompul, Sp. M , Subsp. I. I.</h2>
                            <h3 class="text-gray-600 mb-3 font-inter">SID Advisor</h3>
                            {{-- <p class="mb-4">Leads SID with her expertise in public health and nutrition. She is responsible for overseeing the organization’s strategic direction and ensuring the successful implementation of its development programs.</p> --}}
                            <span class="inline-flex">
                            <a class="text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="w-6 h-6" viewBox="0 0 50 50">
                                    <path d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M17,20v19h-6V20H17z M11,14.47c0-1.4,1.2-2.47,3-2.47s2.93,1.07,3,2.47c0,1.4-1.12,2.53-3,2.53C12.2,17,11,15.87,11,14.47z M39,39h-6c0,0,0-9.26,0-10 c0-2-1-4-3.5-4.04h-0.08C27,24.96,26,27.02,26,29c0,0.91,0,10,0,10h-6V20h6v2.56c0,0,1.93-2.56,5.81-2.56 c3.97,0,7.19,2.73,7.19,8.26V39z"></path>
                                </svg>
                            </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-cover mb-4" src="/assets/leadership/dewi.avif">
                    <div class="w-72">
                        <h2 class="title-font font-extrabold font-poppins text-2xl text-gray-900">dr. Nurhandini Eka Dewi, Sp.A., MPH</h2>
                        <h3 class="text-gray-500 mb-3 font-inter">SID Advisor</h3>
                        {{-- <p class="mb-4">Manages the administrative and operational functions at SID. His role is vital in supporting the organization’s initiatives and ensuring smooth coordination of programs and partnerships.</p> --}}
                        <span class="inline-flex">
                            <a class="text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="w-6 h-6" viewBox="0 0 50 50">
                                    <path d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M17,20v19h-6V20H17z M11,14.47c0-1.4,1.2-2.47,3-2.47s2.93,1.07,3,2.47c0,1.4-1.12,2.53-3,2.53C12.2,17,11,15.87,11,14.47z M39,39h-6c0,0,0-9.26,0-10 c0-2-1-4-3.5-4.04h-0.08C27,24.96,26,27.02,26,29c0,0.91,0,10,0,10h-6V20h6v2.56c0,0,1.93-2.56,5.81-2.56 c3.97,0,7.19,2.73,7.19,8.26V39z"></path>
                                </svg>
                            </a>
                        </span>
                    </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-cover mb-4" src="/assets/leadership/sebayang.avif">
                    <div class="w-72">
                        <h2 class="title-font font-extrabold font-poppins text-2xl text-gray-900">⁠Dr. Susy Sebayang</h2>
                        <h3 class="text-gray-500 mb-3 font-inter">SID Advisor</h3>
                        {{-- <p class="mb-4">Manages the administrative and operational functions at SID. His role is vital in supporting the organization’s initiatives and ensuring smooth coordination of programs and partnerships.</p> --}}
                        <span class="inline-flex">
                            <a class="text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="w-6 h-6" viewBox="0 0 50 50">
                                    <path d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M17,20v19h-6V20H17z M11,14.47c0-1.4,1.2-2.47,3-2.47s2.93,1.07,3,2.47c0,1.4-1.12,2.53-3,2.53C12.2,17,11,15.87,11,14.47z M39,39h-6c0,0,0-9.26,0-10 c0-2-1-4-3.5-4.04h-0.08C27,24.96,26,27.02,26,29c0,0.91,0,10,0,10h-6V20h6v2.56c0,0,1.93-2.56,5.81-2.56 c3.97,0,7.19,2.73,7.19,8.26V39z"></path>
                                </svg>
                            </a>
                        </span>
                    </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-cover mb-4" src="/assets/leadership/jalal.avif">
                    <div class="w-72">
                        <h2 class="title-font font-extrabold font-poppins text-2xl text-gray-900">Prof. Dr. H. Fasli Jalal Ph.D</h2>
                        <h3 class="text-gray-500 mb-3 font-inter">SID Advisor</h3>
                        {{-- <p class="mb-4">Manages the administrative and operational functions at SID. His role is vital in supporting the organization’s initiatives and ensuring smooth coordination of programs and partnerships.</p> --}}
                        <span class="inline-flex">
                            <a class="text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="w-6 h-6" viewBox="0 0 50 50">
                                    <path d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M17,20v19h-6V20H17z M11,14.47c0-1.4,1.2-2.47,3-2.47s2.93,1.07,3,2.47c0,1.4-1.12,2.53-3,2.53C12.2,17,11,15.87,11,14.47z M39,39h-6c0,0,0-9.26,0-10 c0-2-1-4-3.5-4.04h-0.08C27,24.96,26,27.02,26,29c0,0.91,0,10,0,10h-6V20h6v2.56c0,0,1.93-2.56,5.81-2.56 c3.97,0,7.19,2.73,7.19,8.26V39z"></path>
                                </svg>
                            </a>
                        </span>
                    </div>
                    </div>
                </div>

                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-fill mb-4" src="/assets/leadership/anu.avif">
                    <div class="w-72">
                        <h2 class="title-font font-extrabold font-poppins text-2xl text-gray-900">Dr. Anuraj Shankar</h2>
                        <h3 class="text-gray-500 mb-3 font-inter">SID Advisor</h3>
                        {{-- <p class="mb-4">Manages the administrative and operational functions at SID. His role is vital in supporting the organization’s initiatives and ensuring smooth coordination of programs and partnerships.</p> --}}
                        <span class="inline-flex">
                            <a class="text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="w-6 h-6" viewBox="0 0 50 50">
                                    <path d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M17,20v19h-6V20H17z M11,14.47c0-1.4,1.2-2.47,3-2.47s2.93,1.07,3,2.47c0,1.4-1.12,2.53-3,2.53C12.2,17,11,15.87,11,14.47z M39,39h-6c0,0,0-9.26,0-10 c0-2-1-4-3.5-4.04h-0.08C27,24.96,26,27.02,26,29c0,0.91,0,10,0,10h-6V20h6v2.56c0,0,1.93-2.56,5.81-2.56 c3.97,0,7.19,2.73,7.19,8.26V39z"></path>
                                </svg>
                            </a>
                        </span>
                    </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-cover mb-4" src="/assets/leadership/roy.avif">
                    <div class="w-72">
                        <h2 class="title-font font-extrabold font-poppins text-2xl text-gray-900">Dr. dr. Roy Tjiong</h2>
                        <h3 class="text-gray-500 mb-3 font-inter">SID Advisor</h3>
                        {{-- <p class="mb-4">Manages the administrative and operational functions at SID. His role is vital in supporting the organization’s initiatives and ensuring smooth coordination of programs and partnerships.</p> --}}
                        <span class="inline-flex">
                            <a class="text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="w-6 h-6" viewBox="0 0 50 50">
                                    <path d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M17,20v19h-6V20H17z M11,14.47c0-1.4,1.2-2.47,3-2.47s2.93,1.07,3,2.47c0,1.4-1.12,2.53-3,2.53C12.2,17,11,15.87,11,14.47z M39,39h-6c0,0,0-9.26,0-10 c0-2-1-4-3.5-4.04h-0.08C27,24.96,26,27.02,26,29c0,0.91,0,10,0,10h-6V20h6v2.56c0,0,1.93-2.56,5.81-2.56 c3.97,0,7.19,2.73,7.19,8.26V39z"></path>
                                </svg>
                            </a>
                        </span>
                    </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-cover mb-4" src="/assets/leadership/sayuti.avif">
                    <div class="w-72">
                        <h2 class="title-font font-extrabold font-poppins text-2xl text-gray-900">⁠Ir. Rosiady Husaenie Sayuti, M.Sc., Ph.D.</h2>
                        <h3 class="text-gray-500 mb-3 font-inter">SID Advisor</h3>
                        
                        <span class="inline-flex">
                            <a class="text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="w-6 h-6" viewBox="0 0 50 50">
                                    <path d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M17,20v19h-6V20H17z M11,14.47c0-1.4,1.2-2.47,3-2.47s2.93,1.07,3,2.47c0,1.4-1.12,2.53-3,2.53C12.2,17,11,15.87,11,14.47z M39,39h-6c0,0,0-9.26,0-10 c0-2-1-4-3.5-4.04h-0.08C27,24.96,26,27.02,26,29c0,0.91,0,10,0,10h-6V20h6v2.56c0,0,1.93-2.56,5.81-2.56 c3.97,0,7.19,2.73,7.19,8.26V39z"></path>
                                </svg>
                            </a>
                        </span>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- supervisor --}}
<section class="relative">
    <div class="absolute text-9xl inset-0 text-gray-200 w-full top-[27%] left-[10%] font-extrabold pointer-events-none z-0 no-copy">SUMMIT INSTITUTE FOR DEVELOPMENT</div>
    <div class="container mx-auto px-8 py-28">
        <div>
            <div class="mb-8">
                <h1 class="text-4xl font-extrabold uppercase font-poppins mb-8 text-center">Supervisor Team</h1>
            </div>
            <div class="flex flex-wrap relative z-10">
                <div class="p-4 lg:w-1/2 md:w-1/2">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-cover mb-4" src="/assets/leadership/lubis.avif">
                        <div class="w-72">
                            <h2 class="title-font font-bold font-poppins text-2xl">dr Aditiawarman Lubis, MPH</h2>
                            <h3 class="text-gray-600 mb-3 font-inter">SID Supervisor</h3>
                            {{-- <p class="mb-4">Leads SID with her expertise in public health and nutrition. She is responsible for overseeing the organization’s strategic direction and ensuring the successful implementation of its development programs.</p> --}}
                            <span class="inline-flex">
                            <a class="text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="w-6 h-6" viewBox="0 0 50 50">
                                    <path d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M17,20v19h-6V20H17z M11,14.47c0-1.4,1.2-2.47,3-2.47s2.93,1.07,3,2.47c0,1.4-1.12,2.53-3,2.53C12.2,17,11,15.87,11,14.47z M39,39h-6c0,0,0-9.26,0-10 c0-2-1-4-3.5-4.04h-0.08C27,24.96,26,27.02,26,29c0,0.91,0,10,0,10h-6V20h6v2.56c0,0,1.93-2.56,5.81-2.56 c3.97,0,7.19,2.73,7.19,8.26V39z"></path>
                                </svg>
                            </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="p-4 lg:w-1/2 md:w-1/2">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-cover mb-4" src="/assets/leadership/nina.avif">
                    <div class="w-72">
                        <h2 class="title-font font-extrabold font-poppins text-2xl text-gray-900">Nina Y Kurniarukmi Dinarkinanti, M.Dev</h2>
                        <h3 class="text-gray-500 mb-3 font-inter">SID Supervisor</h3>
                        {{-- <p class="mb-4">Manages the administrative and operational functions at SID. His role is vital in supporting the organization’s initiatives and ensuring smooth coordination of programs and partnerships.</p> --}}
                        <span class="inline-flex">
                            <a class="text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="w-6 h-6" viewBox="0 0 50 50">
                                    <path d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M17,20v19h-6V20H17z M11,14.47c0-1.4,1.2-2.47,3-2.47s2.93,1.07,3,2.47c0,1.4-1.12,2.53-3,2.53C12.2,17,11,15.87,11,14.47z M39,39h-6c0,0,0-9.26,0-10 c0-2-1-4-3.5-4.04h-0.08C27,24.96,26,27.02,26,29c0,0.91,0,10,0,10h-6V20h6v2.56c0,0,1.93-2.56,5.81-2.56 c3.97,0,7.19,2.73,7.19,8.26V39z"></path>
                                </svg>
                            </a>
                        </span>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <hr class="border border-black mx-8">

<section>
    <div class="container mx-auto px-8 py-28">
        <h1 class="text-4xl font-bold mb-16 font-poppins">More Information</h1>
        <div class="flex gap-8">
            <div class="lg:w-1/3">
                <a href="/publications" class="block group">
                    <img
                        alt=""
                        src="/assets/dokumentasi/1.jpg"
                        class="h-64 w-full object-cover sm:h-80 lg:h-96 rounded-4xl"
                    />

                    <h3 class="mt-4 text-lg font-bold text-gray-900 sm:text-xl font-poppins group-hover:underline underline-offset-8">Publications</h3>

                    <p class="mt-2 max-w-sm text-gray-700 font-inter">
                        Leaders with heart, driving better health for families
                    </p>
                </a>
            </div>
            <div class="lg:w-1/3">
                <a href="/news" class="block group">
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
                <a href="/programs" class="block group">
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


<!-- Default Modal -->
<div id="medium-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-lg max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                <div>
                    <h3 class="text-xl font-medium text-gray-900">
                        Yuni Dwi Setiyawati, MHID., Dietisien
                    </h3>
                    <small class="text-gray-700">CEO, Chair of The Executive Board</small>
                </div>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="medium-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <div class="flex gap-4 flex-col md:flex-row items-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-36 h-36 object-cover mb-4 group-hover:shadow-2xl" src="/assets/leadership/yuni.avif">
                    <p class="text-base leading-relaxed text-gray-800">
                        Yuni Dwi Setiyawati, MHID., Dietisien, leads SID with her expertise in public health and nutrition. She is responsible for overseeing the organization’s strategic direction and ensuring the successful implementation of its development programs.
                    </p>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                {{-- <button data-modal-hide="medium-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Love</button>
                <button data-modal-hide="medium-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Hate</button> --}}
                <a href="">
                    <span class="border-2 border-black font-medium rounded-4xl px-2 py-1">Linkedin</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div id="medium-modal-1" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-lg max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                <div>
                    <h3 class="text-xl font-medium text-gray-900">
                        Martinus Pradipto
                    </h3>
                    <small class="text-gray-700">Foundation Secretary | Human Resources Director</small>
                </div>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="medium-modal-1">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <div class="flex gap-4 flex-col md:flex-row items-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-36 h-36 object-cover mb-4 group-hover:shadow-2xl" src="/assets/leadership/tinus.avif">
                    <p class="text-base leading-relaxed text-gray-800">
                        Martinus Pradipto manages the administrative and operational functions at SID. His role is vital in supporting the organization’s initiatives and ensuring smooth coordination of programs and partnerships.
                    </p>
                </div>
                {{-- <div class="flex justify-end mt-8">
                    <span class="border-2 border-black px-2 py-1 rounded-4xl font-medium">Linkedin</span>
                </div> --}}
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                {{-- <button data-modal-hide="medium-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Love</button>
                <button data-modal-hide="medium-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Hate</button> --}}
                <a href="">
                    <span class="border-2 border-black px-2 py-1 rounded-4xl font-medium">Linkedin</span>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection()