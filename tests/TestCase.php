<?php

namespace AlxDorosenco\VatlayerPhp\Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{

    /**
     * @var string
     */
    protected $url = 'http://apilayer.net/api/';

    /**
     * @var string
     */
    protected $accessKey = 'b199976fdc2d3c7508049e19caff19e8';

    /**
     * @var string
     */
    protected $type = 'price';
}
