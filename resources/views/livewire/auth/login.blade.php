<div>
    <div class="flex flex-col items-center justify-center w-full h-screen">
        @if(session('error'))
            <div id="alert-border-2" class="flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-700 dark:border-red-800 lg:w-5/12 w-8/12" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <div class="ms-3 text-sm font-medium">
                    {{ session('error') }}
                </div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-700 dark:text-red-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-2" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                </button>
            </div>
        @endif
        <div class="backdrop-blur-md px-12 py-2.5 bg-slate-300 dark:bg-slate-600 rounded-xl lg:w-5/12 w-8/12">
            <h1 class="pb-2 mt-2 mb-6 text-3xl font-semibold text-center uppercase dark:text-slate-200">Login</h1>
            {{-- {{ route('login') }} --}}
            <form action="#" method="POST" wire:submit="login">
            @csrf
                <div class="flex flex-col gap-3">
                    <x-label for="email">{{ __('Email') }}</x-label>
                    <x-input type="text" id="email" placeholder="email" wire:model="form.email"/>
                    @error('form.email')
                        <p class="text-rose-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-3 mt-4">
                    <x-label for="password">{{ __('Password') }}</x-label>
                    <x-input type="password" wire:model="form.password" id="password" placeholder="password" />
                    @error('form.password')
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


