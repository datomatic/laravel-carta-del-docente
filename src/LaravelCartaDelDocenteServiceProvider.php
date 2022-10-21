<?php

namespace Datomatic\LaravelCartaDelDocente;

use Datomatic\CartaDelDocente\CartaDelDocenteClient;
use Datomatic\LaravelCartaDelDocente\Factories\CartaDelDocenteFactory;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelCartaDelDocenteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-carta-del-docente')
            ->hasConfigFile();
    }

    public function packageRegistered(): void
    {
        $this->app->singleton( CartaDelDocenteClient::class, fn() => CartaDelDocenteFactory::execute());
    }
}
