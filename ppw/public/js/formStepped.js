$("form.form-group").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "fade",
    transitionEffectSpeed: "250ms",
    autoFocus: true,
    saveState: true,

    labels: {
        cancel: "Annulla",
        current: "Prossimo step:",
        pagination: "Pagination",
        finish: "Invia",
        next: "Avanti",
        previous: "Indietro",
        loading: "Caricamento ..."
    },

    onFinished: function(){
        if($("form.form-group").attr('method') == 'GET')
            location.href = $("form").attr('action')
        else
            $("form.form-group").submit()
    }
});
