# Middleware
Sono componenti a livelli che permettono di vietare/permettere l'accesso a 
determinate funzioni (metodi di controller) o a rotte.

Sono utilizzate al momento del login da parte di un utente e sono richiamate alla definizione delle rotte; quest'ultime verranno soddisfatte, cioè permetteranno il lancio del metodo del controller assegnatoli, solo se la procedura di login è andata a buon fine. Viceversa, se per qualche ragione la procedura di login non dovesse andare a buon fine, magari per insufficiente diritto di accesso a quella sezione, è possibile effettuare un redirect ad una view di default (ad esempio quella di login).

    // Per creare un middleware si usa
    php artisan make:middleware MyMiddleware

---
## Dichiariare le middleware (**obbligatorio**)
Per utilizzare le middleware create bisogna dichiararle nel file app\Http\Kernel.php.
A seconda del tipo di middleware bisogna inserire il suo path nell'array specifico

- [Middleware Globali](#Middleware-Globali)
- [Middleware alle Route](#Middleware-alle-Route)
- [Middleware ai Gruppi](#Middleware-ai-Gruppi)

### [Middleware Globali](https://laravel.com/docs/5.7/middleware#global-middleware)
Sono middleware che intervengono a qualunque chiamata HTTP. Sono _definite_ nell'array **middleware** in Kernel.php.

È difficile che si utilizzino middleware di questo tipo dato che ad *ogni* richiesta HTTP vengono invocate ed è inusuale avere una funzionalità che richieda un controllo così eccessivo.

Un possibile utilizzo invece può essere effettuare il controllo di un cockie che contiene il valore della lingua impostato, cioè se su italiano od inglese, quindi restiuisce view adatte alla lingua.


### [Middleware alle Route](https://laravel.com/docs/5.7/middleware#assigning-middleware-to-routes)
Sono più utilizzare dato che sono circoscritte appunto alle route. Diversamente da quelle globali devono essere *definite* nell'array **routeMiddleware**  in Kernel.php. Inoltre devono anche essere richiamate al momento della definizione della route in questione.

    // routes\web.php
    ... ->middleware('auth');
    // oppure, molteplici middleware
    ... ->middleware('auth1', 'auth2');


### [Middleware ai Gruppi](https://laravel.com/docs/5.7/middleware#middleware-groups)
Sono usate per controllare l'accesso di intere sezioni del sito o di funzionalità. Sono _definite_ nell'array **middlewareGroups** in Kernel.php.

    // routes\web.php
    ->middleware('web');
    // oppure
    Route::group(['middleware' => ['web']], ...


---
## [Middleware con Parametri](https://laravel.com/docs/5.7/middleware#middleware-parameters)
I middleware possono ricevere al momento della loro invocazione, ad esempio nelle rotte,  dei parametri. Al momento della definizione del metodo handle bisogna passare le variabili che "accoglieranno" i parametrei

    // app\Http\MyMiddleware.php
    public function handle($request, Closure $next, $param1, $param2)

    // routes\web.php
    ... ->middleware('role:param1,param2');
