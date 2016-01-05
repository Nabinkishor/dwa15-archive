<?php
namespace susanBuck\Shipping\RateRequest;

abstract class Adapter
{
    protected $curlConnectTimeoutInMilliseconds = 3000;
    protected $curlDownloadTimeoutInSeconds = 11;

    abstract public function execute($url, $data = null);
}
