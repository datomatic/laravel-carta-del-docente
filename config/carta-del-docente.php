<?php

// config for Datomatic/LaravelCartaDelDocente
return [
    'certificatePath' => env('CARTA_DEL_DOCENTE_CERTIFICATE'),
    'certificatePassword' => env('CARTA_DEL_DOCENTE_CERTIFICATE_PASSWORD'),
    'environment' => env('CARTA_DEL_DOCENTE_ENV', config('app.env')),
];
