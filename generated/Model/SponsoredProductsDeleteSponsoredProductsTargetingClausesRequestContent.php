<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsDeleteSponsoredProductsTargetingClausesRequestContent extends \ArrayObject
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
     * Filter entities by the list of objectIds.
     *
     * @var SponsoredProductsObjectIdFilter
     */
    protected $targetIdFilter;

    /**
     * Filter entities by the list of objectIds.
     */
    public function getTargetIdFilter(): SponsoredProductsObjectIdFilter
    {
        return $this->targetIdFilter;
    }

    /**
     * Filter entities by the list of objectIds.
     */
    public function setTargetIdFilter(SponsoredProductsObjectIdFilter $targetIdFilter): self
    {
        $this->initialized['targetIdFilter'] = true;
        $this->targetIdFilter = $targetIdFilter;

        return $this;
    }
}
