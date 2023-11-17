@extends('layout.authentication')

@section('main')
    <div class="flex flex-col items-center justify-center w-full h-screen">
        <div class="w-full lg:w-1/2 w-3/4 items-center justify-center flex-col px-4 z-10 pb-6 flex lg:hidden">
            <h1 class="text-center dark:text-slate-200 text-slate-800 text-4xl mb-3">Welcome Back</h1>
            <p class="dark:text-slate-200 text-center">This asset management website will monitoring all of your assets loan</p>
            <br>
            <p class="dark:text-slate-200 text-center">If you want to register and log in, tell the admins to make them registering an account for you</p>
        </div>
        <div class="dark:glassmorphism-dark glassmorphism-light rounded-xl flex flex-col lg:flex-row lg:gap-12 overflow-hidden relative w-8/12 h-3/6">
            <div class="w-80 h-80 bg-slate-700 rounded-full absolute bottom-[-7rem] left-[-5rem] opacity-25"></div>
            <div class="w-80 h-80 bg-slate-700 rounded-full absolute top-[-7rem] right-[-5rem] opacity-25"></div>
            <div class="w-full lg:w-1/2 items-center justify-center flex-col px-4 z-10 py-6 hidden lg:flex">
                <h1 class="text-center dark:text-slate-200 text-slate-800 text-4xl mb-3">Welcome Back</h1>
                <p class="dark:text-slate-200 text-center">This asset management website will monitoring all of your assets loan</p>
                <br>
                <p class="dark:text-slate-200 text-center">If you want to register and log in, tell the admins to make them registering an account for you</p>
            </div>
            <div class="w-full lg:w-1/2 px-12 py-2.5 flex flex-col justify-center z-20">
                <h1 class="pb-2 mt-2 mb-6 text-3xl font-semibold text-center uppercase dark:text-slate-200">Login</h1>
                <form action="{{ route('login') }}" method="POST">
                @csrf
                    <div class="flex flex-col gap-3">
                        <x-label for="email">{{ __('Email') }}</x-label>
                        <x-input type="text" name="email" id="email" placeholder="email" value="{{ old('email') }}"></x-input>
                        @error('email')
                            <p class="text-rose-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-3 mt-4">
                        <x-label for="password">{{ __('Password') }}</x-label>
                        <x-input type="password" name="password" id="password" placeholder="password" value="{{ old('password') }}"></x-input>
                        @error('password')
                            <p class="text-rose-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-3 mt-4">
                        <div class="flex items-center mb-4">
                            <input id="remember" type="checkbox" name="remember" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember Me</label>
                        </div>
                    </div>
                    <div class="flex mb-6">
                        <button type="submit" class="w-4/12 px-3 py-2 text-sm font-medium text-center text-blue-700 transition border border-blue-700 rounded-lg hover:text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
