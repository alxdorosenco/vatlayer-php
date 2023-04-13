<?php

namespace AlxDorosenco\VatlayerPhp\Tests\Feature;

use AlxDorosenco\VatlayerPhp\Http\Exceptions\InvalidAccessKeyException;
use AlxDorosenco\VatlayerPhp\Vatlayer;
use AlxDorosenco\VatlayerPhp\Tests\TestCase;

class RateListTest extends TestCase
{
    public function testFormat()
    {
        $this->expectException(InvalidAccessKeyException::class);

        $this->assertIsString(
            Vatlayer::connect($this->accessKey)
                ->rateList()
                ->setFormat(1)
                ->toJson()
        );
    }
}
