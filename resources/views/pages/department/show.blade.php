@extends('layout.app')

@section('main')
<x-card>
    <x-slot name="header">
        <h1 class="text-3xl mb-6 border-b-4 border-slate-800 pb-2 w-fit dark:text-slate-200 dark:border-slate-200">Create Department</h1>
    </x-slot>
    <x-slot name="content">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $department->name }}</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">Status : {{ $department->status }}</p>
    </x-slot>
</x-card>
@endsection
