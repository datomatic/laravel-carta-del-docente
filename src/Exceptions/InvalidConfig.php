<?php

namespace Datomatic\LaravelCartaDelDocente\Exceptions;

use RuntimeException;

class InvalidConfig extendS RuntimeException
{
    public static function missingCertificate(string $path): self
    {
        return new self("The certificate file missing '$path'");
    }

    public static function missingCertificatePath(): self
    {
        return new self("You need to set certificate on carta-del-docente.php config file");
    }

    public static function missingCertificatePassword(): self
    {
        return new self("You need to set certificate password on carta-del-docente.php config file");
    }

    public static function wrongStringParam(string $param): self
    {
        return new self("The param $param on carta-del-docente.php config file must be a string");
    }
}
