@extends('layouts.app')

@section('title', 'DOJO')
@section('content')

<section>
    <div class="container mx-auto px-8 py-28">
        <div>
            <div id="header" class="flex justify-between items-center">
                <div>
                    <div class="mb-8">
                        <span class="border-2 border-gray-900 px-12 py-2 rounded-lg mr-4">Programs</span>
                        <span>23 Mei 2025</span>
                    </div>
                    <h1 class="text-7xl font-medium font-merriweather">Genomics Science DOJO Tournament</h1>
                </div>
                <div>
                    <img src="/assets/programs/dojo.avif" class="w-100 h-60 object-cover" alt="">
                </div>
            </div>
            <hr class="my-28">
            <div class="px-32">
                <p class="mb-8">we are delighted to present you the exciting final event of Genomics Science Dojo Tournament. This event marks a significant milestone for the advancement of genomics and science in Indonesia, and we are honoured to support our Indonesian scientists.</p>
                <p class="mb-8">The tournament,  held at YARSI University Auditorium and Workshop (12th and 11th floor),  is also streamed online. Join us to watch the scientific discussion in Indonesia, presented live on 2 March 2024, starting at 9:00 WIB.</p>
                <p class="mb-8">There will be five separated rooms. Each will host different Arena and all of them can be viewed from the streaming windows below. Happy Watching!</p>
                <p class="mb-8">Here is the link to see the result <a href="https://brackethq.com/b/kasxb/">https://brackethq.com/b/kasxb/</a></p>

            </div>
        </div>
    </div>
</section>

@endsection