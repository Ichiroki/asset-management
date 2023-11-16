@extends('layout.app')

@section('main')
<x-card>
    <x-slot name="header">
        <h1 class="pb-2 mb-6 text-3xl border-b-4 border-slate-800 w-fit dark:text-slate-200 dark:border-slate-200">Show Vehicles : B 16 JET</h1>
    </x-slot>
    <x-slot name="content">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Jenis : {{ $vehicle->jenis }}</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">Nomor Polisi : {{ $vehicle->nomorPol }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Kapasitas : {{ $vehicle->capacity }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">PIC : {{ $vehicle->department->name }}</p>
    </x-slot>
</x-card>

@endsection
