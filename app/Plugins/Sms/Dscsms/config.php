<?php

use App\Repositories\Common\SanmuRepository;

app(SanmuRepository::class)->pluginsLang('Sms/', __DIR__);

return [
    'code' => 'sanmusms', // code
    // 描述对应的语言项
    'description' => 'sanmusms_desc',
    'version' => '1.0', // 版本号
    // 网址
    'website' => 'https://www.sanmumall.cn/',
    'sort' => '0', // 默认排序
    // 配置
    'sms_configure' => [
        ['name' => 'sanmu_appkey', 'type' => 'text', 'value' => ''],
        ['name' => 'sanmu_appsecret', 'type' => 'text', 'value' => '', 'encrypt' => true],
    ]
];
