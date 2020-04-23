<?php

namespace Supen\DingDing\Base\OAuth;

use Supen\DingDing\DingDingClient;
use Supen\Supports\DataCache;

class Client extends DingDingClient
{
    public function getToken()
    {
        if (DataCache::has($this->appKey))
            return DataCache::get($this->appKey);

        $requestService = new \OapiGettokenRequest();
        $result = (object) $this->dingdingSdk->execute($requestService);

        if($result->errcode == 0)
            DataCache::put($this->appKey, $result, 100);

        return $result;
    }
}
