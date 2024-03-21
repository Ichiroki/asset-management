@extends('layout.app')

@section('main')
    <x-card>
        <x-slot name="header">
            <h1 class="pb-2 mb-6 text-3xl border-b-4 border-slate-800 w-fit dark:text-slate-200 dark:border-slate-200">Assign
                Vehicle</h1>
        </x-slot>
        <x-slot name="content">
            <form action="{{ route('vehicle-pic.store') }}" method="POST" novalidate>
                @csrf
                <div class="mb-6">
                    <label for="vehicle_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Vehicle</label>
                    <select id="vehicle_id" name="vehicle_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach ($vehicles as $vehicle)
                            <option value="{{ $vehicle->id }}">{{ $vehicle->type }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PIC</label>
                    <div class="flex">
                        <div class="mr-4">
                            <input type="radio" id="pic_user" name="pic_checkbox" class="mr-2" value="1">
                            <label for="pic_user" class="text-sm font-medium text-gray-900 dark:text-white">User</label>
                        </div>
                        <div>
                            <input type="radio" id="pic_department" name="pic_checkbox" class="mr-2" value="2">
                            <label for="pic_department"
                                class="text-sm font-medium text-gray-900 dark:text-white">Department</label>
                        </div>
                    </div>
                </div>
                <div id="user_select" class="mb-6 hidden">
                    <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                        User</label>
                    <select id="user_id" name="pic_user"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected value="0"></option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div id="department_select" class="mb-6 hidden">
                    <label for="department_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                        Department</label>
                    <select id="department_id" name="pic_department"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected value="0"></option>
                        @foreach ($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @endforeach
                    </select>
                </div>
                @error('pic_id')
                    <p class="my-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                @enderror
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </x-slot>
    </x-card>

    <script>
        const picUserCheckbox = document.getElementById('pic_user')
        const picDepartmentCheckbox = document.getElementById('pic_department')

        const userSelect = document.getElementById('user_select')
        const departmentSelect = document.getElementById('department_select')

        picUserCheckbox.addEventListener('change', function() {
            if (picUserCheckbox.checked && !picDepartmentCheckbox.checked) {
                userSelect.classList.remove('hidden');
                departmentSelect.classList.add('hidden');
                picUserCheckbox.value = 1;
                picDepartmentCheckbox.value = 0;
            } else {
                userSelect.classList.add('hidden');
            }

            if (!picUserCheckbox.checked && picDepartmentCheckbox.checked) {
                document.getElementById('user_id').selectedIndex = 0; // Set opsi pertama sebagai opsi default
            }
        });

        picDepartmentCheckbox.addEventListener('change', function() {
            if (picDepartmentCheckbox.checked && !picUserCheckbox.checked) {
                departmentSelect.classList.remove('hidden');
                userSelect.classList.add('hidden');
                picDepartmentCheckbox.value = 1;
                picUserCheckbox.value = 0;
            } else {
                departmentSelect.classList.add('hidden');
            }

            if (!picDepartmentCheckbox.checked && picUserCheckbox.checked) {
                document.getElementById('department_id').selectedIndex = 0; // Set opsi pertama sebagai opsi default
            }
        });
    </script>
@endsection
