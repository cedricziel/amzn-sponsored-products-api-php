<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class PriceRange extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var float
     */
    protected $min;
    /**
     * @var float
     */
    protected $max;

    public function getMin(): float
    {
        return $this->min;
    }

    public function setMin(float $min): self
    {
        $this->initialized['min'] = true;
        $this->min = $min;

        return $this;
    }

    public function getMax(): float
    {
        return $this->max;
    }

    public function setMax(float $max): self
    {
        $this->initialized['max'] = true;
        $this->max = $max;

        return $this;
    }
}
