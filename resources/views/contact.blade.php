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

<section class="relative bg-blue-900 lg:h-[40rem]">
    <div class="container px-6 py-24 mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 h-auto">
            <div class="h-auto md:ml-28 mb-12">
                <div class="mb-8">
                    <h1 class="mt-2 text-2xl font-bold text-white md:text-6xl font-poppins">Connect With Us</h1>
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
                                <h2 class="text-base md:text-2xl font-medium text-white font-poppins">Email</h2>
                                <p class="mt-2 text-sm font-inter">secretariat@sid-indonesia.org</p>
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
                                <h2 class="text-base md:text-2xl font-medium font-poppins">Office</h2>
                                <p class="mt-2 text-sm font-inter" id="office"><a href="https://maps.app.goo.gl/DyLmSNaYW2k33HDr8" target="_blank">Jl. Sultan Hasanuddin No.137B, Lingkungan Karang Jero, Karang Taliwang, Kec. Cakranegara, Kota Mataram, Nusa Tenggara Bar. 83238</a></p>
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
                                <h2 class="text-base md:text-2xl font-medium font-poppins">Phone</h2>
                                <p class="mt-2 text-sm font-inter">+62 822-6614-9130</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-auto" x-data="{ tab: 'lombok' }">
                <div class="mb-4">
                    <ul class="text-white font-medium">
                        <li @click="tab = 'lombok'" class="hover:border-b-4 border-white inline-block px-3" :class="tab === 'lombok' ? 'border-b-4 border-white' : ''" id="lombok">Lombok</li>
                        <li @click="tab = 'garut'" class="hover:border-b-4 border-white inline-block px-3" :class="tab === 'garut' ? 'border-b-4 border-white' : ''" id="garut">Garut</li>
                        <li @click="tab = 'jakarta'" class="hover:border-b-4 border-white inline-block px-3" :class="tab === 'jakarta' ? 'border-b-4 border-white' : ''" id="jakarta">Jakarta</li>
                    </ul>
                </div>
                <div x-show="tab === 'lombok'" class="rounded-lg border-2 border-gray-300 md:h-[20rem] lg:h-full">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.172255652105!2d116.12724737477512!3d-8.579430791465002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdc0a6c3a43905%3A0x5e1c833f1ff4023a!2sSummit%20Institute%20Of%20Development!5e0!3m2!1sid!2sid!4v1747531501884!5m2!1sid!2sid" class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div x-show="tab === 'garut'" class="rounded-lg border-2 border-gray-300 md:h-[20rem] lg:h-full">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15842.811511890337!2d107.6037426724032!3d-6.926075536669526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6272ac519cd%3A0xab0b37ae6219dd22!2sKantor%20Summit!5e0!3m2!1sid!2sid!4v1749376466602!5m2!1sid!2sid" class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div x-show="tab === 'jakarta'" class="rounded-lg border-2 border-gray-300 md:h-[20rem] lg:h-full">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15866.072191355419!2d106.82785724381596!3d-6.195168900678889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f43e35e53099%3A0x3e389ed39c2f9bb4!2sKec.%20Menteng%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1749376542891!5m2!1sid!2sid" class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- <section>
    <div class="w-full h-[28rem]">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.172255652105!2d116.12724737477512!3d-8.579430791465002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdc0a6c3a43905%3A0x5e1c833f1ff4023a!2sSummit%20Institute%20Of%20Development!5e0!3m2!1sid!2sid!4v1747531501884!5m2!1sid!2sid" class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section> --}}

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            let lombok = document.getElementById('lombok')
            let garut = document.getElementById('garut')
            let jakarta = document.getElementById('jakarta')
            let office = document.getElementById('office')
        
            lombok.addEventListener('click', function(){
                office.innerHTML = `
                    <a href="https://maps.app.goo.gl/DyLmSNaYW2k33HDr8" target="_blank">Jl. Sultan Hasanuddin No.137B, Lingkungan Karang Jero, Karang Taliwang, Kec. Cakranegara, Kota Mataram, Nusa Tenggara Bar. 83238</a>
                `
            })
        
            garut.addEventListener('click', function(){
                office.innerHTML = `
                    <a href="https://maps.app.goo.gl/osSeNguXovfHFWwR7" target="_blank">Jl. Otto Iskandar Dinata No.347, Karanganyar, Kec. Astanaanyar, Kota Bandung, Jawa Barat 40241</a>
                `
            })
        
            jakarta.addEventListener('click', function(){
                office.innerHTML = `
                    <a href="https://maps.app.goo.gl/AVQrgpicpQktzEBS7" target="_blank">Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta</a>
                `
            })
        })
    </script>

@endsection