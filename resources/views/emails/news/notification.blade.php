{{-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}

@component('mail::message')
# {{ $news->title }}

{{ $news->excerpt }}

@component('mail::button', ['url' => route('news')])
Read More
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent


