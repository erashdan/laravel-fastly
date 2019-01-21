<?php

namespace Erashdan\LaravelFastly\Test;

use Erashdan\LaravelFastly\FastlyInterface;
use Fastly\FastlyFake as FastlyFaker;
use PHPUnit\Framework\Assert;

class FastlyFake implements FastlyInterface
{

    protected $calls = 0;
    protected $urls = [];

    public function __construct()
    {
        $this->faker = new FastlyFaker();
    }

    public function purgeUrl($url,$options = [])
    {
        $this->urls = (!is_array($url)) ? [$url] : $url;

        foreach ($this->urls as $signleUrl) {
            $this->faker->purge($signleUrl, $options);
        }

        return true;
    }

    public function assertCall($url)
    {
        $this->urls = (!is_array($url)) ? [$url] : $url;

        Assert::assertEquals(count($url), $this->numberOfCalls());
    }

    private function numberOfCalls()
    {
        $number = -1;

        do {
            $number++;
            $calls = $this->faker->getCall($number);
        } while (!empty($calls));

        return $number;
    }


}