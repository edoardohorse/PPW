let form = $('#form')
const URL = '/form/'

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function fetchStep(n, callback = null){
    const step = n
    $.ajax({
        url: `${URL}${n}`,
        method: 'GET',
        success: function(data){
            // console.log(data)
            if(callback)
                callback(step, data)
            // injectLayout(step, data)
        }
    })
}

function injectLayout(n, data){
    debugger
    form.steps("add", {
        title: `Step ${n}`,
        content: data
    });
}


// fetchStep(1, injectLayout)

/*

form.steps({
    title: "Step Title",
    contentMode: "async",
    onInit: function(e, index){
        fetchStep(1)
    }
})*/

form.steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slide"
});