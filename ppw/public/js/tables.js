const table = $('#table').DataTable();
let rowSelected = null
const modalCreate = $('#Modal_create')
const modalEdit = $('#Modal_modify')
const modalCreateBtn    = $('#redirect_create')
const modalEditBtn      = $('#redirect_edit')
const modalDeleteBtn    = $('#redirect_delete')

const eventDoubleClickRow = document.createEvent('Event');
const eventSelectedRow = document.createEvent('Event');
const eventDeselectedRow = document.createEvent('Event');

eventDoubleClickRow.initEvent('dblclickRow', true, true);
eventSelectedRow.initEvent('selectedRow', true, true);
eventDeselectedRow.initEvent('deselectedRow', true, true);

let url

if(location.search == ""){
    url = location.href
}
else{
    url = location.href.substring(0, location.href.indexOf('?'))
}


function getId(){

    return  table.row(rowSelected).data()[0];
}

$('#table tbody').on( 'dblclick', 'tr', function(){
    window.dispatchEvent(eventDoubleClickRow)
})


$('#table tbody').on( 'click', 'tr', function () {

    // Deseleziona riga
    if ( $(this).hasClass('selected') ) {
        $(this).removeClass('selected');
        window.dispatchEvent(eventDeselectedRow)
    }
    // Seleziona riga
    else {
        table.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        rowSelected = this
        window.dispatchEvent(eventSelectedRow)
    }

    } );



window.addEventListener('selectedRow',enableButtons)
window.addEventListener('deselectedRow',disableButtons)

function disableBtn(btn){
    $(btn).addClass('disabled')
}

function enableBtn(btn){
    $(btn).removeClass('disabled')
}

function disableButtons(data){
    modalEditBtn.addClass("disabled")
    modalDeleteBtn.addClass("disabled")
}

function enableButtons(data){

    modalEditBtn.removeClass("disabled")
    modalDeleteBtn.removeClass("disabled")
}
