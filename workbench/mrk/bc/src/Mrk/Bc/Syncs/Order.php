<?php namespace Mrk\Bc\Syncs;

use Mrk\Bc\Repositories\RemoteLogRepository;
use Mrk\Bc\SiteData;
use Mrk\Bc\V3\Orders as OrderAPI;

class Order
{
    /**
     * Sync Orders since Remote Log Entry
     *
     * @return [type] [description]
     */
    public function sinceRemoteLog()
    {
        $remoteLogRepo = new RemoteLogRepository;
        $remoteLog     = $remoteLogRepo->find('orders');
        $siteData      = SiteData::get();

        $api = new OrderAPI($siteData['url'], $siteData['siteId'], $siteData['token']);

        $response =  $api->getData();
    }
}
