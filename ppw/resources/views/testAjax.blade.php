@include('test',['name'=>'Ajax'])

        <h2>Provo ad inviare un form al server</h2>


        <div>
            <h3>GET</h3>
            <input type="text" placeholder="Testo" id="textG">
            <input type="button" value="Invia" onclick="inviaGET()">

            <div id="resultGET"></div>
        </div>

        <div>
            <h3>POST</h3>
            <input type="text" placeholder="Name" name="name">
            <input type="text" placeholder="Surname" name="surname">
            <input type="button" value="Invia" onclick="inviaPOST()">

            <div id="resultPOST"></div>
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>

            function inviaGET(){
                var str = $('#textG').val()
                $.get(`/req/${str}`, function(data, status){
                    var res = "Data: " + data + "\nStatus: " + status;
                    $("#resultGET").text(res)
                    console.log(res);

                });
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            function inviaPOST(){
                var name = $('input[name="name"]').val()
                var surname = $('input[name="surname"]').val()
                $.post('/req', {name:name, surname:surname, }, function(data, status){
                    var res = "Data: " + data + "\nStatus: " + status;
                    $("#resultPOST").text(res)
                    console.log(res);

                });
            }
        </script>
    </body>
    <style>
        div{
            border:1px solid black;
            border-radius: 5px;
            margin:1em;
            padding:1em;
        }

    </style>
</html>
