<?php

return [
    'default'       => 'main',


    'connections'   => [
        'main'          => [
            'key'           => env('RUNCLOUD_PUBLIC_KEY'),
            'secret'        => env('RUNCLOUD_SECRET_KEY')
        ]
    ]
];