import './bootstrap';
import 'flowbite';
<<<<<<< HEAD
import { createApp } from 'vue'

import App from '../views/layout/app.vue'

createApp(App).mount('#app')
=======

// create on vehicle
const userCheckbox = document.querySelector('#user')
const depCheckbox = document.querySelector('#department')


userCheckbox.addEventListener('click', function() {
    showSelect('Users')
})

depCheckbox.addEventListener('click', function() {
    showSelect('Department')
})

function showSelect(model) {
    // Hapus select yang sudah ada
    var select = document.querySelector('select[name="pic"]');
    select.parentNode.removeChild(select);

    // sembunyikan daftar option
    const pic = document.querySelector('#pic')

    pic.style.display = 'hidden'

    // Buat select baru
    var newSelect = document.createElement('select');
    newSelect.name = 'pic';
    newSelect.classList.add('bg-gray-50');
    newSelect.classList.add('border');
    newSelect.classList.add('border-gray-300');
    newSelect.classList.add('text-gray-900');
    newSelect.classList.add('text-sm');
    newSelect.classList.add('rounded-lg');
    newSelect.classList.add('focus:ring-blue-500');
    newSelect.classList.add('focus:border-blue-500');
    newSelect.classList.add('block');
    newSelect.classList.add('w-full');
    newSelect.classList.add('p-2.5');
    newSelect.classList.add('dark:bg-gray-700');
    newSelect.classList.add('dark:border-gray-600');
    newSelect.classList.add('dark:placeholder-gray-400');
    newSelect.classList.add('dark:text-white');
    newSelect.classList.add('dark:focus:ring-blue-500');
    newSelect.classList.add('dark:focus:border-blue-500');

    // Tambahkan option ke select baru
    var options = [];
    if (model === 'Users') {
      // Ambil data dari model Users
      var users = {{ $user }} // Anda dapat mengganti variabel `$user` dengan data dari model Users yang Anda inginkan
      for (var i = 0; i < users.length; i++) {
        var user = users[i];
        var option = document.createElement('option');
        option.value = user.id;
        option.textContent = user.name;
        options.push(option);
      }
    } else if (model === 'Department') {
      // Ambil data dari model Department
      var departments = {{ $dep }} // Anda dapat mengganti variabel `$dep` dengan data dari model Department yang Anda inginkan
      for (var i = 0; i < departments.length; i++) {
        var department = departments[i];
        var option = document.createElement('option');
        option.value = department.id;
        option.textContent = department.name;
        options.push(option);
      }
    }

    // Tambahkan option ke select baru
    for (var i = 0; i < options.length; i++) {
      newSelect.appendChild(options[i]);
    }

    // Tambahkan select baru ke DOM
    document.querySelector('.mb-6').appendChild(newSelect);
  }
>>>>>>> vehicleCRUD
