@extends('layouts.app')

@section('title', 'Contact')
@section('content')

{{-- <section class="w-full bg-gray-700 relative">
    <div class="container h-[20rem] bg-gray-700 w-full flex items-center justify-center relative mx-auto">
        <div class="text-center z-20">
            <h1 class="font-extrabold text-6xl md:text-9xl text-white z-50">Contact</h1>
            <p class="text-gray-200">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa, dignissimos.</p>
        </div>
    </div>
</section> --}}

<section class="relative bg-blue-900 md:h-[38rem]">
    <div class="container px-6 py-24 mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 h-auto">
            <div class="h-auto md:ml-28 mb-12">
                <div class="mb-8">
                    <h1 class="mt-2 text-2xl font-bold text-white md:text-6xl">Connect With Us</h1>
                </div>
                
                <div class="grid grid-cols-1 gap-12 mt-4 lg:grid-cols-2">
                    <div class="grid grid-cols-1 gap-12 md:grid-cols-1 w-[28rem]">
                        <div class="flex items-center gap-4">
                            <div>
                                <span class="inline-block p-3 text-blue-900 rounded-full bg-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                    </svg>
                                </span>
                            </div>
                            <div class="text-white">
                                <h2 class="text-base md:text-2xl font-medium text-white">Email</h2>
                                <p class="mt-2 text-sm">human-resource@sid-indonesia.org</p>
                            </div>
                        </div>
        
                        <div class="flex items-center gap-4">
                            <div>
                                <span class="inline-block p-3 text-blue-900 rounded-full bg-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>
                                </span>
                            </div>
                            
                            <div class="text-white">
                                <h2 class="text-base md:text-2xl font-medium">Office</h2>
                                <p class="mt-2 text-sm"><a href="https://maps.app.goo.gl/DyLmSNaYW2k33HDr8" target="_blank">Jl. Sultan Hasanuddin no. 137B</a></p>
                            </div>
                        </div>
        
                        <div class="flex items-center gap-4">
                            <div>
                                <span class="inline-block p-3 text-blue-900 rounded-full bg-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                    </svg>
                                </span>
                            </div>
                            
                            <div class="text-white">
                                <h2 class="text-base md:text-2xl font-medium">Phone</h2>
                                <p class="mt-2 text-sm">+62(370)-644347</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded-lg border-2 border-gray-300 h-auto">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.172255652105!2d116.12724737477512!3d-8.579430791465002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdc0a6c3a43905%3A0x5e1c833f1ff4023a!2sSummit%20Institute%20Of%20Development!5e0!3m2!1sid!2sid!4v1747531501884!5m2!1sid!2sid" class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>


{{-- <section>
    <div class="w-full h-[28rem]">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.172255652105!2d116.12724737477512!3d-8.579430791465002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdc0a6c3a43905%3A0x5e1c833f1ff4023a!2sSummit%20Institute%20Of%20Development!5e0!3m2!1sid!2sid!4v1747531501884!5m2!1sid!2sid" class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section> --}}

@endsection