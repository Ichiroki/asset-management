@extends('layout.app')

@section('main')
    <x-card>
        <x-slot name="header">Create Ticket For Loan</x-slot>
        <x-slot name="content">
            <form action="{{ route('vehicleLoans.store') }}" method="POST" novalidate>
                @csrf
                <div class="flex flex-col justify-between gap-3 md:flex-row">
                    <div class="mb-6 md:w-full">
                        <label for="user" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User</label>
                        <select id="user" name="user" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" >{{ $user->name }}</option>
                            @endforeach
                        </select>
                        <x-error-message for="user" />
                    </div>
                </div>
                <div class="mb-6">
                    <label for="vehicle"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Vehicle</label>
                    <select id="vehicle" name="vehicle"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="none">Select Vehicle</option>
                        @foreach ($vehicles as $v)
                            <option value={{ $v->id }}>{{ $v->type }}</option>
                        @endforeach
                    </select>
                    <x-error-message for="user" />
                </div>
                <div class="flex flex-col justify-between gap-3 md:flex-row">
                    <div class="mb-6 md:w-1/2">
                        <label for="loan_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Load Date</label>
                        <input type="date" id="loan_date" name="loan_date"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" autocomplete="off" required>
                        <x-error-message for="loan_date" />
                    </div>
                    <div class="mb-6 md:w-1/2">
                        <label for="return_date"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Return Date</label>
                        <input type="date" id="return_date" name="return_date"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" autocomplete="off" required>
                        <x-error-message for="return_date" />
                    </div>
                </div>
                <div class="mb-6">
                    <label for="purpose"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Purposes</label>
                    <textarea id="purpose" name="purpose" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Write your description here..."></textarea>
                    <x-error-message for="purpose" />
                </div>
                <div class="mb-6">
                    <label for="information"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Information</label>
                    <textarea id="information" name="information" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Write your description here..."></textarea>
                    <x-error-message for="information" />
                </div>
                <input type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    value="Submit">
            </form>
        </x-slot>
    </x-card>
@endsection
