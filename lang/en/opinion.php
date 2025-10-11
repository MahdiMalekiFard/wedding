<?php

return [
    'model'         => 'Opinion',
    'permissions'   => [
    ],
    'exceptions'    => [
        'published_at_after_now' => 'The date must be after now',
    ],
    'validations'   => [
    ],
    'enum'          => [
    ],
    'notifications' => [
    ],
    'page'          => [
    ],
];
