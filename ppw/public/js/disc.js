window.addEventListener('selectedRow', function (e) {
    setEditBtn()
    setDeleteBtn()
});



function setEditBtn(){
    $(modalEditBtn).attr("href",`${url}/${getId()}/edit`)
}

function setDeleteBtn(){
    $(modalDeleteBtn).parent().attr("action",`${url }/${getId()}`)
}
