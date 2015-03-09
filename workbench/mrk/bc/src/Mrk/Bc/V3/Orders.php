<?php namespace Mrk\Bc\V3;

class Orders extends RestClient
{
    public function __construct($baseUrl, $siteId, $token)
    {
        parent::__construct($baseUrl, $siteId, $token);
        $this->resource = 'orders';
    }
}
