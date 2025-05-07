@extends("layouts.app")

@section("content")
<img src="{{ asset('images/games/banner.jpeg') }}" alt="Banner" class="w-full">

<div class="max-w-4xl mx-auto pt-5 p-6 text-center">
    <h1 style="color: #0cbd66" class="text-2xl font-bold">Selamat datang, {{ $username }}!</h1>
</div>

<h1 style="color: #0cbd66" class="text-2xl text-center font-bold mt-5">Jelajahi Berbagai Macam Judul Baru dengan PlayLog</h1>
<div class="px-4 md:px-20 pt-5 pb-5">
    <div class="flex flex-wrap justify-between gap-6">
        <div class="flex-1 min-w-[280px] bg-white p-6 rounded shadow-md">
            <h2 style="color: #0cbd66" class="text-xl font-bold mb-2">Eksplorasi Game Favoritmu</h2>
            <p style="color: #333333">Temukan game terbaru dan terpopuler yang sesuai dengan seleramu.</p>
        </div>

        <div class="flex-1 min-w-[280px] bg-white p-6 rounded shadow-md">
            <h2 style="color: #0cbd66" class="text-xl font-bold mb-2">Detail Lengkap Game</h2>
            <p style="color: #333333">Lihat info penting sebelum kamu mulai bermain.</p>
        </div>
    </div>
</div>
<div class="px-4 md:px-20 pt-5 pb-10">
    <div class="flex flex-wrap justify-between gap-6">
        <div class="flex-1 min-w-[280px] bg-white p-6 rounded shadow-md">
            <h2 style="color: #0cbd66" class="text-xl font-bold mb-2">Cek Rating & Review</h2>
            <p style="color: #333333">Lihat penilaian gamer lain sebelum kamu memilih game favoritmu.</p>
        </div>

        <div class="flex-1 min-w-[280px] bg-white p-6 rounded shadow-md">
            <h2 style="color: #0cbd66" class="text-xl font-bold mb-2">Rekomendasi Cerdas</h2>
            <p style="color: #333333">Dapatkan rekomendasi game berdasarkan preferensi dan riwayat permainanmu.</p>
        </div>
    </div>
</div>
@endsection
