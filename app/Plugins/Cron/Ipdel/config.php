<?php

use App\Repositories\Common\SanmuRepository;

app(SanmuRepository::class)->pluginsLang('Cron/', __DIR__);

return [
    'code' => 'ipdel',
    'desc' => 'ipdel_desc',
    'author' => 'Sanmumall Team',
    'website' => 'http://www.ecmoban.com',
    'version' => '1.0.0',
    'config' => [
        ['name' => 'ipdel_day', 'type' => 'select', 'value' => '30']
    ]
];
