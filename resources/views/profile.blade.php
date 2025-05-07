@extends("layouts.app")

@section("content")
<div class="max-w-xl mx-auto pt-10 p-6">
    <h2 style="color: #0cbd66" class="text-2xl font-bold text-center mb-6">Profil Pengguna</h2>

    <div class="space-y-4">
        <div>
            <label style="color: #0cbd66" class="block mb-1">Nama</label>
            <input type="text" value="{{ $profile['nama'] }}" readonly style="background-color: #EEEEEE" class="w-full border border-[#555555] p-2 rounded cursor-not-allowed">
        </div>
        <div>
            <label style="color: #0cbd66" class="block mb-1">Username</label>
            <input type="text" value="{{ $profile['username'] }}" readonly style="background-color: #EEEEEE" class="w-full border border-[#555555] p-2 rounded cursor-not-allowed">
        </div>
        <div>
            <label style="color: #0cbd66" class="block mb-1">Email</label>
            <input type="text" value="{{ $profile['email'] }}" readonly style="background-color: #EEEEEE" class="w-full border border-[#555555] p-2 rounded cursor-not-allowed">
        </div>
        <div>
            <label style="color: #0cbd66" class="block mb-1">Tanggal Lahir</label>
            <input type="text" value="{{ $profile['tanggal_lahir'] }}" readonly style="background-color: #EEEEEE" class="w-full border border-[#555555] p-2 rounded cursor-not-allowed">
        </div>
        <div>
            <label style="color: #0cbd66" class="block mb-1">Jenis Kelamin</label>
            <input type="text" value="{{ $profile['gender'] }}" readonly style="background-color: #EEEEEE" class="w-full border border-[#555555] p-2 rounded cursor-not-allowed">
        </div>
        <div>
            <label style="color: #0cbd66" class="block mb-1">Biodata</label>
            <textarea readonly style="background-color: #EEEEEE" class="w-full border border-[#555555] p-2 rounded cursor-not-allowed" rows="4">{{ $profile['biodata'] }}</textarea>
        </div>
    </div>
</div>
@endsection
