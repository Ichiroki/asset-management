@extends('layout.app')

@section('main')
    @if(session('success'))
        <x-alert color="blue">{{ session('success') }}</x-alert>
    @endif
    <div class="w-full bg-slate-200 border border-slate-800 shadow dark:bg-gray-700 px-5 py-7 rounded-md mb-6">
        <h1 class="lg:text-2xl md:text-xl text-slate-800 dark:text-slate-200">Hello {{ Auth::user()->name }}, Welcome to Dashboard</h1>
    </div>
    <div class="w-full flex flex-col md:flex-row flex-wrap lg:flex-nowrap justify-between gap-7">
        <div class="group bg-sky-400 dark:bg-sky-700 w-full px-5 py-7 rounded-md relative overflow-hidden hover:ring-2 hover:ring-offset-4 dark:hover:ring-offset-slate-800 hover:ring-offset-slate-200 transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle rounded-full absolute top-2 left-2 z-30" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
            <div class="z-10 w-36 h-36 rounded-full absolute top-[-3.7rem] left-[-3.5rem] bg-slate-900 opacity-20  group-hover:rounded-none group-hover:w-full group-hover:h-full group-hover:top-0 group-hover:left-0 transition-all"></div>
            <div class="z-50 block">
                <p class="text-center text-4xl pb-3">{{ $users }}</p>
                <hr class="w-9/12 mx-auto pb-3 border-slate-800 dark:border-slate-200">
                <p class="text-center text-xl">Users</p>
            </div>
        </div>
        <div class="group bg-amber-400 dark:bg-amber-700 w-full px-5 py-7 rounded-md relative overflow-hidden hover:ring-2 hover:ring-amber-400 dark:hover:ring-amber-700 hover:ring-offset-4 dark:hover:ring-offset-slate-800 hover:ring-offset-slate-200 transition">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-building absolute top-2 left-2 z-30" viewBox="0 0 16 16">
                <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z"/>
                <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V1Zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3V1Z"/>
              </svg>
            <div class="w-36 h-36 rounded-full absolute top-[-3.7rem] left-[-3.5rem] bg-slate-900 opacity-20 group-hover:w-full group-hover:h-full group-hover:top-0 group-hover:left-0 group-hover:rounded-none transition-all"></div>
            <div>
                <p class="text-center text-4xl pb-3">{{ $departments }}</p>
                <hr class="w-9/12 mx-auto pb-3 border-slate-800 dark:border-slate-200">
                <p class="text-center text-xl">Departments</p>
            </div>
        </div>
        <div class="group bg-emerald-400 dark:bg-emerald-700 w-full px-5 py-7 rounded-md relative overflow-hidden hover:ring-2 hover:ring-offset-4 hover:ring-emerald-400 dark:hover:ring-emerald-700 dark:hover:ring-offset-slate-800 hover:ring-offset-slate-200 transition">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-car-front-fill absolute top-2 left-2 z-30" viewBox="0 0 16 16">
                <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
            </svg>
            <div class="w-36 h-36 rounded-full absolute top-[-3.7rem] left-[-3.5rem] bg-slate-900 opacity-20 group-hover:w-full group-hover:h-full group-hover:top-0 group-hover:left-0 group-hover:rounded-none transition-all"></div>
            <div>
                <p class="text-center text-4xl pb-3">{{ $vehicles }}</p>
                <hr class="w-9/12 mx-auto pb-3 border-slate-800 dark:border-slate-200">
                <p class="text-center text-xl">Vehicles</p>
            </div>
        </div>
        <div class="group bg-purple-400 dark:bg-purple-700 w-full px-5 py-7 rounded-md relative overflow-hidden hover:ring-2 hover:ring-offset-4 hover:ring-purple-400 dark:hover:ring-purple-700 dark:hover:ring-offset-slate-800 hover:ring-offset-slate-200 transition">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-laptop  absolute top-2 left-2 z-30" viewBox="0 0 16 16">
                <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
            </svg>
            <div class="w-36 h-36 rounded-full absolute top-[-3.7rem] left-[-3.5rem] bg-slate-900 opacity-20 group-hover:w-full group-hover:h-full group-hover:top-0 group-hover:left-0 group-hover:rounded-none transition-all"></div>
            <div>
                <p class="text-center text-4xl pb-3">{{ $laptops }}</p>
                <hr class="w-9/12 mx-auto pb-3 border-slate-800 dark:border-slate-200">
                <p class="text-center text-xl">Laptops</p>
            </div>
        </div>
    </div>
@endsection
