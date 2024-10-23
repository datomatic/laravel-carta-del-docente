![Laravel-Carta-del-Docente-Dark](branding/dark.png#gh-dark-mode-only)![Laravel-Carta-del-Docente-Light](branding/light.png#gh-light-mode-only)
# Laravel Carta del Docente

[![Latest Version on Packagist](https://img.shields.io/packagist/v/datomatic/laravel-carta-del-docente.svg?style=for-the-badge)](https://packagist.org/packages/datomatic/laravel-carta-del-docente)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/datomatic/laravel-carta-del-docente/fix-php-code-style-issues.yml?label=code%20style&color=5FE8B3&style=for-the-badge)](https://github.com/datomatic/laravel-carta-del-docente/actions/workflows/fix-php-code-style-issues.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/datomatic/laravel-carta-del-docente.svg?style=for-the-badge)](https://packagist.org/packages/datomatic/laravel-carta-del-docente)

Questo è un wrapper Laravel per il pacchetto [datomatic/carta-del-docente](https://github.com/datomatic/carta-del-docente).

## Requisiti

- Laravel >= 9.0
- PHP >= 8.0
- ext-soap

## Installazione

Puoi installare il pacchetto via composer:

```bash
composer require datomatic/laravel-carta-del-docente
```

## Configurazione

Per utilizzare la carta del docente in ambiente di test non serve fare nulla, mentre per generare il certificato per l'ambiente di produzione bisogna seguire la seguente [guida](https://github.com/datomatic/carta-del-docente#come-generare-un-certificato-valido).

In ambiente di produzione dobbiamo andare a inserire questi due valori nel file .env:
- `CARTA_DEL_DOCENTE_CERTIFICATE=` mettendo il path al certificando partendo dalla root del progetto (evitate di metterlo accessibile da esterno, quindi non mettetelo nella cartella public)
- `CARTA_DEL_DOCENTE_CERTIFICATE_PASSWORD` la password del certificato
- opzionalmente `CARTA_DEL_DOCENTE_ENV` perchè di default viene preso `APP_ENV` del progetto

È possibile pubblicare le configurazioni della carta-del-docente con il comando:

```bash
php artisan vendor:publish --tag="laravel-carta-del-docente-config"
```

Questo è il contenuto del file di configurazione pubblicato:

```php
return [
    'certificatePath' => env('CARTA_DEL_DOCENTE_CERTIFICATE'),
    'certificatePassword' => env('CARTA_DEL_DOCENTE_CERTIFICATE_PASSWORD'),
    'environment' => env('CARTA_DEL_DOCENTE_ENV', config('app.env')),
];
```

## Utilizzo

L'utilizzo del pacchetto è molto semplice e si può fare attraverso due modi: facade e service container.
Per i dettagli delle funzioni potete guardare il pacchetto base [datomatic/carta-del-docente](https://github.com/datomatic/carta-del-docente) e la [documentazione ufficiale](https://www.cartadeldocente.istruzione.it/static/Linee%20Guida%20Esercenti.pdf). 

### Facade

La Facade è il metodo più semplice perché basta richiamare `CartaDelDocente` e otteniamo direttamente un client dal quale possiamo staticamente richiamare le funzionalità.

```php
use Datomatic\LaravelCartaDelDocente\Facades\CartaDelDocente;

CartaDelDocente::merchantActivation();
CartaDelDocente::check(1, 'voucher');
CartaDelDocente::confirm(1, 'voucher', 52.5);
```

### Service container

Tramite service container bisogna richiamare la classe `Datomatic\CartaDelDocente\CartaDelDocenteClient` per ottenere l'istanza del client:

```php

use Datomatic\CartaDelDocente\CartaDelDocenteClient;

//Resolve
$client = App::make(CartaDelDocenteClient::class);
$client = app(CartaDelDocenteClient::class);
$client = resolve(CartaDelDocenteClient::class);

//Automatic Injection
public function __construct(public CartaDelDocenteClient $client){}

$client->merchantActivation();
$client->check(1, 'voucher');
$client->confirm(1, 'voucher', 52.5);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Alberto Peripolli](https://github.com/trippo)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
