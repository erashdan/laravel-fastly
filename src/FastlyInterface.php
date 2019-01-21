<?php

namespace Erashdan\LaravelFastly;


interface FastlyInterface
{
    public function purgeUrl($url, $options = []);
}