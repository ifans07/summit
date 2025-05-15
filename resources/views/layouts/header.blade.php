<header class="sticky top-0 z-50">
    <div class="py-1 flex justify-end bg-white scroll-hidden">
        <div class="relative lg:mt-0 lg:mx-4">
            <input type="text" class="w-48 py-1 pl-4 pr-10 text-gray-700 placeholder-gray-600 bg-white border-b border-gray-600 lg:w-56 lg:border-transparent focus:outline-none focus:border-gray-600" placeholder="Search">
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
            <button type="button" data-dropdown-toggle="language-dropdown-menu" class="inline-flex items-center justify-center px-4 py-2 text-sm text-gray-900 rounded-lg cursor-pointer hover:bg-gray-100">
                <svg class="w-5 h-5 rounded-full me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3900 3900"><path fill="#b22234" d="M0 0h7410v3900H0z"/><path d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0" stroke="#fff" stroke-width="300"/><path fill="#3c3b6e" d="M0 0h2964v2100H0z"/><g fill="#fff"><g id="d"><g id="c"><g id="e"><g id="b"><path id="a" d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z"/><use xlink:href="#a" y="420"/><use xlink:href="#a" y="840"/><use xlink:href="#a" y="1260"/></g><use xlink:href="#a" y="1680"/></g><use xlink:href="#b" x="247" y="210"/></g><use xlink:href="#c" x="494"/></g><use xlink:href="#d" x="988"/><use xlink:href="#c" x="1976"/><use xlink:href="#e" x="2470"/></g></svg>
                English (US)
            </button>
            <!-- Dropdown -->
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg dark:bg-gray-700" id="language-dropdown-menu">
                <ul class="py-2 font-medium" role="none">
                <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                    <div class="inline-flex items-center">
                        <svg aria-hidden="true" class="h-3.5 w-3.5 me-2" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us" viewBox="0 0 512 512"><g fill-rule="evenodd"><g stroke-width="1pt"><path fill="#bd3d44" d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/><path fill="#fff" d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/></g><path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)"/><path fill="#fff" d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z" transform="scale(3.9385)"/></g></svg>              
                        English (US)
                    </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
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
    <hr class="border border-gray-200">
    <nav x-data="{ isOpen: false }" class="bg-white shadow nav-scroll relative">
        <div class="container px-6 py-5 mx-auto relative">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-between">
                    <a href="#" class="mx-auto ">
                        <img class="h-auto w-15" src="{{ asset('assets/Logo-SUmmit-FIX.png') }}" alt="">
                    </a>

                </div>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div x-cloak :class="[isOpen ? '-translate-x-0 opacity-100 ' : 'opacity-0 translate-x-full']" class="absolute h-auto inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white shadow-md lg:bg-transparent lg:dark:bg-transparent lg:shadow-none lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:w-auto lg:opacity-100 lg:translate-x-0 batas">
                    <div class="-mx-4 lg:flex lg:items-center text-center">
                        <a href="/" class="group relative block mx-4 text-gray-700 capitalize hover:text-blue-600 dark:hover:text-blue-400">
                            <div class="group-hover:block group-hover:scale-x-150 rounded-lg transition duration-200 absolute w-full h-[3px] -bottom-1 {{ ($title == "Beranda") ? "scale-x-150" : "scale-x-0" }} bg-blue-500"></div>
                            Home
                        </a>
                        <a href="{{ route('about') }}" class="group relative block mx-4 mt-4 text-gray-700 capitalize lg:mt-0 hover:text-blue-600">
                            <div class="group-hover:block group-hover:scale-x-150 rounded-lg transition duration-200 absolute w-full h-[3px] -bottom-1 {{ ($title == "About") ? "scale-x-150" : "scale-x-0" }} bg-blue-500"></div>
                            About
                        </a>
                        <a href="#" class="group relative block mx-4 mt-4 text-gray-700 capitalize lg:mt-0 hover:text-blue-600 dark:hover:text-blue-400">
                            <div class="group-hover:block group-hover:scale-x-150 rounded-lg transition duration-200 absolute w-full h-[3px] -bottom-1 scale-x-0 bg-blue-500"></div>
                            News
                        </a>
                        <a href="#" class="group relative block mx-4 mt-4 text-gray-700 capitalize lg:mt-0 hover:text-blue-600 dark:hover:text-blue-400">
                            <div class="group-hover:block group-hover:scale-x-150 rounded-lg transition duration-200 absolute w-full h-[3px] -bottom-1 scale-x-0 bg-blue-500"></div>
                            Publications
                        </a>
                        <a href="#" class="group relative block mx-4 mt-4 text-gray-700 capitalize lg:mt-0 hover:text-blue-600 dark:hover:text-blue-400">
                            <div class="group-hover:block group-hover:scale-x-150 rounded-lg transition duration-200 absolute w-full h-[3px] -bottom-1 scale-x-0 bg-blue-500"></div>
                            Programs
                        </a>
                        <a href="#" class="group relative block mx-4 mt-4 text-gray-700 capitalize lg:mt-0 hover:text-blue-600 dark:hover:text-blue-400">
                            <div class="group-hover:block group-hover:scale-x-150 rounded-lg transition duration-200 absolute w-full h-[3px] -bottom-1 scale-x-0 bg-blue-500"></div>
                            Events
                        </a>
                        <a href="#" class="group relative block mx-4 mt-4 text-gray-700 capitalize lg:mt-0 hover:text-blue-600 dark:hover:text-blue-400">
                            <div class="group-hover:block group-hover:scale-x-150 rounded-lg transition duration-200 absolute w-full h-[3px] -bottom-1 scale-x-0 bg-blue-500"></div>
                            Contact
                        </a>
                        <a href="#" class="group relative block mx-4 mt-4 text-gray-700 capitalize lg:mt-0 hover:text-blue-600 dark:hover:text-blue-400">
                            <div class="group-hover:block group-hover:scale-x-150 rounded-lg transition duration-200 absolute w-full h-[3px] -bottom-1 scale-x-0 bg-blue-500"></div>
                            Careers
                        </a>
                        <a href="#" class="inline-block px-8 py-2 mt-4 md:px-8 md:py-1.5 bg-blue-600 text-white rounded-lg md:hidden">#NGO</a>
                    </div>
                </div>
                <div class="flex">
                    <button class="px-8 py-2 md:px-8 md:py-1.5 bg-blue-600 text-white rounded-lg mr-2 hidden md:block">#NGO</button>
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

    {{-- <div class="w-full bg-center bg-cover h-[34rem] md:h-[38rem] relative overflow-hidden test-video">
        <!-- <div class="absolute -z-10"> -->
            <video src="{{ asset('assets/file.mp4') }}" autoplay loop muted playsinline></video>
        <!-- </div> -->
        <div class="flex items-center justify-center w-full h-full bg-gray-900/50">
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
    </div> --}}
</header>