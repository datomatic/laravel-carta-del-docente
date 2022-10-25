<?php

namespace Datomatic\LaravelCartaDelDocente\Factories;

use Datomatic\CartaDelDocente\CartaDelDocenteClient;
use Datomatic\LaravelCartaDelDocente\Support\Config;
use SoapFault;

class CartaDelDocenteFactory
{
    /**
     * @throws SoapFault
     */
    public static function execute(): CartaDelDocenteClient
    {
        return new CartaDelDocenteClient(
            certificatePath: Config::getCertificatePath(),
            certificatePassword: Config::getCertificatePassword()
        );
    }
}
