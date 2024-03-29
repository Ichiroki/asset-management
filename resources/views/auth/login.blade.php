@extends('layout.authentication')

@section('main')
    <div class="flex flex-col items-center justify-center w-full h-screen">
        <div class="backdrop-blur-md px-12 py-2.5 bg-slate-300 dark:bg-slate-600 rounded-xl lg:w-5/12 w-8/12">
            <h1 class="pb-2 mt-2 mb-6 text-3xl font-semibold text-center uppercase dark:text-slate-200">Login</h1>
            <form action="{{ route('login') }}" method="POST">
            @csrf
                <div class="flex flex-col gap-3">
                    <x-label for="email">{{ __('Email') }}</x-label>
                    <x-input type="text" name="email" id="email" placeholder="Type your email" value="{{ old('email') }}"></x-input>
                    @error('email')
                        <p class="text-rose-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-3 mt-4">
                    <x-label for="password">{{ __('Password') }}</x-label>
                    <x-input type="password" name="password" id="password" placeholder="Type your password" value="{{ old('password') }}"></x-input>
                    @error('password')
                        <p class="text-rose-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex my-6">
                    <button type="submit" class="w-4/12 px-3 py-2 text-sm font-medium text-center text-blue-700 transition border border-blue-700 rounded-lg hover:text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
