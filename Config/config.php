<?php

return [
    'name'        => 'Queue Progress',
    'description' => 'Email queue watcher for Mautic.',
    'version'     => '1.0.0',
    'author'      => 'Alan Mosko',
    'routes'      => [
        'main' => [
            'am_queue_progress' => [
                'path'       => '/queueprogress',
                'controller' => 'AMQueueProgressBundle:QueueProgress:queueprogress',
            ],
        ],
    ],
    'menu'        => [
        'main' => [
            'priority' => -1,
            'items'    => [
                'mautic.plugin.queueprogress.title' => [
                    'route'     => 'am_queue_progress',
                    'id'        => 'plugin_am_queueprogress',
                    'iconClass' => 'fa-envelope',
                ],
            ],
        ],
    ],
];
