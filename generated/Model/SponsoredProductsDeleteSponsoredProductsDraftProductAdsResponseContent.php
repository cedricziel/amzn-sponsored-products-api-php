<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsDeleteSponsoredProductsDraftProductAdsResponseContent extends \ArrayObject
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
     * @var SponsoredProductsBulkDraftProductAdOperationResponse
     */
    protected $productAds;

    public function getProductAds(): SponsoredProductsBulkDraftProductAdOperationResponse
    {
        return $this->productAds;
    }

    public function setProductAds(SponsoredProductsBulkDraftProductAdOperationResponse $productAds): self
    {
        $this->initialized['productAds'] = true;
        $this->productAds = $productAds;

        return $this;
    }
}
