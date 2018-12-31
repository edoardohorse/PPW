@include('test',['name'=>'File'])


        <h2>Provo a scaricare un file o ad inviarlo al server</h2>

        <form action="/testFile" method="POST">
            @csrf
            <input type="file" name="image" value="Seleziona">
            <input type="submit">
        </form>
    </body>
</html>
