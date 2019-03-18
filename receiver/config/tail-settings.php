<?php

return [
    'default' => 'rabbitmq',
    'connections' => [
        'rabbitmq' => [
            'host'                => 'rabbitmq',
            'port'                => 5672,
            'username'            => 'guest',
            'password'            => 'guest',
            'vhost'               => '/',
            'exchange'            => 'default_exchange_name',
            'consumer_tag'        => 'consumer',
            'exchange_type'       => 'direct',
            'content_type'        => 'application/json'
        ]
    ],
];
