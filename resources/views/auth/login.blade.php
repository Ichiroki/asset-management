@extends('layout.authentication')

@section('main')
    <div class="h-screen w-screen flex flex-col justify-center items-center">
        <div class="mx-auto bg-slate-200 dark:bg-slate-700 shadow-md w-1/2 lg:px-16 md:p-9 p-6 rounded-xl">
            <div class="flex flex-col gap-3 mb-6">
                <x-label for="email">{{ __('Email') }}</x-label>
                <x-input type="text" name="email" id="email" placeholder="Email" />
            </div>
            <div class="flex flex-col gap-3 mb-6">
                <x-label for="password">{{ __('Password') }}</x-label>
                <x-input type="text" name="password" id="password" placeholder="Password" />
            </div>
            <div class="flex justify-between">
                <x-button color="green">Login</x-button>
            </div>
        </div>
    </div>
@endsection
