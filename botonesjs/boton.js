$(document).ready(function() {
    $('#bootstrap-data-table-export').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy',
            'csv',
            'excel',
            'pdf',
            'print'
        ]
    });
});