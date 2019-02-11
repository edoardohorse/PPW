<a href="{{route('discipline.create')}}">Crea</a>


<input type="text" id="id">


<form action="/discipline/" method="GET" onsubmit="mostra(event)" id="mostra">
    @csrf

    <input type="submit" value="Visualizza">
</form>


<form action="/discipline/" method="GET" onsubmit="modifica(event)" id="modifica">
    @csrf

    <input type="submit" value="modifica">
</form>

<form action="/discipline/" method="POST" onsubmit="elimina(event)" id="elimina">
    @csrf
    @method("DELETE")

    <input type="submit"  value="elimina">
</form>

<script>

    function mostra(e){
        // debugger
        let v = document.querySelector("#id").value
        e.preventDefault()
        let form = document.querySelector("#mostra")
        form.action = form.action+v
        form.submit()
    }
    function modifica(e){
        // debugger
        let v = document.querySelector("#id").value
        e.preventDefault()
        let form = document.querySelector("#modifica")
        form.action = form.action+v+"/edit"
        form.submit()
    }

    function elimina(e){
        // debugger
        let v = document.querySelector("#id").value
        e.preventDefault()
        let form = document.querySelector("#elimina")
        form.action = form.action+v
        form.submit()
    }

</script>