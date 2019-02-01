{{--@include('before_login/include_libraries')--}}

<!--   <label for="inputName">Nome</label>
        <input type="text" class="form-control" id="inputName" placeholder="Nome">

       <label for="inputSurname">Cognome</label>
        <input type="text" class="form-control" id="inputSurname" placeholder="Cognome">

        <label for="inputCity">Città</label>
        <input type="text" class="form-control" id="inputCity" placeholder="ES: Milano">

        <label for="inputProvince">Provincia</label>
        <input type="text" class="form-control" id="inputProvince" placeholder="Es: Brindisi">


        <label for="inputAddress">Indirizzo</label>
        <input type="text" class="form-control" id="inputAddress">

        <label for="inputCap">Cap</label>
        <input type="number" class="form-control" id="inputCap">

        <label for="inputBorn">Data di nascita</label>
        <input type="date" class="form-control" id="inputBorn">

        <label for="inputGender">Genere</label>
        <input  type="text" class="form-control" id="inputGender">


<button type="submit"  onclick="progress()" class="btn btn-primary">Submit</button>
-->
     <div id="example-async">
         <h3>Async Step</h3>
         <section data-mode="async" data-url="/Examples/AsyncContent">
         </section>
         <h3>Second Step</h3>
         <section>
             <p>Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac ligula elementum pellentesque.
                 In lobortis sollicitudin felis non eleifend. Morbi tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum
                 dictum, nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien a diam adipiscing consectetur.
                 In euismod augue ullamcorper leo dignissim quis elementum arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                 Vestibulum leo velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis iaculis nec, malesuada a diam.
                 Donec non pulvinar urna. Aliquam id velit lacus.</p>
         </section>
         <h3>Third Step</h3>
         <section>
             <p>Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo condimentum dapibus. Fusce eros justo,
                 pellentesque non euismod ac, rutrum sed quam. Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat.
                 Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui commodo lectus sollicitudin in auctor mauris
                 venenatis.</p>
         </section>
         <h3>Fourth Step</h3>
         <section>
             <p>Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula vulputate. Aliquam sed sem tortor.
                 Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae.
                 Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo tortor.</p>
         </section>

     </div>
     <script>
         $("#example-async").steps({
             headerTag: "h3",
             bodyTag: "section",
             transitionEffect: "slide"
         });

     </script>

