@extends('layout.app')

@section('main')

<h1 class="pb-2 mb-6 text-3xl border-b-4 border-slate-800 w-fit dark:text-slate-200 dark:border-slate-200">Audit Log</h1>

<div class="w-full">
    <div class="bg-slate-900 px-6 py-2 rounded-t-lg">Audit Log List</div>
    @forelse ($audits as $audit)
        <div class="bg-slate-600 px-6 py-4 border-b-2 group hover:bg-slate-700 transition">
            <div class="w-10/12">
                <p class="group-hover:text-slate-100">{{ $items }}</p>
            </div>
            <div>
                <p></p>
            </div>
        </div>
    @empty
    <div class="bg-slate-600 px-6 py-4 border-b-2 group hover:bg-slate-700 transition">
        <div class="w-10/12">
            <p class="group-hover:text-slate-100">No activity can be found</p>
        </div>
    </div>
    @endforelse
</div>

@endsection
