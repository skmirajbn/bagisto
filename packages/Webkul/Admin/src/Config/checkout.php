<?php

return [
    'checkout' => [
        'address' => [
            'requirements' => [
                'email'   => [
                    'title'         => 'admin::app.configuration.index.checkout.address.requirements.email',
                    'type'          => 'boolean',
                    'channel_based' => true,
                    'default'       => 1,
                ],
            ],
        ],
    ],
];
