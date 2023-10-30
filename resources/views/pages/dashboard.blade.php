@extends('layout.app')

@section('main')
    @if(session('success'))
        <x-alert color="blue">{{ session('success') }}</x-alert>
    @endif
    <div id="chart w-8/12">
        <div class="chart-users">
            {{ $users->container() }}
        </div>
    </div>

    {{ $users->script() }}
@endsection
