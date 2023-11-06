@extends('layout.app')

@section('main')

<h1 class="pb-2 mb-6 text-3xl border-b-4 border-slate-800 w-fit dark:text-slate-200 dark:border-slate-200">Vehicle</h1>
        <div class="flex flex-col justify-between">
            <div class="flex justify-between">
                <a href="{{ route('vehicleLoans.create') }}" class="text-green-700 transition hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800" type="button">
                    Create Ticket For Loan
                </a>

                <x-input type="text" name="search" id="search" placeholder="search here" class="w-3/5 lg:w-4/12"/>
            </div>
        </div>

        @if(session('success'))
        <div id="alert-3" class="flex items-center p-4 mt-6 text-green-800 rounded-lg bg-green-50 dark:bg-slate-600 dark:text-green-400" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
              {{ session('success') }}
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
              <span class="sr-only">Close</span>
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
              </svg>
            </button>
          </div>
        @endif
        <div class="relative mt-6 shadow-md sm:rounded-lg overflow-x-scroll">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="pl-6 py-3">
                            No
                        </th>
                        <th scope="col" class="pl-6 py-3">
                            Data Peminjam
                        </th>
                        <th scope="col" class="pl-6 py-3">
                            Tanggal Peminjaman
                        </th>
                        <th scope="col" class="pl-6 py-3">
                            Tanggal Pengembalian
                        </th>
                        <th scope="col" class="pl-6 py-3">
                            Status Asset
                        </th>
                        <th scope="col" class="pl-6 py-3">
                            Nama Asset
                        </th>
                        <th scope="col" class="pl-6 py-3">
                            Plat Nomor
                        </th>
                        <th scope="col" class="pl-6 py-3">
                            Tujuan
                        </th>
                        <th scope="col" class="pl-6 py-3">
                            Kapasitas
                        </th>
                        <th scope="col" class="pl-6 py-3">
                            Keterangan
                        </th>
                        <th scope="col" class="pl-6 py-3">
                            Status Pengajuan
                        </th>
                        <th scope="col" class="pl-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0
                    @endphp
                    @foreach ($vehicles as $vehicle)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 text-center">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $i = $i + 1 }}
                        </th>
                        <td class="py-4">
                            {{ $vehicle->user->name }}
                        </td>
                        <td class="py-4">
                            {{ $vehicle->loan_date }}
                        </td>
                        <td class="py-4">
                            {{ $vehicle->return_date }}
                        </td>
                        <td class="py-4">
                            {{ $vehicle->status }}
                        </td>
                        <td class="py-4">
                            {{ $vehicle->vehicle->type }}
                        </td>
                        <td class="py-4">
                            {{ $vehicle->number_plate }}
                        </td>
                        <td class="py-4">
                            {{ $vehicle->purpose }}
                        </td>
                        <td class="py-4">
                            {{ $vehicle->capacity }}
                        </td>
                        <td class="py-4">
                            {{ $vehicle->information }}
                        </td>
                        <td class="py-4">
                            {{ $vehicle->loan_status }}
                        </td>
                        @if($vehicle->notes !== null)
                        <td class="py-4">
                            {{ $vehicle->notes }}
                        </td>
                        @endif
                        <td class="py-4">
                            <div class="flex items-center">
                                <a href="{{ route('vehicleLoans.show', ['vehicle' => $vehicle->id]) }}" class="px-3 py-2 mb-2 mr-2 text-sm font-medium text-center text-green-700 transition border border-green-700 rounded-lg hover:text-white hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">
                                    Read
                                </a>
                                    <a href="{{ route('vehicleLoans.edit', ['vehicle' => $vehicle->id]) }}" class="@can('approve vehicle loans') hidden @endcan py-2 mb-2 mr-2 text-sm font-medium text-center text-blue-700 transition border border-blue-700 rounded-lg hover:text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">Edit</a>
                                @can('approve vehicle loans')
                                    <a href="{{ route('vehicleLoans.edit', ['vehicle' => $vehicle->id]) }}" class="px-3 py-2 mb-2 mr-2 text-sm font-medium text-center text-amber-700 transition border border-amber-700 rounded-lg hover:text-white hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:border-amber-500 dark:text-amber-500 dark:hover:text-white dark:hover:bg-amber-600 dark:focus:ring-amber-800">Approve</a>
                                @endcan
                                    <button data-modal-target="popup-modal-{{ $vehicle->id }}" data-modal-toggle="popup-modal-{{ $vehicle->id }}" class="px-3 py-2 mb-2 mr-2 text-sm font-medium text-center transition border rounded-lg text-rose-700 hover:text-white border-rose-700 hover:bg-rose-800 focus:ring-4 focus:outline-none focus:ring-rose-300 dark:border-rose-500 dark:text-rose-500 dark:hover:text-white dark:hover:bg-rose-600 dark:focus:ring-rose-800" type="button">
                                        Delete
                                    </button>
                                    <x-modal-box value="{{ $vehicle->id }}">
                                        <x-slot name="logo">
                                            <svg class="w-12 h-12 mx-auto mb-4 text-gray-400 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                            </svg>
                                        </x-slot>
                                        <x-slot name="title">
                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this ticket ?</h3>
                                        </x-slot>
                                        <form action="{{ route('vehicleLoans.destroy', ['vehicle' => $vehicle->id]) }}" class="inline" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                Yes, I'm sure
                                            </button>
                                            <button data-modal-hide="popup-modal-{{ $vehicle->id }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                                        </form>
                                    </x-modal-box>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            {{ $vehicles->links() }}
        </div>

@endsection
