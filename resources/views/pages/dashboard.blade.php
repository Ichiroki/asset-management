@extends('layout.app')

@section('main')
    @if(session('success'))
        <x-alert color="blue">{{ session('success') }}</x-alert>
    @endif
@endsection
