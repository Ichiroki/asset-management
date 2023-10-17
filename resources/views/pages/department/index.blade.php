@extends('layout.app')

@section('main')

<h1 class="text-3xl mb-6 border-b-4 border-slate-800 pb-2 w-fit">Department</h1>
        <div class="flex justify-between">
            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="text-green-700 transition hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800" type="button">
                Create Department
            </button>

            <x-input type="text" name="search" id="search" placeholder="search here" class="lg:w-4/12 w-3/5"/>

                        <!-- Main modal -->
                        <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="px-6 py-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white text-center">User Modal</h3>
                                        <form class="space-y-6" action="#">
                                            @method("post")
                                            <div>
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                            </div>
                                            <div class="flex justify-between items-center gap-3">
                                                <div class="w-1/2">
                                                    <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                                                    <select id="department" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="department">
                                                        <option>United States</option>
                                                        <option>Canada</option>
                                                        <option>France</option>
                                                        <option>Germany</option>
                                                    </select>
                                                </div>
                                                <div class="w-1/2">
                                                    <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                                                    <select id="position" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="position">
                                                        <option>United States</option>
                                                        <option>Canada</option>
                                                        <option>France</option>
                                                        <option>Germany</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="flex justify-between items-center gap-3">
                                                <div class="w-1/2">
                                                    <label for="role-asset" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role Asset</label>
                                                    <select id="role-asset" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="role-asset">
                                                        <option>United States</option>
                                                        <option>Canada</option>
                                                        <option>France</option>
                                                        <option>Germany</option>
                                                    </select>
                                                </div>
                                                <div class="w-1/2">
                                                    <label for="role-permission" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role Permission Room</label>
                                                    <select id="role-permission" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="role-permission">
                                                        <option>United States</option>
                                                        <option>Canada</option>
                                                        <option>France</option>
                                                        <option>Germany</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <button type="submit" class="w-full text-green-700 transition hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Is Active
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0
                    @endphp
                    @foreach ($departments as $department)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $i = $i + 1 }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $department->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $department->status }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Read</a>
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <form action="" class="inline">
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

@endsection
