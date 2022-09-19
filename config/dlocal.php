<?php

return [
    // BY DEFAULT ITS SANDBOX
    'mode' => env('DLOCAL_MODE', false),
    
    'x_login' => env('DLOCAL_X_LOGIN', 'vq7w9Nwi4U'),
    'x_transkey' => env('DLOCAL_X_TRANSKEY', 'B2sLx6frxy'),
    'smart_api_key' => env('DLOCAL_X_SMART', 'ae32182e-a1a2-43b1-aa8f-bf6fb5e23991'),

    'production' => [
        'secret_key' => env('P_DLOCAL_X_SECRET', 'oRzuAoXs1vF2QUxCmsrU91ghAXgs3DerJ'),
    ],
    
    'sandbox' => [
        'secret_key' => env('T_DLOCAL_X_SECRET', 'KNP6PsQYtxTznWrfngABrgIYtIrOotDGF'),
    ],
];