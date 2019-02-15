const modalShowBtn    = $('#redirect_show')
const modalCourseBtn    = $('#redirect_course')
disableBtn(modalShowBtn)
disableBtn(modalCourseBtn)


window.addEventListener('dblclickRow',function(){
    location.href = setShowBtn( getId())

})

window.addEventListener('selectedRow', function (e) {
    setShowBtn()
    setEditBtn()
    setDeleteBtn()
    setCourseBtn()
});


window.addEventListener('deselectedRow', disableBtn.bind(null,modalShowBtn))
window.addEventListener('deselectedRow', disableBtn.bind(null,modalCourseBtn))

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

function setCourseBtn(){
    enableBtn(modalCourseBtn)
    let redirect = `${url}/${getId()}/course`
    $(modalCourseBtn).attr("href", redirect)
    return redirect
}

function setDeleteBtn(){
    let redirect = `${url }/${getId()}`
    $(modalDeleteBtn).parent().attr("action",redirect)
    return redirect
}


