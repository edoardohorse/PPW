# [Route](https://laravel.com/docs/5.7/routing)
Permettono di accogliere tutte le richieste HTTP rivolte al server. In esse ci sono richieste sincrone come pagine web (routing) o form in POST, richieste asincrone (ajax).
Queste possono essere [raggruppate](https://laravel.com/docs/5.7/routing#route-groups) tramite un prefisso in modo tale da organizzarle per sezioni del sito.

    Route::prefix('{nome_gruppo}')->group(function(){
         // definizione rotte con prefisso prima definito
    }
Le rotte possono soddisfare richieste GET e POST, oppure altre più specifiche (PUT, DELETE,...).

    Route::get('url', function(){})   oppure  Route::get('url', 'NomeController@metodo')
    Route::post('url', function(){})  oppure  Route::post('url', 'NomeController@metodo')
---
## [Route parameters](https://laravel.com/docs/5.7/routing#route-parameters)
Possono essere passati parametri alle rotte direttamente nell'url.

    Route::get('user/{id}', function ($id) {
        return 'User '.$id;
    });

- Possono essere anche opzionali i parametri, basta postporre il parametro con un ?, (es.: {id?})
- La sintassi dei parametri può essere controllata con le espressioni regolari definite tramite la clausola where.
```
... ->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
```
<<<<<<< HEAD

=======
---
>>>>>>> master
## [Named Routes](https://laravel.com/docs/5.7/routing#named-routes)
Le rotte possono essere nominate in modo tale da generare url.

    ... ->name('profile');

<<<<<<< HEAD
=======
Ha senso dare il nome alle rotte perché permette di eseguire redirect in modo 
più astratto ad esempio:

    //web.php
    Route::view('contatti','contatti')->name('contatti');

    // index.blade.php
    <a href="{{ route('contatti') }}">Contatti</a>
    // oppure 
    <a href="{{ route('contatti', [], false) }}">Contatti</a>

Senza ricordare il nome della pagine blade (view) è possibile usare il metodo route,
inoltre tramite il secondo ed il terzo parametro si può passare alla vista contatti
un array di dati e indicare con il booleano se usare un path assoluto o meno.
Il nome alle rotte può essere dato anche tramite i [gruppi](https://laravel.com/docs/5.7/routing#route-group-name-prefixes) (prefisso)

    Route::name('admin.')->group(function () {
        Route::get('users', function () {
            // Route assigned name "admin.users"...
        })->name('users');
    });

### [Redirect a Named Routes](https://laravel.com/docs/5.7/responses#redirecting-named-routes)
Si possono effettuare anche redirect tramite il nome delle rotte

---

>>>>>>> master
## [Fallback Routes](https://laravel.com/docs/5.7/routing#fallback-routes)
Sono route che permettono di risolvere le richieste inattese come errore 404

