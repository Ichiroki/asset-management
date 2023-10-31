@extends('layout.app')

@section('main')
<x-card>
    <x-slot name="header">Create Ticket For Loan</x-slot>
    <x-slot name="content">
        <form action="{{ route('laptop.store') }}" method="POST" novalidate>
            @csrf
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" value="{{ Auth::user()->name }}" autocomplete="off" autofocus required disabled>
                @error('name')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="dept" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                <input type="text" id="dept" name="dept" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" autocomplete="off" value="{{ Auth::user()->department }}" autofocus required disabled>
                @error('dept')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex justify-evenly">
                <div class="flex items-center mb-4">
                    <input id="laptopLoans" type="radio" value="" name="asset_type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="laptopLoans" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laptop</label>
                </div>
                <div class="flex items-center mb-4">
                    <input id="vehicleLoans" type="radio" value="" name="asset_type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="vehicleLoans" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Vehicle</label>
                </div>
            </div>
            <div class="mb-6">
                <label for="assets" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                <select id="assets" name="assets" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                </select>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </x-slot>
</x-card>
@endsection
