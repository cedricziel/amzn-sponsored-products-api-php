<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsAllTargetsSuccessResponseItem extends \ArrayObject
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
     * the index of the targetingClause in the array from the request body.
     *
     * @var int
     */
    protected $index;
    /**
     * Targets allow you to target or exclude criteria at the campaign or ad group level, and to set bids for specific criteria at the ad group level.
     *
     * @var SponsoredProductsAllTargets
     */
    protected $target;

    /**
     * the index of the targetingClause in the array from the request body.
     */
    public function getIndex(): int
    {
        return $this->index;
    }

    /**
     * the index of the targetingClause in the array from the request body.
     */
    public function setIndex(int $index): self
    {
        $this->initialized['index'] = true;
        $this->index = $index;

        return $this;
    }

    /**
     * Targets allow you to target or exclude criteria at the campaign or ad group level, and to set bids for specific criteria at the ad group level.
     */
    public function getTarget(): SponsoredProductsAllTargets
    {
        return $this->target;
    }

    /**
     * Targets allow you to target or exclude criteria at the campaign or ad group level, and to set bids for specific criteria at the ad group level.
     */
    public function setTarget(SponsoredProductsAllTargets $target): self
    {
        $this->initialized['target'] = true;
        $this->target = $target;

        return $this;
    }
}
