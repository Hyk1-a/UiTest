import './bootstrap';
import * as bootstrap from 'bootstrap';


import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

 document.addEventListener('DOMContentLoaded', function () { const incrementNumberCells = document.querySelectorAll('.increment-number'); let count = {{ ($data->currentPage() - 1) * $data->perPage() + 1 }}; incrementNumberCells.forEach(cell => { cell.innerText = count++; }); });
