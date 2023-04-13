<?php

namespace AlxDorosenco\VatlayerPhp\Tests\Feature;

use AlxDorosenco\VatlayerPhp\Vatlayer;
use AlxDorosenco\VatlayerPhp\Tests\TestCase;
use AlxDorosenco\VatlayerPhp\Http\Exceptions\InvalidAccessKeyException;

class ValidateTest extends TestCase
{
    public function testValidateVatNumber()
    {
        $this->expectException(InvalidAccessKeyException::class);

        $this->assertIsArray(
            Vatlayer::connect($this->accessKey)
                ->validate()
                ->setVatNumber('LU26375245')
                ->toArray()
        );
    }

    public function testValidateCallback()
    {
        $this->assertIsString(
            Vatlayer::connect($this->accessKey)
                ->validate()
                ->setVatNumber('LU26375245')
                ->setCallback('CALLBACK_FUNCTION')
                ->setFormat(1)
                ->toJson()
        );
    }
}
