@extends('layout.app')

@section('main')
<x-card>
    <x-slot name="header">Edit Ticket For Loan</x-slot>
    <x-slot name="content">
        <form action="{{ route('laptopLoans.update', ['laptop' => $laptop->id]) }}" method="POST" novalidate>
            @csrf
            @method('PUT')
            <div class="flex flex-col md:flex-row justify-between gap-3">
                <div class="mb-6 md:w-1/2">
                    <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="text" id="user_id" name="user_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" value="{{ $laptop->user->name }}" readonly>
                    @error('user_id')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6 md:w-1/2">
                    <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                    <input type="text" id="department" name="department" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" readonly value="{{ $laptop->department }}">
                    @error('department')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-6">
                <label for="laptop_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asset</label>
                <select id="laptop_id" name="laptop_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="none">Select Vehicle</option>
                    @foreach ($vehicles as $v)
                        <option value={{ $v->id }} @if($v->id == $vehicle->id) selected @endif>{{ $v->type }}</option>
                    @endforeach
                </select>
                <p class="block mt-3" id="avail-text"></p>
            </div>
            <div class="flex flex-col md:flex-row justify-between gap-3">
                <div class="mb-6 md:w-1/2">
                    <label for="loan_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Peminjaman</label>
                    <input type="date" id="loan_date" name="loan_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" autocomplete="off" value="{{ $vehicle->loan_date }}" required>
                    @error('loan_date')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6 md:w-1/2">
                    <label for="return_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Pengembalian</label>
                    <input type="date" id="return_date" name="return_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" autocomplete="off" value="{{ $vehicle->return_date }}" required>
                    @error('return_date')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-6">
                <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asset Status</label>
                <input type="text" id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" autocomplete="off" value="{{ $vehicle->status }}" autofocus required readonly>
                @error('status')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="number_plate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Plate Number</label>
                <input type="text" id="number_plate" name="number_plate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" value="{{ $vehicle->number_plate }}" autocomplete="off" autofocus required readonly>
                @error('number_plate')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="capacity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Capacity</label>
                <input type="number" id="capacity" name="capacity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" autocomplete="off" required value="{{ $vehicle->capacity }}" readonly>
                @error('capacity')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="purpose" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tujuan</label>
                <textarea id="purpose" name="purpose" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your description here...">{{ $vehicle->purpose }}</textarea>
                @error('purpose')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="information" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                <textarea id="information" name="information" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" @can('approve vehicle loan') readonly @endcan>{{ $vehicle->information }}</textarea>
                @error('information')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                @enderror
            </div>
            @can('approve vehicle loans')
                <div class="mb-6">
                    <label for="loan_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asset</label>
                    <select id="loan_status" name="loan_status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach($approve as $a)
                        <option value="{{ $a }}" @if($vehicle->loan_status === $a) selected @endif>{{ $a }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6 hidden" id="notes-input">
                    <label for="notes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Note</label>
                    <textarea id="notes" name="notes" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your note here...">{{ $vehicle->notes }}</textarea>
                    @error('notes')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                    @enderror
                </div>
            @endcan
            <input type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" value="Submit">
        </form>
    </x-slot>
</x-card>

<script>
    const vehicleDropdown = document.getElementById('vehicle_id')

    vehicleDropdown.addEventListener('change', async function() {
        let selectedVeh = this.value
        await checkAvailability(selectedVeh)
    })

    async function checkAvailability(vehId) {
        const availText = document.getElementById('status')
        const nomorPolText = document.getElementById('number_plate')
        const capacityText = document.getElementById('capacity')

        await fetch('/check-vehicle-availability/' + vehId)
        .then(response => response.json())
        .then(data => {
            const veh = data.vehicle
            if(data.available) {
                availText.value = data.message
                nomorPolText.value = veh.nomorPol
                capacityText.value = veh.capacity
            } else {
                availText.value = data.message
                nomorPolText.value = veh.nomorPol
                capacityText.value = veh.capacity
            }
        })
        .catch(err => {console.error(err)})
    }

    const statusDropdown = document.getElementById('loan_status')
    statusDropdown.addEventListener('change', async function() {
        const notes = document.getElementById('notes-input')
        if(statusDropdown.value === "Rejected") {
            await notes.classList.remove('hidden')
        } else {
            await notes.classList.add('hidden')
        }

    })

</script>
@endsection
