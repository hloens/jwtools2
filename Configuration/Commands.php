<?php

return [
    'jwtools2:cacheQuery' => [
        'class' => \JWeiland\Jwtools2\Command\CacheQueryCommand::class,
    ],
    'jwtools2:convertpasswords' => [
        'class' => \JWeiland\Jwtools2\Command\ConvertPlainPasswordToHashCommand::class,
    ],
    'jwtools2:executeExtensionUpdate' => [
        'class' => \JWeiland\Jwtools2\Command\ExtensionUpdateCommand::class,
    ],
    'jwtools2:statusreport' => [
        'class' => \JWeiland\Jwtools2\Command\StatusReportCommand::class,
    ],
];
