<header class="sticky top-0 z-50">
    <div class="py-1 flex justify-center lg:justify-end bg-white scroll-hidden md:px-6">
        <div class="relative lg:mt-0 lg:mx-4">
            <input type="text" class="w-48 py-2 pl-4 pr-10 text-gray-700 placeholder-gray-600 bg-white border-b border-gray-600 lg:w-56 lg:border-transparent focus:outline-none focus:border-gray-600" placeholder="Search">
            <span class="absolute inset-y-0 right-0 flex items-center pl-3">
                <svg class="w-4 h-4 text-gray-600" viewBox="0 0 24 24" fill="none">
                    <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </span>

        </div>

        {{-- <a href="#" class="flex items-center mx-4 text-gray-700 lg:mt-0">
            <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm pe-1 rounded-full hover:text-blue-600 md:me-0 focus:ring-4 focus:ring-gray-100 text-gray-700" type="button">
                <span class="sr-only">Open user menu</span>
                Select Languages
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
            </button>
                
            <!-- Dropdown menu -->
            <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                    <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Bahasa Indonesia</a>
                    </li>
                    <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Bahasa Inggris</a>
                    </li>
                </ul>
            </div>
        </a> --}}

        <div class="flex items-center md:order-2 space-x-1 md:space-x-0">
            <button type="button" data-dropdown-toggle="language-dropdown-menu" class="inline-flex items-center justify-center px-4 py-2 text-sm text-gray-900 rounded-lg cursor-pointer hover:bg-gray-100 font-poppins">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rounded-full me-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802" />
                </svg>
                English (US)
            </button>
            <!-- Dropdown -->
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-lg" id="language-dropdown-menu">
                <ul class="py-2 font-medium font-poppins" role="none">
                <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200" role="menuitem">
                    <div class="inline-flex items-center">
                        <svg aria-hidden="true" class="h-3.5 w-3.5 me-2" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us" viewBox="0 0 512 512"><g fill-rule="evenodd"><g stroke-width="1pt"><path fill="#bd3d44" d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/><path fill="#fff" d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/></g><path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)"/><path fill="#fff" d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z" transform="scale(3.9385)"/></g></svg>              
                        English (US)
                    </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200" role="menuitem">
                    <div class="inline-flex items-center">
                        <svg class="h-3.5 w-3.5 me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 480">
                            {{-- <g fill-rule="evenodd"> --}}
                                <path fill="#e70000" d="M0 0h640v240H0z"/>
                                <path fill="#fff" d="M0 240h640v240H0z"/>
                            {{-- </g> --}}
                        </svg>
                        Indonesia
                    </div>
                    </a>
                </li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="border border-gray-100">
    <nav x-data="{ isOpen: false }" class="bg-white nav-scroll relative">
        <div class="container px-6 py-5 mx-auto relative">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-between">
                    <a href="#" class="mx-auto ">
                        <img class="h-auto w-36" src="{{ asset('assets/Logo-SUmmit-FIX.png') }}" alt="">
                    </a>

                </div>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div x-cloak :class="[isOpen ? '-translate-x-0 opacity-100 ' : 'opacity-0 translate-x-full']" class="absolute top-0 h-screen lg:h-auto inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white/90 shadow-md lg:bg-transparent lg:dark:bg-transparent lg:shadow-none lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:w-auto lg:opacity-100 lg:translate-x-0 batas">
                    {{-- <div class="-mx-4 lg:flex lg:items-center text-center">
                        <a href="/" class="group relative block mx-4 text-gray-700 capitalize hover:text-blue-600 dark:hover:text-blue-500 font-medium p-1 overflow-hidden">
                            <div class="group-hover:block rounded-lg transition duration-200 absolute w-full h-[3px] bottom-0 transform {{ ($title == "Beranda") ? "-translate-x-[8%] font-bold text-blue-500" : "-translate-x-[108%]" }} group-hover:-translate-x-[8%] bg-blue-500"></div>
                            <div class="flex items-center justify-center">
                                Home
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-4 w-4 ml-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                            <div class="hidden group-hover:block">
                                <a href="" class="block">Programs</a>
                                <a href="" class="block">Publications</a>
                            </div>
                        </a>
                        <a href="{{ route('about') }}" class="group relative block mx-6 mt-4 text-gray-700 capitalize lg:mt-0 hover:text-blue-600">
                            <div class="group-hover:block group-hover:scale-x-150 rounded-lg transition duration-200 absolute w-full h-[3px] -bottom-1 {{ ($title == "About") ? "scale-x-150" : "scale-x-0" }} bg-blue-500"></div>
                            About
                        </a>
                        <a href="/programs-publications" class="group mx-6 mt-4 text-gray-700 capitalize lg:mt-0 hover:text-blue-600 dark:hover:text-blue-400" id="dropdownHoverButton">
                            <div class="group-hover:block group-hover:scale-x-125 rounded-lg transition duration-300 absolute w-full h-[3px] -bottom-1 {{ ($title == "Programs & Publications") ? "scale-x-125" : "scale-x-0" }} bg-blue-500"></div>
                            <div class="flex items-center justify-center">
                                Programs & Publications
                                
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-4 w-4 ml-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                            <div class="">
                                <a href="" class="block">Programs</a>
                                <a href="" class="block">Publications</a>
                            </div>
                        </a>
                        <a href="/news" class="group relative block mx-6 mt-4 text-gray-700 capitalize lg:mt-0 hover:text-blue-600 dark:hover:text-blue-400">
                            <div class="group-hover:block group-hover:scale-x-150 rounded-lg transition duration-200 absolute w-full h-[3px] -bottom-1 {{ ($title == "News") ? "scale-x-150" : "scale-x-0" }} bg-blue-500"></div>
                            News
                        </a>
                        <a href="/events" class="group relative block mx-6 mt-4 text-gray-700 capitalize lg:mt-0 hover:text-blue-600 dark:hover:text-blue-400">
                            <div class="group-hover:block group-hover:scale-x-150 rounded-lg transition duration-200 absolute w-full h-[3px] -bottom-1 {{ ($title == "Events") ? "scale-x-150" : "scale-x-0" }} bg-blue-500"></div>
                            Events
                        </a>
                        <a href="/contact" class="group relative block mx-6 mt-4 text-gray-700 capitalize lg:mt-0 hover:text-blue-600 dark:hover:text-blue-400">
                            <div class="group-hover:block group-hover:scale-x-150 rounded-lg transition duration-200 absolute w-full h-[3px] -bottom-1 {{ ($title == "Contact") ? "scale-x-150" : "scale-x-0" }} bg-blue-500"></div>
                            Contact
                        </a>
                        <a href="/careers" class="group relative block mx-6 mt-4 text-gray-700 capitalize lg:mt-0 hover:text-blue-600 dark:hover:text-blue-400">
                            <div class="group-hover:block group-hover:scale-x-150 rounded-lg transition duration-200 absolute w-full h-[3px] -bottom-1 {{ ($title == "Careers") ? "scale-x-150" : "scale-x-0" }} bg-blue-500"></div>
                            Careers
                        </a>
                        <a href="#" class="inline-block px-8 py-2 mt-4 md:px-8 md:py-1.5 border-2 border-blue-500 text-white rounded-lg md:hidden">
                            <div></div>
                            #NGO
                        </a>
                    </div> --}}
                    <div class="flex flex-col lg:flex-row justify-center h-auto gap-4 lg:gap-0 py-16 lg:py-0 relative">
                        <div class="flex lg:hidden absolute right-0 top-0">
                            <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="toggle menu">
                                <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                                </svg>
                        
                                <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="px-8">
                            <a href="/v1" class="font-poppins text-xl {{($title == "Beranda-v1")? "font-bold text-blue-900" : "font-medium text-gray-800 hover:text-[#10169f]"}}">Home</a>
                        </div>
                        <div class="group px-8">
                            <a href="#" class="font-poppins text-xl {{($title == "About")? "font-bold text-blue-900" : "font-medium text-gray-800 hover:text-[#10169f]"}}">
                                <div class="flex items-center">
                                    <span>About</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-4 w-4 ml-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </div>
                                <div class="hidden font-poppins text-lg py-2 group-hover:block md:block lg:hidden lg:absolute lg:bg-white lg:shadow-lg lg:rounded-lg lg:w-1/4 lg:px-2 transition duration-1000">
                                    <a href="/about/v0" class="block py-2 px-8 lg:px-2 hover:bg-gray-300 hover:text-gray-900 rounded-lg font-poppins">Our Story</a>
                                    <a href="/about/speciality" class="block py-2 px-8 lg:px-2 hover:bg-gray-300 hover:text-gray-900 rounded-lg font-poppins">Our Speciality</a>
                                    <a href="/about/leadership" class="block py-2 px-8 lg:px-2 hover:bg-gray-300 hover:text-gray-900 rounded-lg font-poppins">Leadership</a>
                                    <a href="/about/our-team" class="block py-2 px-8 lg:px-2 hover:bg-gray-300 hover:text-gray-900 rounded-lg font-poppins">Our Team</a>
                                </div>
                            </a>
                        </div>
                        <div class="group px-8">
                            <a href="#" class="relative font-poppins text-xl {{($title == "Programs & Publications")? "font-bold text-blue-900" : "font-medium text-gray-800 hover:text-[#10169f]"}}">
                                <div class="flex items-center">
                                    <span>Our Work</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-4 w-4 ml-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </div>
                                <div class="hidden font-poppins text-lg py-2 group-hover:block md:block lg:hidden lg:absolute lg:bg-white lg:shadow-lg lg:rounded-lg lg:w-1/4 lg:px-2 transition duration-1000">
                                    <a href="/programs-publications" class="block py-2 px-8 lg:px-2 hover:bg-gray-300 hover:text-gray-900 rounded-lg font-poppins">Programs</a>
                                    <a href="/publications" class="block py-2 px-8 lg:px-2 hover:bg-gray-300 hover:text-gray-900 rounded-lg font-poppins">Publications</a>
                                    <a href="/news" class="block py-2 px-8 lg:px-2 hover:bg-gray-300 hover:text-gray-900 rounded-lg font-poppins">News</a>
                                    <a href="/events" class="block py-2 px-8 lg:px-2 hover:bg-gray-300 hover:text-gray-900 rounded-lg font-poppins">Events</a>
                                    
                                </div>
                            </a>
                        </div>
                        
                        <div class="px-8">
                            <a href="/contact" class="font-poppins text-xl {{($title == "Contact")? "font-bold text-blue-900" : "font-medium text-gray-800 hover:text-[#10169f]"}}">Contact</a>
                        </div>
                        <div class="px-8">
                            <a href="/careers" class="font-poppins text-xl {{($title == "Careers")? "font-bold text-blue-900" : "font-medium text-gray-800 hover:text-[#10169f]"}}">Careers</a>
                        </div>
                        <div class="px-7">
                            <a href="" class="hidden md:hidden shadow-lg">
                                <svg class="w-24" viewBox="0 0 3 2" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="3" height="1" fill="#FF0000" />
                                    <rect y="1" width="3" height="1" fill="#FFFFFF" />
                                </svg>
                            </a>
                            <a href="https://www.ngosource.org/about-equivalency-determination-on-file-badge" target="_blank" class="flex lg:hidden text-center">
                                <img src="/assets/logo/ngosource.png" class="w-full" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="flex">
                    {{-- <a href="" class="shadow-lg">
                        <svg class="w-24" viewBox="0 0 3 2" xmlns="http://www.w3.org/2000/svg">
                            <rect width="3" height="1" fill="#FF0000" />
                            <rect y="1" width="3" height="1" fill="#FFFFFF" />
                        </svg>
                    </a> --}}
                    <a href="https://www.ngosource.org/about-equivalency-determination-on-file-badge" target="_blank" class="hidden lg:block">
                        <img src="/assets/logo/ngosource.png" class="w-36" alt="">
                    </a>
                    <!-- Mobile menu button -->
                    <div class="flex lg:hidden">
                        <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="toggle menu">
                            <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                            </svg>
                    
                            <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>