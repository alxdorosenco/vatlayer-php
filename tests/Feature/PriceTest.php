<?php

namespace AlxDorosenco\VatlayerPhp\Tests\Feature;

use AlxDorosenco\VatlayerPhp\Http\Exceptions\InvalidAccessKeyException;
use AlxDorosenco\VatlayerPhp\Vatlayer;
use AlxDorosenco\VatlayerPhp\Tests\TestCase;

class PriceTest extends TestCase
{
    public function testAmount()
    {
        $this->expectException(InvalidAccessKeyException::class);

        $this->assertIsString(
            Vatlayer::connect($this->accessKey)
                ->price()
                ->setAmount(100)
                ->setCountryCode('GB')
                ->setType('medical')
                ->setFormat(1)
                ->toJson()
        );
    }
}
