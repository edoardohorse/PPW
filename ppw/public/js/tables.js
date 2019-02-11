const table = $('#table').DataTable();
let rowSelected = null
const modalCreate = $('#Modal_create')
const modalEdit = $('#Modal_modify')
const modalCreateBtn    = $('button[data-target="#Modal_create"]')
const modalEditBtn      = $('button[data-target="#Modal_modify"]')
const modalDeleteBtn    = $('button[data-target="#Modal_delete"]')



$('#table tbody').on( 'click', 'tr', function () {
    selectRow.call(this)
} );


$('#button').click( function () {
    table.row('.selected').remove().draw( false );
} );


function selectRow(){
    // Deseleziona riga
    if ( $(this).hasClass('selected') ) {
        disableButtons()
        rowSelected = null;
        $(this).removeClass('selected');
    }
    // Seleziona riga
    else {
        rowSelected = $("tr.selected")
        enableButton()
        table.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
    }
}

function disableButtons(){
    modalEditBtn.addClass("disabled")
    modalDeleteBtn.addClass("disabled")
}

function enableButton(){
    modalEditBtn.removeClass("disabled")
    modalDeleteBtn.removeClass("disabled")
}

$(document).ready(function(){
    disableButtons()
})