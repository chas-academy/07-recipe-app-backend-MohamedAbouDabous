<?php

return [

    'supportsCredentials' => false,
    'allowedOrigins' => ['*'],
    'allowedHeaders' => ['Content-Type', 'X-Requested-With', 'Access-Control-Allow-Headers, Origin'],
    'allowedMethods' => ['*'], 
    'exposedHeaders' => ['*'],
    'maxAge' => 2,
    //
];