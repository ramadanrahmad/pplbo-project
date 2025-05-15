@extends('layout')

@section('content')
<table class="w-full border">
    <thead>
        <tr class="bg-gray-200 text-left">
            <th class="p-2">Tanggal</th>
            <th class="p-2">Kategori</th>
            <th class="p-2">Tipe</th>
            <th class="p-2">Jumlah</th>
            <th class="p-2">Catatan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($transaksis as $transaksi)
        <tr>
            <td class="p-2">{{ $transaksi->created_at->format('d M Y') }}</td>
            <td class="p-2">{{ $transaksi->kategori->nama }}</td>
            <td class="p-2 capitalize">{{ $transaksi->tipe }}</td>
            <td class="p-2 text-right">{{ number_format($transaksi->jumlah) }}</td>
            <td class="p-2">{{ $transaksi->catatan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
