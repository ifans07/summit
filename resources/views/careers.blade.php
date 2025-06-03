@extends('layouts.app')

@section('title', 'Careers')
@section('content')

{{-- <section class="w-full bg-gray-700 relative">
    <div class="container h-[20rem] bg-gray-700 w-full flex items-center justify-center relative mx-auto">
        <div class="text-center z-20">
            <h1 class="font-extrabold text-6xl md:text-9xl text-white z-50">Careers</h1>
            <p class="text-gray-200">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa, dignissimos.</p>
        </div>
    </div>
</section> --}}

<section>
    <div class="container mx-auto px-8 py-8">
        <div>
            <div class="w-1/2 mb-24">
                <span class="rounded-lg border-2 border-black px-2 py-1 inline-block mb-4">We're Hiring</span>
                <h1 class="text-6xl font-medium font-poppins mb-4">Be Part Of Our Mission</h1>
                <p class="text-xl">We're looking for passionate people to join us on our mission. We value flat hierarchies, clear communication, and full ownership and responsiblity</p>
            </div>
            <div class="mb-12">
                <ul class="flex gap-2 flex-nowrap">
                    <li>
                        <a href="#" class="rounded-lg border-2 border-black py-1 px-2 bg-black text-white">View all</a>
                    </li>
                    <li>
                        <a href="" class="rounded-lg border-2 border-black py-1 px-2">Development</a>
                    </li>
                    <li>
                        <a href="" class="rounded-lg border-2 border-black py-1 px-2">Design</a>
                    </li>
                    <li>
                        <a href="" class="rounded-lg border-2 border-black py-1 px-2">Marketing</a>
                    </li>
                    <li>
                        <a href="" class="rounded-lg border-2 border-black py-1 px-2">Data Entry</a>
                    </li>
                    <li>
                        <a href="" class="rounded-lg border-2 border-black py-1 px-2">Customer Service</a>
                    </li>
                    <li>
                        <a href="" class="rounded-lg border-2 border-black py-1 px-2">Operations</a>
                    </li>
                    <li>
                        <a href="" class="rounded-lg border-2 border-black py-1 px-2">Finance</a>
                    </li>
                    <li>
                        <a href="" class="rounded-lg border-2 border-black py-1 px-2">Management</a>
                    </li>
                    <li>
                        <a href="" class="rounded-lg border-2 border-black py-1 px-2">Human Resource</a>
                    </li>
                </ul>
            </div>
            <div>
                <div class="flex justify-between border-t-2 border-b-2 border-gray-300 py-6">
                    <div>
                        <h1 class="text-2xl font-medium mb-1">Engineering Manager</h1>
                        <p>We're looking for an experienced engineering manager to join our team</p>
                        <div class="mt-4 flex gap-2">
                            <span class="rounded-lg px-2 py-1 border-2 border-black">remote</span>
                            <span class="rounded-lg px-2 py-1 border-2 border-black">Full time</span>
                        </div>
                    </div>
                    <div>
                        <a href="#">
                            <h1 class="font-medium text-xl flex items-center">
                                Apply
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 ml-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>
                            </h1>
                        </a>
                    </div>
                </div>
                <div class="flex justify-between border-t-2 border-b-2 border-gray-300 py-6">
                    <div>
                        <h1 class="text-2xl font-medium mb-1">Engineering Manager</h1>
                        <p>We're looking for an experienced engineering manager to join our team</p>
                        <div class="mt-4 flex gap-2">
                            <span class="rounded-lg px-2 py-1 border-2 border-black">remote</span>
                            <span class="rounded-lg px-2 py-1 border-2 border-black">Full time</span>
                        </div>
                    </div>
                    <div>
                        <a href="#">
                            <h1 class="font-medium text-xl flex items-center">
                                Apply
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 ml-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>
                            </h1>
                        </a>
                    </div>
                </div>
            </div>
            <div class="py-28">
                <div class="flex flex-col items-center justify-center">
                    <h1 class="text-2xl font-medium">Untitled truly values work-life balance. We work hard and deliver, but at the end of the day you can switch off.</h1>
                    <img src="/assets/leadership/male.png" class="w-28 h-28" alt="">
                    <div class="text-center">
                        <p class="font-medium text-base">Ifan Sutiono</p>
                        <span>Web Developer, Untitled</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection