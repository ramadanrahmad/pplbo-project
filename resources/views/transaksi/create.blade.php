@extends('layout')

@section('content')
<form action="{{ route('transaksi.store') }}" method="POST" class="space-y-4">
    @csrf
    <select name="kategori_id" class="w-full border p-2 rounded" required>
        <option value="">Pilih Kategori</option>
        @foreach($kategoris as $kategori)
            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
        @endforeach
    </select>

    <select name="tipe" class="w-full border p-2 rounded" required>
        <option value="pemasukan">Pemasukan</option>
        <option value="pengeluaran">Pengeluaran</option>
    </select>

    <input type="number" name="jumlah" class="w-full border p-2 rounded" placeholder="Jumlah" required>
    <textarea name="catatan" class="w-full border p-2 rounded" placeholder="Catatan (opsional)"></textarea>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
</form>

<hr class="my-6">

<h2 class="text-lg font-semibold">Tambah Kategori</h2>
<form action="{{ route('kategori.store') }}" method="POST" class="flex space-x-2 mt-2">
    @csrf
    <input type="text" name="nama" class="border p-2 rounded w-full" placeholder="Nama Kategori" required>
    <button class="bg-green-500 text-white px-4 py-2 rounded">Tambah</button>
</form>
@endsection
