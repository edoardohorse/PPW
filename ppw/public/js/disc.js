const modalShowBtn    = $('#redirect_show')
disableBtn(modalShowBtn)

window.addEventListener('dblclickRow',function(){
    location.href = setShowBtn( getId())

})

window.addEventListener('selectedRow', function (e) {
    setShowBtn()
    setEditBtn()
    setDeleteBtn()
});


window.addEventListener('deselectedRow', disableBtn.bind(null,modalShowBtn))

function setShowBtn(){
    let redirect = `${url}/${getId()}`
    $(modalShowBtn).attr("href", redirect)
    enableBtn(modalShowBtn)
    return redirect
}

function setEditBtn(){
    let redirect = `${url}/${getId()}/edit`
    $(modalEditBtn).attr("href", redirect)
    return redirect
}

function setDeleteBtn(){
    let redirect = `${url }/${getId()}`
    $(modalDeleteBtn).parent().attr("action",redirect)
    return redirect
}
