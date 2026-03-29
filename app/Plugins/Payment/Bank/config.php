<?php

use App\Repositories\Common\SanmuRepository;

app(SanmuRepository::class)->pluginsLang('Payment', __DIR__);

return [
    // 代码
    'code' => 'bank',

    // 描述对应的语言项
    'desc' => 'bank_desc',

    // 是否支持货到付款
    'is_cod' => '0',

    // 是否支持在线支付
    'is_online' => '0',

    // 作者
    'author' => 'Sanmumall Team',

    // 网址
    'website' => 'http://www.ecmoban.com',

    // 版本号
    'version' => '1.0.0',

    // 配置信息
    'config' => []
];
