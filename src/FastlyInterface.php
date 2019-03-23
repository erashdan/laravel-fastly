<?php

namespace Erashdan\LaravelFastly;


interface FastlyInterface
{
    public function getService($service_name);

    public function purgeUrl($url, $options = []);

    public function purgeService($service_id);

    public function callUrl($url);

    public function purgeAndCall($url);
}