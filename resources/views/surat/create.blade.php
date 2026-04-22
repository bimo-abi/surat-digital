<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Ajukan Surat Baru</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('surat.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Jenis Surat</label>
                        <select name="jenis_surat_id" class="w-full border-gray-300 rounded-md shadow-sm">
                            @foreach($jenisSurats as $jenis)
                                <option value="{{ $jenis->id }}">{{ $jenis->nama_jenis }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Keperluan</label>
                        <textarea name="keperluan" class="w-full border-gray-300 rounded-md shadow-sm" rows="4" placeholder="Contoh: Mengajukan surat izin karena sakit..."></textarea>
                    </div>

                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Kirim Pengajuan
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>