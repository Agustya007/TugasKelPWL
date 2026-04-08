@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-bold mb-4">Data Produk</h2>

<table class="w-full bg-white shadow rounded">
    <thead class="bg-gray-200">
        <tr>
            <th class="p-2">No</th>
            <th class="p-2">Nama</th>
            <th class="p-2">Harga</th>
            <th class="p-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr class="text-center border-t">
            <td class="p-2">1</td>
            <td class="p-2">Semen</td>
            <td class="p-2">Rp 50.000</td>
            <td class="p-2">
                <button class="bg-blue-500 text-white px-2 py-1 rounded">Edit</button>
                <button class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
            </td>
        </tr>
    </tbody>
</table>

@endsection