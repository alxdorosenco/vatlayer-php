<?php

namespace AlxDorosenco\VatlayerPhp\Http;

use Exception;

class Connection
{
    /**
     * @var Connection
     */
    private static $instance;

    /**
     * @var string
     */
    private $accessKey;

    /**
     * @return Connection
     */
    public static function getInstance(): Connection
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @param string $accessKey
     * @return $this
     */
    public function setAccessKey(string $accessKey): Connection
    {
        $this->accessKey = $accessKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccessKey(): string
    {
        return $this->accessKey;
    }

    private function __construct(){}

    private function __clone(){}

    public function __wakeup()
    {
        throw new Exception("Cannot unserialize singleton");
    }
}