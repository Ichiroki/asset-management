@extends('layout.app')

@section('main')
<x-card>
    <x-slot name="header">
        <h1 class="pb-2 mb-6 text-3xl border-b-4 border-slate-800 w-fit dark:text-slate-200 dark:border-slate-200">Show Ticket</h1>
    </x-slot>
    <x-slot name="content">
        <div id="accordion-arrow-icon" data-accordion="open">
            <h2 id="accordion-arrow-icon-heading-1">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-slate-900 bg-slate-100 border border-slate-200 rounded-t-xl focus:ring-4 focus:ring-slate-200 dark:focus:ring-slate-800 dark:border-slate-700 dark:text-white dark:bg-slate-800 hover:bg-slate-100 dark:hover:bg-slate-800" data-accordion-target="#accordion-arrow-icon-body-1" aria-expanded="true" aria-controls="accordion-arrow-icon-body-1">
                    <span>Open Ticket</span>
                </button>
            </h2>
            <div id="accordion-arrow-icon-body-1" aria-labelledby="accordion-arrow-icon-heading-1">
                <div class="p-5 border border-slate-200 dark:border-slate-700 dark:bg-slate-900">
                    <ul>
                        <li class="mb-6">
                            <div id="accordion-nested-collapse" data-accordion="collapse">
                                <h2 id="accordion-nested-collapse-heading-1">
                                  <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-slate-500 border-slate-200 focus:ring-4 focus:ring-slate-200 dark:focus:ring-slate-800 dark:border-slate-700 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800" data-accordion-target="#accordion-nested-collapse-body-1" aria-expanded="false" aria-controls="accordion-nested-collapse-body-1">
                                    <span>Nama Peminjam : {{ $laptop->user->name }}</span>
                                   <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                    </svg>
                                  </button>
                                </h2>
                                <div id="accordion-nested-collapse-body-1" class="hidden" aria-labelledby="accordion-nested-collapse-heading-1">
                                    <div class="p-5 border-slate-200 dark:bg-slate-800">
                                        <ul>
                                            <li>Email : {{ $laptop->user->email }}</li>
                                            <li>Department : {{ $laptop->user->department->name }}</li>
                                            <li>Phone Number : {{ $laptop->user->phone_number }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-6 px-5">
                            Tanggal Meminjam : {{ $laptop->loan_date }}
                        </li>
                        <li class="mb-6 px-5">
                            Tanggal Pengembalian : {{ $laptop->return_date }}
                        </li>
                        <li class="mb-6 px-5">
                            Status : {{ $laptop->status }}
                        </li>
                        <li class="mb-6">
                            <div id="accordion-nested-collapse" data-accordion="collapse">
                                <h2 id="accordion-nested-collapse-heading-1">
                                  <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-slate-500 border-slate-200 focus:ring-4 focus:ring-slate-200 dark:focus:ring-slate-800 dark:border-slate-700 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800" data-accordion-target="#accordion-nested-collapse-laptop" aria-expanded="false" aria-controls="accordion-nested-collapse-body-1">
                                    <span>Laptop : {{ $laptop->laptop->name }}</span>
                                   <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                    </svg>
                                  </button>
                                </h2>
                                <div id="accordion-nested-collapse-laptop" class="hidden" aria-labelledby="accordion-nested-collapse-heading-1">
                                    <div class="p-5 border-slate-200 dark:bg-slate-800">
                                        <ul>
                                            <li>Processor : {{ $laptop->laptop->processor }}</li>
                                            <li>RAM : {{ $laptop->laptop->ram }}</li>
                                            <li>Main Storage : {{ $laptop->laptop->main_storage }}</li>
                                            <li>Extend Storage : {{ $laptop->laptop->extend_storage }}</li>
                                            <li>VGA : {{ $laptop->laptop->vga }}</li>
                                            <li>Monitor : {{ $laptop->laptop->monitor }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-6 px-5">Information : {{ $laptop->information }}</li>
                        <li class="mb-6 px-5">Loan Status : {{ $laptop->loan_status }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </x-slot>
</x-card>

@endsection
