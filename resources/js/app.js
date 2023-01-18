require('./bootstrap');
// var Typed = require('./typed.min.js');
// require('../../node_modules/typed.js/lib/typed.min.js');
// require('moment');
// console.log(moment().format());


import Alpine from 'alpinejs';
import swal from 'sweetalert2';

window.moment = require('moment');


window.Alpine = Alpine;
window.swal = swal;

Alpine.start();


