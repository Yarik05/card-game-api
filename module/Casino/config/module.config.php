<?php
return [
    'controllers' => [
        'factories' => [
            'Casino\\V1\\Rpc\\Ping\\Controller' => \Casino\V1\Rpc\Ping\PingControllerFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'casino.rpc.ping' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/ping',
                    'defaults' => [
                        'controller' => 'Casino\\V1\\Rpc\\Ping\\Controller',
                        'action' => 'ping',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'casino.rpc.ping',
        ],
    ],
    'zf-rpc' => [
        'Casino\\V1\\Rpc\\Ping\\Controller' => [
            'service_name' => 'Ping',
            'http_methods' => [
                0 => 'GET',
            ],
            'route_name' => 'casino.rpc.ping',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'Casino\\V1\\Rpc\\Ping\\Controller' => 'Json',
        ],
        'accept_whitelist' => [
            'Casino\\V1\\Rpc\\Ping\\Controller' => [
                0 => 'application/vnd.casino.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
        ],
        'content_type_whitelist' => [
            'Casino\\V1\\Rpc\\Ping\\Controller' => [
                0 => 'application/vnd.casino.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
];
