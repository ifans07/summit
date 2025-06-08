@extends('layouts.app')

@section('title', 'Programs & Publications')
@section('content')

<div x-data="{ tab: 'active-programs' }">

    <section>
        <div class="container mx-auto px-8 py-28">
            <div class="flex flex-col lg:flex-row justify-center gap-8">
                <div class="bg-blue-900 md:order-2 lg:order-1 rounded-lg p-4 flex flex-col text-white">
                    <h1 class="text-white text-4xl uppercase font-extrabold mb-4 font-poppins">Programs</h1>
                    <ul class="text-left ml-4">
                        <li class="mb-4">
                            <a @click="tab = 'active-programs'" href="#" class="hover:underline transition duration-300 ease-in-out font-inter" :class="tab === 'active-programs' ? 'underline ml-2' : ''">Active Programs</a>
                        </li>
                        <li class="mb-4">
                            <a @click="tab = 'past-programs'" href="#" class="hover:underline transition duration-300 ease-in-out font-inter" :class="tab === 'past-programs' ? 'underline ml-2' : ''">Past Programs</a>
                        </li>
                        {{-- <li class="mb-4">
                            <a href="#" class="hover:underline transition duration-300 ease-in-out">Our Speciality</a>
                        </li> --}}
                    </ul>
                </div>
                <div class="md:order-1 lg:order-1">
                    <h1 class="text-4xl md:text-5xl lg:text-7xl font-medium font-poppins md:text-center lg:text-left">Together, we grow stronger families through health programs</h1>
                </div>
            </div>
        </div>
    </section>
    <hr class="border border-blue-900/50 mx-8">

    <div x-show="tab === 'active-programs'">
        <section class="bg-white">
            <div class="container py-10 px-8 mx-auto flex items-center gap-8 h-full">
                <div class="mt-8 lg:-mx-6 lg:flex lg:items-center w-full">
                    <img class="object-cover w-full lg:mx-6 lg:w-2/5 rounded-xl h-72" src="/assets/dokumentasi/4.jpg"alt="">

                    <div class="mt-6 lg:w-3/5 lg:mt-0 lg:mx-6">
                        <p class="text-sm text-blue-900 uppercase border-2 border-blue-900 inline-block px-4 py-1 rounded-lg">category</p>

                        <a href="/programs/dojo" class="block mt-4 text-4xl font-medium text-gray-700 hover:underline font-poppins">
                            Genomics and Science DOJO Tournament
                        </a>

                        <p class="mt-3 text-sm text-gray-500 md:text-lg pr-6 font-inter">
                            This event marks a significant milestone for the advancement of genomics and science in Indonesia, and we are honoured to support our Indonesian scientists.
                        </p>

                        <a href="#" class="inline-block mt-2 text-blue-500 underline hover:text-blue-400">Read more</a>

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
        <section class="bg-white">
            <div class="container py-10 px-8 mx-auto flex items-center gap-8 h-full">
                <div class="mt-8 lg:-mx-6 lg:flex lg:items-center w-full">
                    <img class="object-cover w-full lg:mx-6 lg:w-2/5 rounded-xl h-72" src="/assets/dokumentasi/14.jpg"alt="">

                    <div class="mt-6 lg:w-3/5 lg:mt-0 lg:mx-6 ">
                        <p class="text-sm text-blue-900 uppercase inline-block rounded-lg px-4 py-1 border-2 border-blue-900">category</p>

                        <a href="#" class="block mt-4 text-4xl font-medium text-gray-700 hover:underline font-poppins">
                            SUMMIT 10 Year (S10Y) Study
                        </a>

                        <p class="mt-3 text-sm text-gray-500 md:text-lg pr-6 font-inter">
                            This study is a continuation of the Supplementation with Multiple Micronutrients Intervention Trial (SUMMIT), which was implemented by the Summit Institute of Development 10 years ago.
                        </p>

                        <a href="#" class="inline-block mt-2 text-blue-500 underline hover:text-blue-400">Read more</a>

                    </div>
                </div>

            </div>
        </section>
        <section class="bg-white">
            <div class="container py-10 px-8 mx-auto flex items-center gap-8 h-full">
                <div class="mt-8 lg:-mx-6 lg:flex lg:items-center w-full">
                    <img class="object-cover w-full lg:mx-6 lg:w-2/5 rounded-xl h-72" src="/assets/dokumentasi/7.jpg"alt="">

                    <div class="mt-6 lg:w-3/5 lg:mt-0 lg:mx-6 ">
                        <p class="text-sm text-blue-900 uppercase inline-block rounded-lg px-4 py-1 border-2 border-blue-900">category</p>

                        <a href="#" class="block mt-4 text-4xl font-medium text-gray-700 hover:underline font-poppins">
                            Covneo and PregVax
                        </a>

                        <p class="mt-3 text-sm text-gray-500 md:text-lg pr-6 font-inter">
                            SARS-CoV-2 in pregnant women is at risk of causing poor pregnancy outcomes, including low birth weight, miscarriage, stillbirth, increased perinatal and neonatal morbidity, admission to an intensive care unit for infants or a neonatal intensive care unit (NICU), and mortality was observed in newborns born to women with severe symptoms during pregnancy[1-4].
                        </p>

                        <a href="#" class="inline-block mt-2 text-blue-500 underline hover:text-blue-400">Read more</a>

                    </div>
                </div>

            </div>
        </section>
        <section class="bg-white">
            <div class="container py-10 px-8 mx-auto flex items-center gap-8 h-full">
                <div class="mt-8 lg:-mx-6 lg:flex lg:items-center w-full">
                    <img class="object-cover w-full lg:mx-6 lg:w-2/5 rounded-xl h-72" src="/assets/dokumentasi/11.jpg"alt="">

                    <div class="mt-6 lg:w-3/5 lg:mt-0 lg:mx-6 ">
                        <p class="text-sm text-blue-500 uppercase inline-block rounded-lg px-4 py-1 border-2 border-blue-900">category</p>

                        <a href="#" class="block mt-4 text-4xl font-medium text-gray-700 hover:underline font-poppins">
                            The Golden Generation Program
                        </a>

                        <p class="mt-3 text-sm text-gray-500 md:text-lg pr-6 font-inter">
                            Summit Institute of Development (SID) has proposed a Golden Generation Program (GGP) to support optimal child development.
                        </p>

                        <a href="#" class="inline-block mt-2 text-blue-500 underline hover:text-blue-400">Read more</a>

                    </div>
                </div>

            </div>
        </section>
    </div>
    <div x-show="tab === 'past-programs'">
        <section class="bg-blue-900">
            <div class="container py-10 px-8 mx-auto flex items-center gap-8 h-full">
                <div class="mt-8 lg:-mx-6 lg:flex lg:items-center w-full">
                    <div class="mt-6 lg:w-3/5 lg:mt-0 lg:mx-6 text-right">
                        <p class="text-sm text-gray-300 uppercase">category</p>

                        <a href="#" class="block mt-4 text-4xl font-medium text-gray-100 hover:underline font-poppins">
                            Covneo and PregVax
                        </a>

                        <p class="mt-3 text-sm text-gray-200 md:text-lg pl-6 font-inter">
                            SARS-CoV-2 in pregnant women is at risk of causing poor pregnancy outcomes, including low birth weight, miscarriage, stillbirth, increased perinatal and neonatal morbidity, admission to an intensive care unit for infants or a neonatal intensive care unit (NICU), and mortality was observed in newborns born to women with severe symptoms during pregnancy[1-4].
                        </p>

                        <a href="#" class="inline-block mt-2 text-white underline hover:text-gray-300">Read more</a>

                    </div>
                    <img class="object-cover w-full lg:mx-6 lg:w-2/5 rounded-xl h-72" src="/assets/dokumentasi/11.jpg"alt="">
                </div>

            </div>
        </section>
        <section class="bg-blue-900">
            <div class="container py-10 px-8 mx-auto flex items-center gap-8 h-full">
                <div class="mt-8 lg:-mx-6 lg:flex lg:items-center w-full">
                    <div class="mt-6 lg:w-3/5 lg:mt-0 lg:mx-6 text-right">
                        <p class="text-sm text-gray-300 uppercase">category</p>

                        <a href="#" class="block mt-4 text-4xl font-medium text-gray-100 hover:underline font-poppins">
                            The Golden Generation Program
                        </a>

                        <p class="mt-3 text-sm text-gray-200 md:text-lg pl-6 font-inter">
                            Summit Institute of Development (SID) has proposed a Golden Generation Program (GGP) to support optimal child development.
                        </p>

                        <a href="#" class="inline-block mt-2 text-white underline hover:text-gray-300">Read more</a>

                    </div>
                    <img class="object-cover w-full lg:mx-6 lg:w-2/5 rounded-xl h-72" src="/assets/dokumentasi/16.jpg"alt="">
                </div>

            </div>
        </section>
    </div>

</div>


@endsection