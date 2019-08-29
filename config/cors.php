<?php

return [

    'supportsCredentials' => false,
    'allowedOrigins' => ['*'],
    'allowedHeaders' => ['Content-Type', 'X-Requested-With', 'Access-Control-Allow-Headers', 'Access-Control-Allow-Origin'],
    'allowedMethods' => ['GET', 'POST', 'PUT', 'DELETE'],
    'exposedHeaders' => ['*'],
    'maxAge' => 2,
    //
];