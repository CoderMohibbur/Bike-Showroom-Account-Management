import './bootstrap';
import 'flowbite';
import 'alpinejs';
// Import jQuery and make it globally accessible
import $ from 'jquery';
window.$ = window.jQuery = $;

// Import Bootstrap and DataTables
import './bootstrap';
import 'datatables.net';
import 'datatables.net-dt/css/dataTables.dataTables.css';

// Import DataTables Buttons Extension
import 'datatables.net-buttons/js/dataTables.buttons.min.js';
import 'datatables.net-buttons-dt/css/buttons.dataTables.css';

// Import Buttons for Excel, PDF, Copy, and Print
import jszip from 'jszip';
window.JSZip = jszip; // Required for Excel export

import pdfMake from 'pdfmake/build/pdfmake';
import pdfFonts from 'pdfmake/build/vfs_fonts';
// pdfMake.vfs = pdfFonts.pdfMake.vfs; // Required for PDF export

import 'datatables.net-buttons/js/buttons.html5.min.js'; // HTML5 export buttons
import 'datatables.net-buttons/js/buttons.print.min.js'; // Print button
import 'datatables.net-buttons/js/buttons.colVis.min.js'; // Column visibility button


    // $('#ledgerTable').DataTable({
    //     responsive: true,
    //     paging: true,
    //     searching: true,
    //     ordering: true,
    //     language: {
    //         search: "Search entries:",
    //         lengthMenu: "Show _MENU_ entries",
    //         info: "Showing _START_ to _END_ of _TOTAL_ entries",
    //         infoEmpty: "No entries available",
    //         paginate: {
    //             previous: "Previous",
    //             next: "Next"
    //         }
    //     }
    // });

    $('#ledgerTable').DataTable({

        responsive: true,
        autoWidth: true,
        scrollX: true,
        layout: {
            topEnd: ['search'],
            topStart: {
                pageLength: true,
                buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5', 'colvis', 'print']
            }
        }
    });

    // Initialize DataTable for expensesTable
    $('#expensesTable').DataTable({
        responsive: true,
        autoWidth: true,
        scrollX: true,
        layout: {
            topEnd: ['search'],
            topStart: {
                pageLength: true,
                // buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5', 'colvis', 'print']
            }
        }
    });


    $(document).ready(function() {
        $('#ledgerTable').DataTable();
    });


    $(document).ready(function() {
        $('#bikeLedgerTable').DataTable();
    });
