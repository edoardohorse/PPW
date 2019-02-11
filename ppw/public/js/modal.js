$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});




modalCreate.on('show.bs.modal', function (e) {
    fetchLayoutCreate( inflateLayout.bind(modalCreate) )
})

modalEdit.on('show.bs.modal', function (e) {

    // debugger
     const id = $('tr.selected').find('td').first().text()
    fetchLayoutEdit( inflateLayout.bind(modalEdit), id)



})

modalEdit.on('hidden.bs.modal', resetModal.bind(modalEdit))
modalCreate.on('hidden.bs.modal', resetModal.bind(modalCreate))



function inflateLayout(layout){
    // debugger
    this.find('.spinner-border').addClass('d-none')
    this.find(".modal-body").html(layout)
}

function fetchLayoutCreate(callback){

    $.ajax({
        method  :   "GET",
        url     :   "/discipline/create",
        success: function(data){
            callback(data)
        },

    })

}

function fetchLayoutEdit(callback, id){
// debugger
    $.ajax({
        method  :   "GET",
        url     :   `/discipline/${id}/edit`,
        success: function(data){
            callback(data)
        },

    })

}


function resetModal(){
    $(this).find('.spinner-border').removeClass('d-none')
}