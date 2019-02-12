window.addEventListener('selectedRow', function (e) {
    setEditBtn()
    setDeleteBtn()
});



function setEditBtn(){
    let url = location.href.substring(0, location.href.indexOf('?'))
    $(modalEditBtn).attr("href",`${url}/${getId()}/edit`)
}

function setDeleteBtn(){
    let url = location.href.substring(0, location.href.indexOf('?'))
    $(modalDeleteBtn).parent().attr("action",`${url}/${getId()}`)
}
