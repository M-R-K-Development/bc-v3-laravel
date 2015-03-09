<?php namespace Mrk\Bc\V3;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class RestClient extends Client
{
    protected $endPoint;
    public $resource;

    public function __construct($baseUrl, $siteId, $token)
    {
        $this->endPoint = sprintf("%s/webresources/api/v3/sites/%s/", $baseUrl, $siteId);
        $this->siteId   = $siteId;
        $this->token    = $token;
        parent::__construct(array(
                'base_url' => $this->endPoint,
                'defaults' => [
                    'headers' => ['Authorization' => $token],
                    ],
            ));
    }

    /**
     * [get description]
     *
     * @param [type] $id     [description]
     * @param array  $params [description]
     *
     * @return [type] [description]
     */
    public function getData($id = null, $params = array())
    {
        $uri = $this->resource;
        if (!is_null($id)) {
            $uri = $uri . '/' . $id;
        }

        if (!empty($params)) {
            $uri .= '?';
            foreach ($params as $key => $value) {
                $uri = $uri . $key . '=' . $value . '&';
            }
        }

        try {
            parent::get($uri);
        } catch (RequestException $e) {
            echo $e->getRequest() . "\n";
            if ($e->hasResponse()) {
                echo $e->getResponse() . "\n";
            }
        }
    }
}
