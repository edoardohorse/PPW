@include('test',['name'=>'File'])

    {{--
    Link utili:
    https://hdtuto.com/article/laravel-57-multiple-file-upload-with-validation-example
    https://hdtuto.com/article/laravel-5-ajax-multiple-image-upload-with-preview-example
    --}}


        <h2>Provo a scaricare un file o ad inviarlo al server</h2>

        <form action="/testFile" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image" value="Seleziona">
            <input type="submit">

            {{--
                Se sono più file
                <input type="file" name="image[]" value="Seleziona" multiple>
            --}}
        </form>
    </body>
</html>
