<?php

namespace AlxDorosenco\VatlayerPhp\Tests\Unit\Factory;

use AlxDorosenco\VatlayerPhp\Factory\VatlayerFactory;
use AlxDorosenco\VatlayerPhp\Tests\TestCase;

use AlxDorosenco\VatlayerPhp\Factory\Prices\Price;
use AlxDorosenco\VatlayerPhp\Factory\Rates\Rate;
use AlxDorosenco\VatlayerPhp\Factory\Rates\RateList;
use AlxDorosenco\VatlayerPhp\Factory\Types\Types;
use AlxDorosenco\VatlayerPhp\Factory\Validate\Validate;

class VatlayerFactoryTest extends TestCase
{
    public function testPriceMethod()
    {
        $this->assertEquals(new Price(), (new VatlayerFactory())->price());
    }

    public function testRateMethod()
    {
        $this->assertEquals(new Rate(), (new VatlayerFactory())->rate());
    }

    public function testRateListMethod()
    {
        $this->assertEquals(new RateList(), (new VatlayerFactory())->rateList());
    }

    public function testTypesMethod()
    {
        $this->assertEquals(new Types(), (new VatlayerFactory())->types());
    }

    public function testValidateMethod()
    {
        $this->assertEquals(new Validate(), (new VatlayerFactory())->validate());
    }
}
