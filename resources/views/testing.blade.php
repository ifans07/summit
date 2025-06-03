@extends('layouts.app')
@section('title', 'Testing')
@section('content')

<section>
    <div class="container mx-auto px-8 py-28">
        <div x-data="{ tab: 'profil' }" class="max-w-2xl mx-auto p-6 space-y-4">

            <!-- Indikator di tempat bebas -->
            <div class="text-sm text-center font-medium text-blue-700">
                <template x-if="tab === 'profil'">📄 Melihat: <strong>Profil</strong></template>
                <template x-if="tab === 'pengaturan'">⚙️ Melihat: <strong>Pengaturan</strong></template>
                <template x-if="tab === 'kontak'">📬 Melihat: <strong>Kontak</strong></template>
            </div>

            <!-- Tombol -->
            <div class="flex gap-4 justify-center">
                <button @click="tab = 'profil'" class="px-4 py-2 rounded" :class="tab === 'profil' ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-800'">Profil</button>
                <button @click="tab = 'pengaturan'" class="px-4 py-2 rounded" :class="tab === 'pengaturan' ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-800'">Pengaturan</button>
                <button @click="tab = 'kontak'" class="px-4 py-2 rounded" :class="tab === 'kontak' ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-800'">Kontak</button>
            </div>

            <!-- Konten -->
            <div class="bg-gray-100 p-6 rounded shadow">
                <div x-show="tab === 'profil'">
                <h2 class="text-xl font-bold mb-2">Profil</h2>
                <p>Ini adalah informasi profil pengguna.</p>
                </div>
                <div x-show="tab === 'pengaturan'">
                <h2 class="text-xl font-bold mb-2">Pengaturan</h2>
                <p>Di sini kamu bisa ubah preferensi akun.</p>
                </div>
                <div x-show="tab === 'kontak'">
                <h2 class="text-xl font-bold mb-2">Kontak</h2>
                <p>Hubungi kami melalui email di contact@domain.com.</p>
                </div>
            </div>

            </div>
    </div>
</section>

@endsection