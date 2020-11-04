<?php

return [

    'namespace'       => env('CONTACT_COMPONENT_NAMESPACE', ''),

    'models'          => [
        'contact' =>        App\Contacts::class,
    ],

    'transformers'    => [
        'contact' =>        App\Transformers\ContactTransformer::class,
    ],

    'auth_middleware' => [
        'admin'    => [
            // [
            //     'middleware' => '',
            //     'except'     => [],
            // ],
        ],
        'frontend' => [
            // [
            //     'middleware' => '',
            //     'except'     => [],
            // ],
        ],
    ],

];
