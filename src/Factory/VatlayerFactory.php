<?php

namespace AlxDorosenco\VatlayerPhp\Factory;

use AlxDorosenco\VatlayerPhp\Factory\Prices\Price;
use AlxDorosenco\VatlayerPhp\Factory\Rates\Rate;
use AlxDorosenco\VatlayerPhp\Factory\Rates\RateList;
use AlxDorosenco\VatlayerPhp\Factory\Types\Types;
use AlxDorosenco\VatlayerPhp\Factory\Validate\Validate;

class VatlayerFactory
{
    /**
     * @return Price
     */
    public function price(): Price
    {
        return new Price();
    }

    /**
     * @return Rate
     */
    public function rate(): Rate
    {
        return new Rate();
    }

    /**
     * @return RateList
     */
    public function rateList(): RateList
    {
        return new RateList();
    }

    /**
     * @return Types
     */
    public function types(): Types
    {
        return new Types();
    }

    /**
     * @return Validate
     */
    public function validate(): Validate
    {
        return new Validate();
    }
}
