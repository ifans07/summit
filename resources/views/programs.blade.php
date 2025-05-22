@extends('layouts.app')

@section('title', 'Programs & Publications')
@section('content')

<section class="w-full bg-gray-700 relative">
    <div class="container h-[20rem] bg-gray-700 w-full flex items-center justify-center relative mx-auto">
        <div class="text-center z-20 w-full">
            <h1 class="font-extrabold text-6xl md:text-8xl text-white z-50">Programs & Publications</h1>
            <p class="text-gray-200">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa, dignissimos.</p>
        </div>
    </div>
</section>

<section class="bg-gray-200">
    <div class="container py-10 mx-auto flex items-center gap-8 h-full">
        {{-- <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl">From the blog</h1> --}}
        <div class="h-full bg-blue-900 p-2">
            <a href="" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-16 h-16">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>
        <div class="mt-8 lg:-mx-6 lg:flex lg:items-center w-full">
            <img class="object-cover w-full lg:mx-6 lg:w-2/5 rounded-xl h-72" src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"alt="">

            <div class="mt-6 lg:w-3/5 lg:mt-0 lg:mx-6">
                <p class="text-sm text-blue-500 uppercase">category</p>

                <a href="#" class="block mt-4 text-5xl font-bold text-gray-700 hover:underline">
                    Genomics and Science DOJO
                </a>

                <p class="mt-3 text-sm text-gray-500 md:text-xl pr-6">
                    This event marks a significant milestone for the advancement of genomics and science in Indonesia, and we are honoured to support our Indonesian scientists.
                </p>

                <a href="#" class="inline-block mt-2 text-blue-500 underline hover:text-blue-400">Learn more</a>

            </div>
        </div>

        {{-- <div class="flex flex-col justify-center items-center gap-8 mt-8 md:mt-16">
            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1515378960530-7c0da6231fb1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline">
                        How to use sticky note for problem solving
                    </a>
                    
                    <span class="text-sm text-gray-500">On: 20 October 2019</span>
                </div>
            </div>

            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline">
                        How to use sticky note for problem solving
                    </a>

                    <span class="text-sm text-gray-500">On: 20 October 2019</span>
                </div>
            </div>

            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1544654803-b69140b285a1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline">
                        Morning routine to boost your mood
                    </a>

                    <span class="text-sm text-gray-500">On: 25 November 2020</span>
                </div>
            </div>

            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1530099486328-e021101a494a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1547&q=80" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline">
                        All the features you want to know
                    </a>

                    <span class="text-sm text-gray-500">On: 30 September 2020</span>
                </div>
            </div>

            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1484&q=80" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline">
                        Minimal workspace for your inspirations
                    </a>

                    <span class="text-sm text-gray-500">On: 13 October 2019</span>
                </div>
            </div>

            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1624996379697-f01d168b1a52?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline">
                        What do you want to know about Blockchane
                    </a>
                    
                    <span class="text-sm text-gray-500">On: 20 October 2019</span>
                </div>
            </div>
        </div> --}}
    </div>
</section>

<section class="bg-blue-900">
    <div class="container py-10 mx-auto flex items-center gap-8 h-full">
        {{-- <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl">From the blog</h1> --}}
        <div class="mt-8 lg:-mx-6 lg:flex lg:items-center w-full">
            <div class="mt-6 lg:w-3/5 lg:mt-0 lg:mx-6 text-right">
                <p class="text-sm text-gray-300 uppercase">category</p>

                <a href="#" class="block mt-4 text-5xl font-bold text-gray-100 hover:underline">
                    Covneo and PregVax
                </a>

                <p class="mt-3 text-sm text-gray-200 md:text-xl pl-6">
                    SARS-CoV-2 in pregnant women is at risk of causing poor pregnancy outcomes, including low birth weight, miscarriage, stillbirth, increased perinatal and neonatal morbidity, admission to an intensive care unit for infants or a neonatal intensive care unit (NICU), and mortality was observed in newborns born to women with severe symptoms during pregnancy[1-4].
                </p>

                <a href="#" class="inline-block mt-2 text-white underline hover:text-gray-300">Learn more</a>

            </div>
            <img class="object-cover w-full lg:mx-6 lg:w-2/5 rounded-xl h-72" src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"alt="">
        </div>

        <div class="h-full bg-gray-300 p-2">
            <a href="" class="text-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-16 h-16">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
            </a>
        </div>
        {{-- <div class="flex flex-col justify-center items-center gap-8 mt-8 md:mt-16">
            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1515378960530-7c0da6231fb1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline">
                        How to use sticky note for problem solving
                    </a>
                    
                    <span class="text-sm text-gray-500">On: 20 October 2019</span>
                </div>
            </div>

            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline">
                        How to use sticky note for problem solving
                    </a>

                    <span class="text-sm text-gray-500">On: 20 October 2019</span>
                </div>
            </div>

            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1544654803-b69140b285a1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline">
                        Morning routine to boost your mood
                    </a>

                    <span class="text-sm text-gray-500">On: 25 November 2020</span>
                </div>
            </div>

            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1530099486328-e021101a494a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1547&q=80" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline">
                        All the features you want to know
                    </a>

                    <span class="text-sm text-gray-500">On: 30 September 2020</span>
                </div>
            </div>

            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1484&q=80" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline">
                        Minimal workspace for your inspirations
                    </a>

                    <span class="text-sm text-gray-500">On: 13 October 2019</span>
                </div>
            </div>

            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1624996379697-f01d168b1a52?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline">
                        What do you want to know about Blockchane
                    </a>
                    
                    <span class="text-sm text-gray-500">On: 20 October 2019</span>
                </div>
            </div>
        </div> --}}
    </div>
</section>

<section class="bg-gray-200">
    <div class="container py-10 mx-auto flex items-center gap-8 h-full">
        {{-- <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl">From the blog</h1> --}}
        <div class="h-full bg-blue-900 p-2">
            <a href="" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-16 h-16">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>
        <div class="mt-8 lg:-mx-6 lg:flex lg:items-center w-full">
            <img class="object-cover w-full lg:mx-6 lg:w-2/5 rounded-xl h-72" src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"alt="">

            <div class="mt-6 lg:w-3/5 lg:mt-0 lg:mx-6 ">
                <p class="text-sm text-blue-500 uppercase">category</p>

                <a href="#" class="block mt-4 text-5xl font-bold text-gray-700 hover:underline">
                    SUMMIT 10 Year (S10Y) Study
                </a>

                <p class="mt-3 text-sm text-gray-500 md:text-xl pr-6">
                    This study is a continuation of the Supplementation with Multiple Micronutrients Intervention Trial (SUMMIT), which was implemented by the Summit Institute of Development 10 years ago.
                </p>

                <a href="#" class="inline-block mt-2 text-blue-500 underline hover:text-blue-400">Learn more</a>

            </div>
        </div>

    </div>
</section>

<section class="bg-blue-900">
    <div class="container py-10 mx-auto flex items-center gap-8 h-full">
        {{-- <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl">From the blog</h1> --}}
        <div class="mt-8 lg:-mx-6 lg:flex lg:items-center w-full">
            <div class="mt-6 lg:w-3/5 lg:mt-0 lg:mx-6 text-right">
                <p class="text-sm text-gray-300 uppercase">category</p>

                <a href="#" class="block mt-4 text-5xl font-bold text-gray-100 hover:underline">
                    The Golden Generation Program
                </a>

                <p class="mt-3 text-sm text-gray-200 md:text-xl pl-6">
                    Summit Institute of Development (SID) has proposed a Golden Generation Program (GGP) to support optimal child development.
                </p>

                <a href="#" class="inline-block mt-2 text-white underline hover:text-gray-300">Learn more</a>

            </div>
            <img class="object-cover w-full lg:mx-6 lg:w-2/5 rounded-xl h-72" src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"alt="">
        </div>

        <div class="h-full bg-gray-300 p-2">
            <a href="" class="text-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-16 h-16">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
            </a>
        </div>
    </div>
</section>

@endsection