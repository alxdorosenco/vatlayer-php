<?php

namespace AlxDorosenco\VatlayerPhp\Tests\Unit\Http;

use AlxDorosenco\VatlayerPhp\Http\Client;
use AlxDorosenco\VatlayerPhp\Http\Exceptions\InvalidAccessKeyException;
use AlxDorosenco\VatlayerPhp\Http\Response;
use AlxDorosenco\VatlayerPhp\Tests\TestCase;

class ClientTest extends TestCase
{
    /**
     * @var Client
     */
    private $client;

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->client = new Client($this->type);
    }

    public function testMakeCurlRequestMethod()
    {
        $url = $this->url . $this->type;
        $url .= '?access_key=wrongKey';

        $request = $this->client->makeCurlRequest($url);

        $this->assertInstanceOf(Response::class, $request);
    }

    public function testSetDataMethod()
    {
        $type = $this->client->setData([]);

        $this->assertEquals($type, $this->client);
    }

    public function testGetMethod()
    {
        $this->expectException(InvalidAccessKeyException::class);

        $this->assertIsString($this->client->get());
    }
}
