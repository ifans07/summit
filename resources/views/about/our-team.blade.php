@extends('layouts.app')

@section('title', 'Leadership')
@section('content')

<section>
    <div class="container mx-auto px-8 py-28">
        <div class="flex flex-col md:flex-row justify-center gap-8">
            <div class="bg-blue-900 rounded-lg p-4 flex items-center justify-center">
                <h1 class="text-white text-4xl uppercase font-extrabold">Our Team</h1>
            </div>
            <div class="md:border-l-2 border-blue-900 md:pl-8">
                <h1 class="text-4xl md:text-7xl font-medium font-merriweather text-center md:text-left">Meet Our Team</h1>
            </div>
        </div>
    </div>
</section>

<section class="relative">
    <div class="absolute text-9xl inset-0 text-gray-200 w-full top-[27%] left-[10%] font-extrabold pointer-events-none z-0 no-copy">SUMMIT INSTITUTE FOR DEVELOPMENT</div>
    <div class="container mx-auto px-8 py-28">
        <div>
            <div class="mb-8">
                <h1 class="text-4xl font-extrabold uppercase font-merriweather mb-8 text-center">Data Center Team</h1>
            </div>
            <div class="flex flex-wrap justify-center relative z-10">
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-cover mb-4" src="/assets/leadership/female.png">
                        <div class="w-72">
                            <h2 class="title-font font-bold font-merriweather text-2xl">Feby</h2>
                            <h3 class="text-gray-600 mb-3">Head Of Data Center</h3>
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
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-cover mb-4" src="/assets/leadership/female.png">
                    <div class="w-72">
                        <h2 class="title-font font-extrabold font-merriweather text-2xl text-gray-900">Dita</h2>
                        <h3 class="text-gray-500 mb-3">Operator</h3>
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
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-cover mb-4" src="/assets/leadership/male.png">
                    <div class="w-72">
                        <h2 class="title-font font-extrabold font-merriweather text-2xl text-gray-900">Alfa</h2>
                        <h3 class="text-gray-500 mb-3">Data Analyst</h3>
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
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-cover mb-4" src="/assets/leadership/male.png">
                    <div class="w-72">
                        <h2 class="title-font font-extrabold font-merriweather text-2xl text-gray-900">Jul</h2>
                        <h3 class="text-gray-500 mb-3">Data Officer</h3>
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
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-cover mb-4" src="/assets/leadership/female.png">
                    <div class="w-72">
                        <h2 class="title-font font-extrabold font-merriweather text-2xl text-gray-900">Lina</h2>
                        <h3 class="text-gray-500 mb-3">Data Officer</h3>
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
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-cover mb-4" src="/assets/leadership/male.png">
                    <div class="w-72">
                        <h2 class="title-font font-extrabold font-merriweather text-2xl text-gray-900">Syam</h2>
                        <h3 class="text-gray-500 mb-3">Data Officer</h3>
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
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-cover mb-4" src="/assets/leadership/female.png">
                    <div class="w-72">
                        <h2 class="title-font font-extrabold font-merriweather text-2xl text-gray-900">Riya</h2>
                        <h3 class="text-gray-500 mb-3">Data Entry</h3>
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
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-cover mb-4" src="/assets/leadership/female.png">
                    <div class="w-72">
                        <h2 class="title-font font-extrabold font-merriweather text-2xl text-gray-900">Za</h2>
                        <h3 class="text-gray-500 mb-3">Data Entry</h3>
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
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-cover mb-4" src="/assets/leadership/female.png">
                    <div class="w-72">
                        <h2 class="title-font font-extrabold font-merriweather text-2xl text-gray-900">Nisa</h2>
                        <h3 class="text-gray-500 mb-3">Data Entry</h3>
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
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-cover mb-4" src="/assets/leadership/male.png">
                    <div class="w-72">
                        <h2 class="title-font font-extrabold font-merriweather text-2xl text-gray-900">Ali</h2>
                        <h3 class="text-gray-500 mb-3">Data Entry</h3>
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
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-cover mb-4" src="/assets/leadership/male.png">
                    <div class="w-72">
                        <h2 class="title-font font-extrabold font-merriweather text-2xl text-gray-900">Nino</h2>
                        <h3 class="text-gray-500 mb-3">Data Entry</h3>
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
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-cover mb-4" src="/assets/leadership/male.png">
                    <div class="w-72">
                        <h2 class="title-font font-extrabold font-merriweather text-2xl text-gray-900">Ifan</h2>
                        <h3 class="text-gray-500 mb-3">Data Entry</h3>
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


<section class="relative">
    <div class="absolute text-9xl inset-0 text-gray-200 w-full top-[27%] left-[10%] font-extrabold pointer-events-none z-0 no-copy">SUMMIT INSTITUTE FOR DEVELOPMENT</div>
    <div class="container mx-auto px-8 py-28">
        <div>
            <div class="mb-8">
                <h1 class="text-4xl font-extrabold uppercase font-merriweather mb-8 text-center">Data Officer Team</h1>
            </div>
            <div class="flex flex-wrap justify-center relative z-10">
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-cover mb-4" src="/assets/leadership/male.png">
                        <div class="w-72">
                            <h2 class="title-font font-bold font-merriweather text-2xl">Lalu Juliadi</h2>
                            <h3 class="text-gray-600 mb-3">Data Officer</h3>
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
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-cover mb-4" src="/assets/leadership/female.png">
                    <div class="w-72">
                        <h2 class="title-font font-extrabold font-merriweather text-2xl text-gray-900">Lina</h2>
                        <h3 class="text-gray-500 mb-3">Data Officer</h3>
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
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-full w-72 h-auto object-cover mb-4" src="/assets/leadership/male.png">
                    <div class="w-72">
                        <h2 class="title-font font-extrabold font-merriweather text-2xl text-gray-900">Syam</h2>
                        <h3 class="text-gray-500 mb-3">Data Officer</h3>
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

@endsection()