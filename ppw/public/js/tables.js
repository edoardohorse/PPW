$(document).ready(function() {
    var table = $('#table').DataTable();

    $('#table tbody').on('click', 'tr', function () {
        var data = table.row( this ).data();
        alert( 'You clicked on '+data[0]+'\'s row' );
    } );
} );
