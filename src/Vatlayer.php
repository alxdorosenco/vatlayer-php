<?php

namespace AlxDorosenco\VatlayerPhp;

use AlxDorosenco\VatlayerPhp\Factory\VatlayerFactory;
use AlxDorosenco\VatlayerPhp\Http\Connection;

class Vatlayer
{
    /**
     * @param string $accessKey
     * @return \AlxDorosenco\VatlayerPhp\Factory\VatlayerFactory
     */
    public static function connect(string $accessKey): VatlayerFactory
    {
        Connection::getInstance()->setAccessKey($accessKey);

        return new VatlayerFactory();
    }
}