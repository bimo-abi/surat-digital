<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Daftar Surat Saya</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                @if(session('success'))
                    <div class="mb-4 text-green-600">{{ session('success') }}</div>
                @endif

                <a href="{{ route('surat.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Tambah Surat</a>

                <table class="w-full mt-4 border">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border p-2">Jenis Surat</th>
                            <th class="border p-2">Keperluan</th>
                            <th class="border p-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($surats as $s)
                        <tr>
                            <td class="border p-2">{{ $s->jenisSurat->nama_jenis }}</td>
                            <td class="border p-2">{{ $s->keperluan }}</td>
                            <td class="border p-2 text-blue-600">{{ $s->status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>