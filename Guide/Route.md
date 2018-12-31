#[Route](https://laravel.com/docs/5.7/routing)
Permettono di accogliere tutte le richieste HTTP rivolte al server. In esse ci sono richieste sincrone come pagine web (routing) o form in POST, richieste asincrone (ajax).
Queste possono essere [raggruppate](https://laravel.com/docs/5.7/routing#route-groups) tramite un prefisso in modo tale da organizzarle per sezioni del sito.

    Route::prefix('{nome_gruppo}')->group(function(){
         // definizione rotte con prefisso prima definito
    }
Le rotte possono soddisfare richieste GET e POST, oppure altre più specifiche (PUT, DELETE,...).

    Route::get('url', function(){})   oppure  Route::get('url', 'NomeController@metodo')
    Route::post('url', function(){})  oppure  Route::post('url', 'NomeController@metodo')
---
##[Route parameters](https://laravel.com/docs/5.7/routing#route-parameters)
Possono essere passati parametri alle rotte direttamente nell'url.

    Route::get('user/{id}', function ($id) {
        return 'User '.$id;
    });

- Possono essere anche opzionali i parametri, basta postporre il parametro con un ?, (es.: {id?})
- La sintassi dei parametri può essere controllata con le espressioni regolari definite tramite la clausola where.
```
... ->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
```

##[Named Routes](https://laravel.com/docs/5.7/routing#named-routes)
Le rotte possono essere nominate in modo tale da generare url.

    ... ->name('profile');

##[Fallback Routes](https://laravel.com/docs/5.7/routing#fallback-routes)
Sono route che permettono di risolvere le richieste inattese come errore 404

