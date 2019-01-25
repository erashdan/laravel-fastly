<?php

namespace Erashdan\LaravelFastly\Test;


use Erashdan\LaravelFastly\Facades\Fastly;

class FastlyTest extends TestCase
{
    /** f@test **/
    public function fastly_can_remove_single_url() {
        Fastly::fake();

        Fastly::purgeUrl('single-url');

        Fastly::assertCall('single-url');
    }
    
    /** @test **/
    public function fastly_can_remove_multiple_urls() {
        Fastly::fake();

        $urls = ['first-url', 'second-url'];

        Fastly::purgeUrl($urls);

        Fastly::assertCall();
    }


    /** @test **/
    public function fastly_can_remove_purge_by_service_id() {
        Fastly::fake();

        Fastly::purgeService('ANY_SERVICE');

        Fastly::assertPurgeService();
    }
}
