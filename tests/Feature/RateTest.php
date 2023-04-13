<?php

namespace AlxDorosenco\VatlayerPhp\Tests\Feature;

use AlxDorosenco\VatlayerPhp\Http\Exceptions\InvalidAccessKeyException;
use AlxDorosenco\VatlayerPhp\Vatlayer;
use AlxDorosenco\VatlayerPhp\Tests\TestCase;

class RateTest extends TestCase
{
    public function testCountryCode()
    {
        $this->expectException(InvalidAccessKeyException::class);

        $this->assertIsArray(
            Vatlayer::connect($this->accessKey)
                ->rate()
                ->setCountryCode('GB')
                ->toArray()
        );
    }

    public function testIpAddress()
    {
        $this->expectException(InvalidAccessKeyException::class);

        $this->assertIsArray(
            Vatlayer::connect($this->accessKey)
                ->rate()
                ->setIpAddress('176.249.153.36')
                ->toArray()
        );
    }

    public function testClientIp()
    {
        $this->expectException(InvalidAccessKeyException::class);

        $this->assertIsArray(
            Vatlayer::connect($this->accessKey)
                ->rate()
                ->setIpAddress('176.249.153.36')
                ->setClientIp(1)
                ->setFormat(1)
                ->toArray()
        );
    }
}
