<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class BidValues extends \ArrayObject
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
     * The suggested bid.
     *
     * @var float
     */
    protected $suggested;
    /**
     * The bid range start.
     *
     * @var float
     */
    protected $rangeStart;
    /**
     * The bid range end.
     *
     * @var float
     */
    protected $rangeEnd;

    /**
     * The suggested bid.
     */
    public function getSuggested(): float
    {
        return $this->suggested;
    }

    /**
     * The suggested bid.
     */
    public function setSuggested(float $suggested): self
    {
        $this->initialized['suggested'] = true;
        $this->suggested = $suggested;

        return $this;
    }

    /**
     * The bid range start.
     */
    public function getRangeStart(): float
    {
        return $this->rangeStart;
    }

    /**
     * The bid range start.
     */
    public function setRangeStart(float $rangeStart): self
    {
        $this->initialized['rangeStart'] = true;
        $this->rangeStart = $rangeStart;

        return $this;
    }

    /**
     * The bid range end.
     */
    public function getRangeEnd(): float
    {
        return $this->rangeEnd;
    }

    /**
     * The bid range end.
     */
    public function setRangeEnd(float $rangeEnd): self
    {
        $this->initialized['rangeEnd'] = true;
        $this->rangeEnd = $rangeEnd;

        return $this;
    }
}
