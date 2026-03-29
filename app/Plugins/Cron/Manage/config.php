<?php

use App\Repositories\Common\SanmuRepository;

app(SanmuRepository::class)->pluginsLang('Cron/', __DIR__);

return [
    'code' => 'manage',
    'desc' => 'manage_desc',
    'author' => 'Sanmumall Team',
    'website' => 'http://www.ecmoban.com',
    'version' => '1.0.0',
    'config' => [
        ['name' => 'auto_manage_count', 'type' => 'select', 'value' => '5']
    ]
];
