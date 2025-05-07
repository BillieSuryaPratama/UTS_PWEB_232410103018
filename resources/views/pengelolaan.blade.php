@extends("layouts.app")

@section("content")
    <h1 style="color: #0cbd66;" class="text-3xl font-bold text-center pb-6 pt-4">Recommended Games in 2020</h1>

    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full table-auto border-collapse">
            <thead style="background-color: #0cbd66; color: #333333;">
                <tr>
                    <th class="px-4 py-2 text-left">Nama Game</th>
                    <th class="px-4 py-2 text-left">Developer</th>
                    <th class="px-4 py-2 text-left">Publisher</th>
                    <th class="px-4 py-2 text-left">Tanggal Rilis</th>
                    <th class="px-4 py-2 text-left">Platform</th>
                    <th class="px-4 py-2 text-left">Rating</th>
                </tr>
            </thead>
            <tbody style="color: #333333;">
                @foreach($games as $game)
                    <tr class="border-b hover:bg-[#bbf2d7]">
                        <td class="px-4 py-2">{{ $game['nama_game'] }}</td>
                        <td class="px-4 py-2">{{ $game['developer'] }}</td>
                        <td class="px-4 py-2">{{ $game['publisher'] }}</td>
                        <td class="px-4 py-2">{{ $game['tanggal_rilis'] }}</td>
                        <td class="px-4 py-2">{{ $game['platform'] }}</td>
                        <td class="px-4 py-2">{{ $game['rating'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
