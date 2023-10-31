// import './bootstrap';
import 'flowbite';

// create on vehicle
const laptopRadio = document.querySelector('#laptopLoans')
const vehicleRadio = document.querySelector('#vehicleLoans')
const assetSelect = document.getElementById('assets')

laptopRadio.addEventListener('change', async function() {
    if(laptopRadio.checked) {
        await fetch("/api/laptop").then(res => res.json()).then(data => {
            assetSelect.innerHTML = ""

            data.forEach(laptop => {
                let option = document.createElement('option')
                option.value = laptop.id
                option.text = laptop.name;
                assetSelect.appendChild(option)
            });

            console.log(data)
            assetSelect.disabled = false
        }).catch(e => console.error(e))
    }
})

vehicleRadio.addEventListener('change', async function() {
    if(vehicleRadio.checked) {
        await fetch("/api/vehicle").then(res => res.json()).then(data => {
            assetSelect.innerHTML = ""

            data.forEach(vehicle => {
                console.log(vehicle)
                let option = document.createElement('option')
                option.value = vehicle.id
                option.text = vehicle.type;
                assetSelect.appendChild(option)
            });

            console.log(data)
            assetSelect.disabled = false
        }).catch(e => console.error(e))
    }
})

depCheckbox.addEventListener('click', function() {
    showSelect('Department')
})

var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

var themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function() {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

    // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }

});

