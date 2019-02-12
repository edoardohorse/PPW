window.addEventListener('selectedRow', function (e) {
    setEditBtn()
    setDeleteBtn()
});



function setEditBtn(){
    $(modalEditBtn).attr("href",`${location.href}/${getId()}/edit`)
}

function setDeleteBtn(){
    $(modalDeleteBtn).parent().attr("action",`${location.href}/${getId()}`)
}
