@extends('layout.app')

@section('main')
<x-card>
    <x-slot name="header">Create Ticket For Loan</x-slot>
    <x-slot name="content">
        <form action="{{ route('laptopLoans.store') }}" method="POST" novalidate>
            @csrf
            <div class="mb-6">
                <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input type="text" id="user_id" name="user_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" value="{{ Auth::user()->name }}" readonly>
                @error('user_id')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="laptop_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asset</label>
                <select id="laptop_id" name="laptop_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="none">Select Laptop</option>
                    @foreach ($laptop as $l)
                        <option value={{ $l->id }}>{{ $l->name }}</option>
                    @endforeach
                </select>
                <p class="block mt-3" id="avail-text"></p>
            </div>
            <div id="laptop_detail" class="hidden">
                <div class="mb-6">
                    <label for="processor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Processor</label>
                    <input type="text" id="processor" name="processor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" autocomplete="off" autofocus required readonly>
                </div>
                <div class="mb-6">
                    <label for="ram" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">RAM</label>
                    <input type="text" id="ram" name="ram" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" autocomplete="off" autofocus required readonly>
                </div>
                <div class="flex flex-col justify-between gap-3 md:flex-row">
                    <div class="w-1/2 mb-6">
                        <label for="main" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Main Storage</label>
                        <input type="text" id="main" name="main" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" autocomplete="off" autofocus required readonly>
                    </div>
                    <div class="w-1/2 mb-6">
                        <label for="extend" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Extend Storage</label>
                        <input type="text" id="extend" name="extend" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" autocomplete="off" autofocus required readonly>
                    </div>
                </div>
                <div class="flex flex-col justify-between gap-3 md:flex-row">
                    <div class="w-1/2 mb-6">
                        <label for="vga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">VGA</label>
                        <input type="text" id="vga" name="vga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" autocomplete="off" autofocus required readonly>
                    </div>
                    <div class="w-1/2 mb-6">
                        <label for="monitor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Monitor</label>
                        <input type="text" id="monitor" name="monitor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" autocomplete="off" autofocus required readonly>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-between gap-3 md:flex-row">
                <div class="mb-6 md:w-1/2">
                    <label for="loan_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Peminjaman</label>
                    <input type="date" id="loan_date" name="loan_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" autocomplete="off" required>
                    @error('loan_date')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6 md:w-1/2">
                    <label for="return_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Pengembalian</label>
                    <input type="date" id="return_date" name="return_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" autocomplete="off" required>
                    @error('return_date')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-6">
                <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asset Status</label>
                <input type="text" id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" autocomplete="off" autofocus required readonly>
                @error('status')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="purpose" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tujuan</label>
                <textarea id="purpose" name="purpose" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your description here..."></textarea>
                @error('purpose')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="information" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                <textarea id="information" name="information" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your description here..."></textarea>
                @error('information')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                @enderror
            </div>
            <input type="submit" id="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 cursor-pointer" value="Submit">
        </form>
    </x-slot>
</x-card>

<script>
    // Form input interaction
    const laptopDropdown = document.getElementById('laptop_id')
    const laptopDetail = document.getElementById('laptop_detail')

    const availText = document.getElementById('status')
    const processorText = document.getElementById('processor')
    const ramText = document.getElementById('ram')
    const mainText = document.getElementById('main')
    const extendText = document.getElementById('extend')
    const vgaText = document.getElementById('vga')
    const monitorText = document.getElementById('monitor')
    const statusText = document.getElementById('status')
    const submit = document.getElementById('submit')

    laptopDropdown.addEventListener('change', async function() {
        let selectedlaptop = this.value
        if(selectedlaptop || selectedlaptop !== null) {
            laptopDetail.classList.remove('hidden')
            await checkAvailability(selectedlaptop)
        } else {
            laptopDetail.classList.add('hidden')
        }
    })

    async function checkAvailability(laptopId) {
        try {
            await fetch('/check-laptop-availability/' + laptopId)
            .then(response => response.json())
            .then(data => {
                const laptop = data.laptop
                if(laptop.status === "On Loan") {
                    submit.setAttribute("disabled", true)
                } else {
                    submit.removeAttribute("disabled")
                }

                if(laptop.available) {
                    processorText.value = laptop.processor || ''
                    ramText.value = laptop.ram || ''
                    mainText.value = laptop.main_storage || ''
                    extendText.value = laptop.extend_storage || ''
                    vgaText.value = laptop.vga || ''
                    monitorText.value = laptop.monitor || ''
                    statusText.value = laptop.status || ''
                } else {
                    processorText.value = laptop.processor || ''
                    ramText.value = laptop.ram || ''
                    mainText.value = laptop.main_storage || ''
                    extendText.value = laptop.extend_storage || ''
                    vgaText.value = laptop.vga || ''
                    monitorText.value = laptop.monitor || ''
                    statusText.value = laptop.status || ''
                }
            })
            .catch(e => console.log(e))
        } catch(e) {
            console.log(e)
        }
    }
</script>
@endsection
