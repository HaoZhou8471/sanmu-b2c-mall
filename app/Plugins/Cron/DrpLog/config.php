<?php

use App\Repositories\Common\SanmuRepository;

app(SanmuRepository::class)->pluginsLang('Cron/', __DIR__);

return [
    'code' => 'drp_log',
    'desc' => 'drp_log_desc',
    'author' => 'Sanmumall Team',
    'website' => 'http://www.sanmumall.cn',
    'version' => '1.0.0',
    'config' => [
        ['name' => 'auto_drp_log_count', 'type' => 'select', 'value' => '50']
    ]
];
