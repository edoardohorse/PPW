window.addEventListener('selectedRow', function (e) {
    setEditBtn()
    setDeleteBtn()
});

function getId(){
    return  table.cell('.selected', 0).data();
}


function setEditBtn(){
    $(modalEditBtn).attr("href",`${location.href}/${getId()}/edit`)
}

function setDeleteBtn(){
    $(modalDeleteBtn).parent().attr("action",`${location.href}/${getId()}`)
}
