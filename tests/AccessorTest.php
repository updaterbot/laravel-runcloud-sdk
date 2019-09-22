<?php

namespace Mindfullsilence\LaravelRuncloudSdk\Test;

use Mindfullsilence\LaravelRuncloudSdk;

class AccessorTest extends TestCase {

    public function testAliasReturnsClient() {
        $accessor = 'runcloud.api';

        $instance = app($accessor);

        $this->assertIsObject($instance);
        $this->assertInstanceOf(LaravelRuncloudSdk\Clients\RuncloudClient::class, $instance);
    }

    public function testFacadeAccessesClient() {
        $instance = LaravelRuncloudSdk\Facades\RuncloudClient::getFacadeRoot();

        $this->assertInstanceOf(LaravelRuncloudSdk\Clients\RuncloudClient::class, $instance);
    }

}