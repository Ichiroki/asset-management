@extends('layout.app')

@section('main')
<x-card>
    <x-slot name="header">
        <h1 class="pb-2 mb-6 text-3xl border-b-4 border-slate-800 w-fit dark:text-slate-200 dark:border-slate-200">Show Laptop Details</h1>
    </x-slot>
    <x-slot name="content">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Peminjam : {{ $laptop->name }}</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">Asset Number : {{ $laptop->no_asset }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Date Used : {{ $laptop->date_used }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Processor : {{ $laptop->processor }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">RAM : {{ $laptop->ram }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Main : {{ $laptop->main_storage }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Extend : {{ $laptop->extend_storage }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">VGA : {{ $laptop->vga }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Monitor : {{ $laptop->monitor }}</p>
    </x-slot>
</x-card>
@endsection
