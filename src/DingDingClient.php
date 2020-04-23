<?php

namespace Supen\DingDing;

use Supen\DingDing\Facades\DingDing;
use Supen\DingDing\ServiceContainer;

class DingDingClient
{
    public $config;
    public $appKey;
    public $appSecret;
    public $dingdingSdk;

    public function __construct(ServiceContainer $app)
    {
        $this->config = $app['config'];
        $this->appKey = $app['config']['AppKey'];
        $this->appSecret = $app['config']['AppSecret'];
        $this->dingdingSdk = new \DingTalkClient(null, null, \DingTalkConstant::$FORMAT_JSON);
    }

    public function execute($requestService)
    {
        $accessToken = DingDing::base()['oauth']->getToken();
        return (object)$this->dingdingSdk->execute($requestService, $accessToken);
    }
}
