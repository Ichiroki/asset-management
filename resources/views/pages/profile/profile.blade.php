@extends('layout.app')

@section('main')
    @if (session('success'))
        <x-alert color="blue">{{ session('success') }}</x-alert>
    @endif
    <div
        class="md:py-12 md:px-20 sm:px-12 sm:py-6 px-6 py-2 rounded-3xl glassmorphism-light dark:glassmorphism-dark relative overflow-hidden">
        <div class="w-80 h-80 bg-slate-700 rounded-full absolute bottom-[-7rem] left-[-5rem] opacity-25"></div>
        <div class="w-80 h-80 bg-slate-700 rounded-full absolute top-[-7rem] right-[-5rem] opacity-25"></div>
        <h1 class="text-3xl w-fit border-b-4 py-2 block mx-6 z-30">User Profile</h1>
        <form action="{{ route('profile.update', ['user' => $user->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex flex-col lg:flex-row mt-28">
                <div class="lg:w-1/2 md:px-7 z-10 mb-10 lg:mb-0">
                    <img src="{{ asset('storage/img/' . $user->avatar) }}" alt=""
                        class="w-64 h-64 bg-slate-50 rounded-full mx-auto" />
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-7" for="avatar">Upload
                        file</label>
                    <input id="avatar" type="file" name="avatar" accept="image/png, image/jpg, image/jpeg"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="avatar_help">
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="avatar_help">A profile picture is useful
                        to confirm your are logged into your account</div>
                    @error('avatar')
                        Gambarnya jangan salah bro
                    @enderror
                </div>
                <div class="lg:w-1/2 border-slate-400 md:px-7">
                    <div class="mb-6 z-10">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" id="name" name="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value={{ $user->name }}>
                        @error('name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">{{ $message }}</span>
                            </p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" id="email" name="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value={{ $user->email }}>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">{{ $message }}</span>
                            </p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" id="password" name="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('password')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">{{ $message }}</span>
                            </p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="confPassword"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                        <input type="password" id="confPassword" name="confPassword"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('confPassword')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <span class="font-medium">{{ $message }}</span>
                            </p>
                        @enderror
                    </div>
                    <div class="mt-6">
                        <input type="submit"
                            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                            value="Save">
                    </div>
                </div>
        </form>
    </div>

    <div
        class="md:py-12 md:px-20 sm:px-12 sm:py-6 px-6 py-2 rounded-3xl glassmorphism-light dark:glassmorphism-dark relative overflow-hidden">
    </div>
@endsection
