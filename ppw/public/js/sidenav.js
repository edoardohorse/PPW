$("#collapseManagment").detach().appendTo($("a[href='#collapseManagment']").parent())
$("#collapseManagmentStaff").detach().appendTo($("a[href='#collapseManagmentStaff']").parent())
$("#collapseManagmentPayments").detach().appendTo($("a[href='#collapseManagmentPayments']").parent())


$("#collapseSecretariat").detach().appendTo($("a[href='#collapseSecretariat']").parent())
$("#collapseSecretariatMembers").detach().appendTo($("a[href='#collapseSecretariatMembers']").parent())
$("#collapseSecretariatVendors").detach().appendTo($("a[href='#collapseSecretariatVendors']").parent())

$("#collapseMngactivity").detach().appendTo($("a[href='#collapseMngactivity']").parent())


$("#collapseReportStats").detach().appendTo($("a[href='#collapseReportStats']").parent())


const active = $(`a[href*='${location.pathname}']`)
const activeParent = active.parent().parent()
active.addClass('active')

var path = location.pathname.split('/')
path.shift();
path.shift();
path.pop();

let pathstr = ""
for(i=0;i<path.length;i++){
    // debugger
    pathstr += capitalizeFirstLetter(path[i])
    $('#collapse'+pathstr).addClass('show')


    $('#collapse' + pathstr).on('hide.bs.collapse', function (e) {

        // debugger
        if ($(e.target).is(activeParent) || $(e.target).prev().hasClass('level-1'))
            e.preventDefault()
    })



}

function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}


$('#menu > .hamburger').on('click', function(){
    $('#menu').toggleClass('show')
    $('body').toggleClass('overlay')
})