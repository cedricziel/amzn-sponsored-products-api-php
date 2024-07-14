<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class Conversions extends \ArrayObject
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
     * lower bound.
     *
     * @var int
     */
    protected $lower;
    /**
     * upper bound.
     *
     * @var int
     */
    protected $upper;

    /**
     * lower bound.
     */
    public function getLower(): int
    {
        return $this->lower;
    }

    /**
     * lower bound.
     */
    public function setLower(int $lower): self
    {
        $this->initialized['lower'] = true;
        $this->lower = $lower;

        return $this;
    }

    /**
     * upper bound.
     */
    public function getUpper(): int
    {
        return $this->upper;
    }

    /**
     * upper bound.
     */
    public function setUpper(int $upper): self
    {
        $this->initialized['upper'] = true;
        $this->upper = $upper;

        return $this;
    }
}
