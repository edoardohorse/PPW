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
    },
    onStepChanging: function(event, currentIndex, newIndex){
        // debugger
        if(newIndex == 1){
            fetchHour()
            return true;
        }

        resetSpinner();
        return true;
    }
});

function fetchHour(){
    $.get(ROUTECORSO,
        {
            dataStart   :dataInizio.value,
            dataEnd     :dataFine.value,
            courseId    :courses.value},
        function(data, status){
            // console.log(data);
            hideSpinner();
            document.querySelector('#costo').innerHTML = `€${data.cost*data.hour}`;
            document.querySelector('#costo').value = data.cost*data.hour;
            document.querySelector('#lezioni').innerHTML = `${data.hour}`;
        });
}

const dataInizio = document.querySelector('input[name="data_inizio"]')
const dataFine = document.querySelector('input[name="data_fine"]')
const courses= document.querySelector('#course')

function resetSpinner(){
    $('#spinner').removeClass('d-none');
    $('#step2').addClass('d-none');
}

function hideSpinner(){
    $('#spinner').addClass('d-none');
    $('#step2').removeClass('d-none');

}