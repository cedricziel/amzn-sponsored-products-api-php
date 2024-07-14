<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsDeleteSponsoredProductsProductAdsRequestContent extends \ArrayObject
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
    protected $adIdFilter;

    /**
     * Filter entities by the list of objectIds.
     */
    public function getAdIdFilter(): SponsoredProductsObjectIdFilter
    {
        return $this->adIdFilter;
    }

    /**
     * Filter entities by the list of objectIds.
     */
    public function setAdIdFilter(SponsoredProductsObjectIdFilter $adIdFilter): self
    {
        $this->initialized['adIdFilter'] = true;
        $this->adIdFilter = $adIdFilter;

        return $this;
    }
}
