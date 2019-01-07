<div class="links">
    <a href="/home">Home</a>
    <div class="group" data-name="Amministrazione">
        <div class="group" data-name="Personale">
            <a href="{{ GET_VIEW('collab-interni')  ->nameRoute}}">{{GET_VIEW('collab-interni') ->namePage}}</a>
            <a href="{{ GET_VIEW('collab-esterni')  ->nameRoute}}">{{GET_VIEW('collab-esterni') ->namePage}}</a>
            <a href="{{ GET_VIEW('stagisti')        ->nameRoute}}">{{GET_VIEW('stagisti')       ->namePage}}</a>
            <a href="{{ GET_VIEW('insegnanti')      ->nameRoute}}">{{GET_VIEW('insegnanti')     ->namePage}}</a>
        </div>

        <div class="group" data-name="Pagamenti">
            <a href="/amministrazione/pagamenti/effettuati">Effettuati</a>
            <a href="/amministrazione/pagamenti/ricevuti">Ricevuti</a>
        </div>

        <br>
        <a href="/test">Test</a>
    </div>
</div>