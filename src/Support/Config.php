<?php

namespace Datomatic\LaravelCartaDelDocente\Support;

use Datomatic\LaravelCartaDelDocente\Exceptions\InvalidConfig;

class Config
{
    public static function getCertificatePath(): string
    {
        if (self::getEnvironment() !== 'production') { return '';}

        $certificatePath = config('carta-del-docente.certificatePath');

        throw_if(empty($certificatePath), InvalidConfig::missingCertificatePath());
        throw_if(! is_string($certificatePath), InvalidConfig::wrongStringParam('certificatePath'));

        $certificatePath = base_path($certificatePath);

        throw_if(! file_exists($certificatePath), InvalidConfig::missingCertificate($certificatePath));

        return $certificatePath;
    }

    public static function getCertificatePassword(): string
    {
        if (self::getEnvironment() !== 'production') { return '';}

        $password = config('carta-del-docente.certificatePassword');

        throw_if(empty($password), InvalidConfig::missingCertificatePassword());
        throw_if(! is_string($password), InvalidConfig::wrongStringParam('certificatePassword'));

        return $password;
    }

    public static function getEnvironment(): string
    {
        $environment = config('carta-del-docente.environment');

        throw_if(! is_string($environment), InvalidConfig::wrongStringParam('environment'));

        return $environment;
    }
}
