@extends('layout.app')

@section('main')
    <x-card>
        <x-slot name="header">
            <h1 class="pb-2 mb-6 text-3xl border-b-4 border-slate-800 w-fit dark:text-slate-200 dark:border-slate-200">Assign
                Vehicle</h1>
        </x-slot>
        <x-slot name="content">
            <form action="{{ route('vehicle.store') }}" method="POST" novalidate>
                @csrf
                <div class="mb-6">
                    <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vehicle
                        Type</label>
                    <input type="text" id="type" name="type"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" autocomplete="off" autofocus required>
                    <x-error-message for="type" />
                </div>
                <div class="mb-6">
                    <label for="number_plates" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Number
                        Plates</label>
                    <input type="text" id="number_plates" name="number_plates"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" autocomplete="off" autofocus required>
                    <x-error-message for="number_plates" />
                </div>
                <div class="mb-6">
                    <label for="capacity"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Capacity</label>
                    <input type="number" id="capacity" name="capacity"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" autocomplete="off" autofocus required>
                    <x-error-message for="capacity" />
                </div>
                <div class="mb-6">
                    <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                    <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="Active" selected>Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                    <p class="block mt-3" id="avail-text"></p>
                </div>
                <x-error-message for="status" />
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </x-slot>
    </x-card>
@endsection
