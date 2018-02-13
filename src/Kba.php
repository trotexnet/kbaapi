<?php
namespace Cierra\Kbaapi;

use GuzzleHttp\Client;

/**
 * Class Kba
 * @package cierra\Kbaapi
 */
class Kba {

    /**
     * @var \Illuminate\Config\Repository|mixed
     */
    protected $baseurl;
    /**
     * @var \Illuminate\Config\Repository|mixed
     */
    protected $token;

    /**
     * @var Client
     */
    protected $client;

    /**
     * Kba constructor.
     */
    public function __construct()
    {
        $this->baseurl = config('kbaapi.baseurl');
        $this->token = config('kbaapi.token');
        $this->client = new Client();
    }

    /**
     * @param $hsn
     * @param $tsn
     * @return string
     */
    public function get($hsn, $tsn)
    {
        $res = $this->client->request('GET', $this->getBaseurl() . "/datas/$hsn/$tsn?api_token=$this->token");
        $data = $res->getBody();
        return $data;
    }

    public function validate($hsn, $tsn)
    {
        $res = $this->client->request('GET', $this->getBaseurl() . "/datas/$hsn/$tsn/validate?api_token=$this->token");
        $statuscode = $res->getStatusCode();
        return $statuscode;
    }

    /**
     * @return \Illuminate\Config\Repository|mixed
     */
    public function getBaseurl()
    {
        return $this->baseurl;
    }

    /**
     * @return \Illuminate\Config\Repository|mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     *
     */
    public function all()
    {

        $res = $this->client->request('GET', $this->getBaseurl() . "/kbas?api_token=$this->token");
        $data = $res->getBody();
        return $data;
    }

    /**
     * @param \Illuminate\Config\Repository|mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @param \Illuminate\Config\Repository|mixed $baseurl
     */
    public function setBaseurl($baseurl)
    {
        $this->baseurl = $baseurl;
    }
}