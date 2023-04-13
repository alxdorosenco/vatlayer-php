<?php

namespace AlxDorosenco\VatlayerPhp\Tests\Unit\Factory\Rates;

use AlxDorosenco\VatlayerPhp\Factory\Rates\Rate;
use AlxDorosenco\VatlayerPhp\Tests\TestCase;

class RateTest extends TestCase
{
    /**
     * @var Rate
     */
    private $rate;

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->rate = new Rate();
    }

    public function testSetCountryCodeMethod()
    {
        $type = $this->rate->setCountryCode('GB');

        $this->assertEquals($this->rate, $type);
        $this->assertEquals('GB', $this->rate->getData()['country_code']);
    }

    public function testSetIpAddressMethod()
    {
        $type = $this->rate->setIpAddress('176.249.153.36');

        $this->assertEquals($this->rate, $type);
        $this->assertEquals('176.249.153.36', $this->rate->getData()['ip_address']);
    }

    public function testSetClientIpCodeMethod()
    {
        $type = $this->rate->setClientIp(1);

        $this->assertEquals($this->rate, $type);
        $this->assertEquals(1, $this->rate->getData()['client_ip']);
    }

    public function testSetFormatMethod()
    {
        $type = $this->rate->setFormat(1);

        $this->assertEquals($this->rate, $type);
        $this->assertEquals(1, $this->rate->getData()['format']);
    }

    public function testGetDataMethod()
    {
        $this->rate
            ->setCountryCode('GB')
            ->setIpAddress('176.249.153.36')
            ->setClientIp(1);

        $data = $this->rate->getData();

        $this->assertIsArray($data);
        $this->assertEquals([
            'country_code' => 'GB',
            'ip_address' => '176.249.153.36',
            'client_ip' => 1
        ], $data);
    }

    public function testGetTypeMethod()
    {
        $type = $this->rate->getType();

        $this->assertIsString($type);
        $this->assertEquals('rate', $type);
    }
}