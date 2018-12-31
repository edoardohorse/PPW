# Uso
Sono usati per immagazzinare metodi pubblici che permettono di soddisfare le route. Tutti i controller sono posizione nella cartella app/Http/Controllers.

# Creare un controller
Si usa artisan
```
php artisan make:controller {nome_controller}
```

---
# Tipi di controller
- Basic Controller
- Middleware Controller
- Resource Controller

## Basic Controller
Classico controller in cui sono definiti metodi chiamati all'interno di una route:
```
Route:get('/home', 'NomeController@NomeMetodo');
```

Un controller del genere può ritornare una semplice stringa, un numero, un array oppure una view. Nei primi tre casi lo si fa quando bisogna rispondere ad una richiesta dal client, cioè una richiesta Ajax o tramite form HTML.


## Middleware Controller

## Resource Controller
```
php artisan make:controller {nome_controller} --resource
```