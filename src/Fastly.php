<?php

namespace Erashdan\LaravelFastly;

use Fastly\Fastly as FastlyClient;
use Fastly\Adapter\Guzzle\GuzzleAdapter;

class Fastly implements FastlyInterface
{
    /**
     * @var array
     */
    protected $urls = [];

    /**
     * @var FastlyClient
     */
    protected $fastly;

    public function __construct()
    {
        $adapter = new GuzzleAdapter(config('fastly.api_key'));

        $this->fastly = new FastlyClient($adapter);
    }

    /**
     * Call to clear urls
     *
     * @param $url
     * @param array $options
     * @return bool
     */
    public function purgeUrl($url, $options = [])
    {
        $this->urls = (!is_array($url)) ? [$url] : $url;

        foreach ($this->urls as $url) {
            if (config('fastly.enabled')) {
                $this->fastly->purge($url);
            }
        }

        return true;
    }

    /**
     * @param $service_name
     *
     * Get service id by service name
     *
     * @return \Illuminate\Config\Repository|mixed
     * @throws \Exception
     */
    public function getService($service_name)
    {
        if (!$service_id = config('fastly.services.' . $service_name)) {
            throw new \Exception('Unable to find service');
        }

        return $service_id;
    }

    public function purgeService($service_name)
    {
        $this->fastly->purgeAll(
            $this->getService($service_name)
        );
    }
}