@include('test',['name'=>'Form'])

        <h2>Provo ad inviare un form al server</h2>

        <form method="GET" action="/reqForm">
            @csrf
            <input type="text" name="testo">
            <input type="submit">
        </form>

        <form method="POST" action="/reqForm">
            @csrf
            <input type="text" name="testo">
            <input type="submit">
        </form>
    </body>
</html>
