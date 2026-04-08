@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-bold mb-4">Dashboard</h2>

<div class="grid grid-cols-3 gap-4">
    <div class="bg-white p-4 shadow rounded">
        <h3 class="text-gray-500">Total Produk</h3>
        <p class="text-2xl font-bold">120</p>
    </div>

    <div class="bg-white p-4 shadow rounded">
        <h3 class="text-gray-500">Total User</h3>
        <p class="text-2xl font-bold">50</p>
    </div>

    <div class="bg-white p-4 shadow rounded">
        <h3 class="text-gray-500">Transaksi</h3>
        <p class="text-2xl font-bold">75</p>
    </div>
</div>

@endsection