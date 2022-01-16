window.$ = window.jQuery = require('jquery');
window.Popper = require('popper.js');
require('bootstrap');
require('datatables.net');
require('datatables.net-bs4');

$(function (){
    $('#myTable').DataTable();
})
