let form = $('#form').steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slide"
});
const URL = '/form/'

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});



function fetchStep(title, url){

    form.steps("add", {
        title: title,
        contentMode: "async",
        contentUrl: url
    });
}

