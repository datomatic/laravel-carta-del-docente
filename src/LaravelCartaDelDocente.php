<?php

namespace Datomatic\LaravelCartaDelDocente;

use Datomatic\CartaDelDocente\CartaDelDocenteClient;

class LaravelCartaDelDocente
{
    public function __construct(protected CartaDelDocenteClient $cartaDelDocenteClient)
    {
    }

    public function __call(string $function, $args): mixed
    {
        return $this->cartaDelDocenteClient->$function(...$args);
    }
}
