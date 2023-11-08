@extends('layout.app')

@section('main')
<x-card>
    <x-slot name="header">
        <h1 class="pb-2 mb-6 text-3xl border-b-4 border-slate-800 w-fit dark:text-slate-200 dark:border-slate-200">Show Ticket</h1>
    </x-slot>
    <x-slot name="content">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nama Peminjam : {{ $laptop->user }}</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">Tanggal Peminjaman : {{ $laptop->loan_date }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Tanggal Pengembalian : {{ $laptop->return_date }}</p>
        {{-- <p class="font-normal text-gray-700 dark:text-gray-400">Nama Aset : {{ $laptop->laptop->processor }}</p> --}}
        <p class="font-normal text-gray-700 dark:text-gray-400">Tujuan Peminjaman : {{ $laptop->purpose }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Status Pengajuan :
            @if($laptop->loan_status === null)
                Waiting Approval
            @else
                {{ $laptop->loan_status }}</p>
            @endif
        <p class="font-normal text-gray-700 dark:text-gray-400">Notes : {{ $laptop->notes }}</p>
    </x-slot>
</x-card>

@endsection
