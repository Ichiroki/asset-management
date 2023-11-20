@extends('layout.app')

@section('main')
<x-card>
    <x-slot name="header">Create Laptop</x-slot>
    <x-slot name="content">
        <form action="{{ route('laptop.store') }}" method="POST" novalidate>
            @csrf
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" autocomplete="off" autofocus required>
                @error('name')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        <span class="font-medium">{{ $message }}</span>
                    </p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="no_asset" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Asset</label>
                <input type="text" id="no_asset" name="no_asset" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" autocomplete="off" autofocus required>
                @error('no_asset')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="date_used" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Pakai</label>
                <input type="date" id="date_used" name="date_used" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" autocomplete="off" autofocus required>
                @error('date_used')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="processor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prosesor</label>
                <input type="text" id="processor" name="processor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" autocomplete="off" autofocus required>
                @error('processor')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="ram" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ram</label>
                <input type="text" id="ram" name="ram" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" autocomplete="off" autofocus required>
                @error('ram')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
            </div>
            <div>
                <p class="text-center">Storage</p>
                <div class="flex gap-3">
                    <div class="mb-6">
                        <label for="main_storage" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Main</label>
                        <input type="text" id="main_storage" name="main_storage" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" autocomplete="off" autofocus required>
                        @error('main_storage')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="extend_storage" class="text-end block mb-2 text-sm font-medium text-gray-900 dark:text-white">Extends</label>
                        <input type="text" id="extend_storage" name="extend_storage" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" autocomplete="off" autofocus required>
                        @error('extend_storage')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                        @enderror
                    </div>
                </div>
            </div>
            <div>
                <p class="text-center">Display</p>
                <div class="flex gap-3">
                    <div class="mb-6">
                        <label for="vga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">VGA</label>
                        <input type="text" id="vga" name="vga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" autocomplete="off" autofocus required>
                        @error('vga')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="monitor" class="block text-end mb-2 text-sm font-medium text-gray-900 dark:text-white">Monitor</label>
                        <input type="text" id="monitor" name="monitor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" autocomplete="off" autofocus required>
                        @error('monitor')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </x-slot>
</x-card>
@endsection
