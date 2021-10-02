<?php
return [
    'frontend' => [
        'qbus/cache-status/cache-hit' => [
            'target' => \Qbus\CacheStatus\CacheHit::class,
            'before' => [
                'typo3/cms-frontend/tsfe',
            ],
            'after' => [
                'typo3/cms-frontend/page-argument-validator',
            ],
        ],
    ],
];
