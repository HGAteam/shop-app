<?php

return [
    // BY DEFAULT ITS SANDBOX
    'mode' => env('DLOCAL_MODE', false),
    
    'x_login' => env('DLOCAL_X_LOGIN', 'HOLlsw61VS'),
    'x_transkey' => env('DLOCAL_X_TRANSKEY', 'gmk5Zryyus'),
    'smart_api_key' => env('DLOCAL_X_SMART', 'bb584933-e846-4ff7-90b5-0f2c18dd9e25'),
    'production' => [
        'secret_key' => env('P_DLOCAL_X_SECRET', 'oRzuAoXs1vF2QUxCmsrU91ghAXgs3DerJ'),
    ],
    'sandbox' => [
        'secret_key' => env('T_DLOCAL_X_SECRET', 'KNP6PsQYtxTznWrfngABrgIYtIrOotDGF'),
    ],
];