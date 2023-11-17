@extends('layout.app')

@section('main')
    <div class="py-12 px-20 rounded-3xl glassmorphism-light dark:glassmorphism-dark relative overflow-hidden">
        <div class="w-80 h-80 bg-slate-700 rounded-full absolute bottom-[-7rem] left-[-5rem] opacity-25"></div>
        <div class="w-80 h-80 bg-slate-700 rounded-full absolute top-[-7rem] right-[-5rem] opacity-25"></div>
        <h1 class="text-3xl w-fit border-b-4 py-2 block">User Profile</h1>
        <form action="{{ route('profile.change') }}" method="POST" enctype="multipart/form-data">
        <div class="flex mt-28">
            <div class="w-1/2 px-7">
                <img src="{{ asset('storage/img/' . $user->avatar) }}" alt="" class="w-64 h-64 bg-slate-50 rounded-full mx-auto"/>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-7" for="avatar">Upload file</label>
                <input name="avatar" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="avatar_help" id="avatar" type="file">
                <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="avatar_help">A profile picture is useful to confirm your are logged into your account</div>
                @error('avatar')
                    Gambarnya jangan salah bro
                @enderror
            </div>
            <div class="w-1/2 border-slate-400 px-7">
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value={{ $user->name }}>
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value={{ $user->email }}>
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mt-6">
                    <input type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" value="Save">
                </div>
            </div>
        </form>
    </div>
@endsection
