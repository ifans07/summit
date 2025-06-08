@extends('layouts.app')

@section('title', 'Events')
@section('content')

<section class="w-full bg-gray-700 relative">
    <div class="container h-[20rem] bg-gray-700 w-full flex items-center justify-center relative mx-auto">
        <div class="text-center z-20">
            <h1 class="font-extrabold text-6xl md:text-9xl text-white z-50 font-poppins">Events</h1>
            {{-- <p class="text-gray-200">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa, dignissimos.</p> --}}
        </div>
    </div>
</section>


<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900 font-poppins">Our Documentation Activity</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base font-inter">Every activity we hold is a step toward a healthier future for mothers and children. Explore our event highlights — from grassroots programs to national forums — that showcase our commitment to human development.</p>
        </div>
        <div class="flex flex-wrap -m-4">
            <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative rounded-4xl">
                <img alt="gallery" class="absolute inset-0 rounded-4xl w-full h-full object-cover object-center" src="/assets/dokumentasi/1.jpg">
                <div class="px-8 py-10 relative z-10 w-full border-4 rounded-4xl border-gray-200 bg-white opacity-0 hover:opacity-100">
                    <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
                    <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                </div>
                </div>
            </div>
            <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative rounded-4xl">
                <img alt="gallery" class="absolute inset-0 rounded-4xl w-full h-full object-cover object-center" src="/assets/dokumentasi/2.jpg">
                <div class="px-8 py-10 relative z-10 w-full rounded-4xl border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                    <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
                    <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                </div>
                </div>
            </div>
            <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative rounded-4xl">
                <img alt="gallery" class="absolute inset-0 rounded-4xl w-full h-full object-cover object-center" src="/assets/dokumentasi/4.jpg">
                <div class="px-8 py-10 relative z-10 w-full rounded-4xl border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                    <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The 400 Blows</h1>
                    <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                </div>
                </div>
            </div>
            <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative rounded-4xl">
                <img alt="gallery" class="absolute inset-0 rounded-4xl w-full h-full object-cover object-center" src="/assets/galery/11-12174a_8ec3416906f741498a5761e4c1378d10~mv2.jpg">
                <div class="px-8 py-10 relative z-10 w-full rounded-4xl border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                    <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Neptune</h1>
                    <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                </div>
                </div>
            </div>
            <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative rounded-4xl">
                <img alt="gallery" class="absolute inset-0 rounded-4xl w-full h-full object-cover object-center" src="/assets/galery/12174a_953a231c58e5480f92ac5afc465538fd~mv2.jpg">
                <div class="px-8 py-10 relative z-10 w-full rounded-4xl border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                    <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Holden Caulfield</h1>
                    <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                </div>
                </div>
            </div>
            <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative rounded-4xl">
                <img alt="gallery" class="absolute inset-0 rounded-4xl w-full h-full object-cover object-center" src="/assets/galery/23-12174a_87bc91aa6f074aa3b180b0b8457f499f~mv2.jpg">
                <div class="px-8 py-10 relative z-10 w-full rounded-4xl border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                    <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Alper Kamu</h1>
                    <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                </div>
                </div>
            </div>
            <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative rounded-4xl">
                <img alt="gallery" class="absolute inset-0 rounded-4xl w-full h-full object-cover object-center" src="/assets/dokumentasi/12.jpg">
                <div class="px-8 py-10 relative z-10 w-full rounded-4xl border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                    <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
                    <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                </div>
                </div>
            </div>
            <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative rounded-4xl">
                <img alt="gallery" class="absolute inset-0 rounded-4xl w-full h-full object-cover object-center" src="/assets/dokumentasi/17.jpg">
                <div class="px-8 py-10 relative z-10 w-full rounded-4xl border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                    <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
                    <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                </div>
                </div>
            </div>
            <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative rounded-4xl">
                <img alt="gallery" class="absolute inset-0 rounded-4xl w-full h-full object-cover object-center" src="/assets/dokumentasi/9.jpg">
                <div class="px-8 py-10 relative z-10 w-full rounded-4xl border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                    <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
                    <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection