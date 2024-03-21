@extends('layout.app')

@section('main')
    @if(session('success'))
        <x-alert color="blue">{{ session('success') }}</x-alert>
    @endif
    <div id="chart w-8/12">
        <h1 class="pb-2 mb-6 text-4xl border-b font-semibold border-slate-800 dark:text-slate-200 dark:border-slate-200">Assets</h1>
        <div id="assets" class="flex justify-center items-center gap-3">
            <x-card>
                {{-- <x-slot name="header">
                </x-slot>
                <x-slot name="content">
                    <h1 class="text-center text-xl mb-5">Vehicles</h1>
                    <p class="text-center text-2xl font-bold">{{ $vehicle }}</p>
                </x-slot> --}}
                <i class="bi bi-car-front text-2xl absolute top-2 left-4"></i>
                <h1 class="text-center text-2xl font-bold uppercase mb-3">Vehicles</h1>
                <p class="text-center text-lg">{{ $vehicle }}</p>
            </x-card>
            <x-card>
                <x-slot name="header">
                </x-slot>
                <x-slot name="content" >
                    <h1 class="text-center text-xl mb-5">Laptops</h1>
                    <p class="text-center text-2xl font-bold">{{ $laptop }}</p>
                </x-slot>
            </x-card>
        </div>
    </div>
@endsection
