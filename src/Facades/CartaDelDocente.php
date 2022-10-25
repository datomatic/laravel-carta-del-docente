<?php

namespace Datomatic\LaravelCartaDelDocente\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \SoapClient client()
 * @method static \Datomatic\CartaDelDocente\CartaDelDocenteResponse check(string|int $operationType, string $voucher)
 * @method static \Datomatic\CartaDelDocente\CartaDelDocenteResponse merchantActivation()
 * @method static bool confirm(string|int $operationType, string $voucher, float $amount)
 *
 * @see \Datomatic\LaravelCartaDelDocente\CartaDelDocenteClient
 */
class CartaDelDocente extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Datomatic\CartaDelDocente\CartaDelDocenteClient::class;
    }
}
