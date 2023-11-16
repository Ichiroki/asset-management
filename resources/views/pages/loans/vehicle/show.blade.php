@extends('layout.app')

@section('main')
<x-card>
    <x-slot name="header">
        <h1 class="pb-2 mb-6 text-3xl border-b-4 border-slate-800 w-fit dark:text-slate-200 dark:border-slate-200">Show Ticket</h1>
    </x-slot>
    <x-slot name="content">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nama Peminjam : {{ $vehicle->user->name }}</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">Department : {{ $vehicle->department->name }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Tanggal Peminjaman : {{ $vehicle->loan_date }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Tanggal Pengembalian : {{ $vehicle->return_date }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Nama Aset : {{ $vehicle->vehicle->type }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Nomor Polisi : {{ $vehicle->number_plate }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Kapasitas : {{ $vehicle->capacity }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Tujuan Peminjaman : {{ $vehicle->purpose }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Status Pengajuan :
            @if($vehicle->loan_status === null)
                Waiting Approval
            @else
                {{ $vehicle->loan_status }}</p>
            @endif
        @can('approve vehicle loans')
        <div class="flex mt-3">
            <form action="{{ route('vehicleLoans.approve', ['vehicle' => $vehicle->id]) }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="px-3 py-2 mb-2 mr-2 text-sm font-medium text-center transition border rounded-lg text-amber-700 border-amber-700 hover:text-white hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:border-amber-500 dark:text-amber-500 dark:hover:text-white dark:hover:bg-amber-600 dark:focus:ring-amber-800">Approve</button>
            </form>
            <form action="{{ route('vehicleLoans.reject', ['vehicle' => $vehicle->id]) }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="px-3 py-2 mb-2 mr-2 text-sm font-medium text-center transition border rounded-lg text-rose-700 border-rose-700 hover:text-white hover:bg-rose-800 focus:ring-4 focus:outline-none focus:ring-rose-300 dark:border-rose-500 dark:text-rose-500 dark:hover:text-white dark:hover:bg-rose-600 dark:focus:ring-rose-800">Reject</button>
            </form>
        </div>
        @endcan
    </x-slot>
</x-card>

@endsection
