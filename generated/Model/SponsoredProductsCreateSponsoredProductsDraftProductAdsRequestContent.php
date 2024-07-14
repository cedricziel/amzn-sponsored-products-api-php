<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsCreateSponsoredProductsDraftProductAdsRequestContent extends \ArrayObject
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
     * An array of ads.
     *
     * @var list<SponsoredProductsCreateDraftProductAd>
     */
    protected $productAds;

    /**
     * An array of ads.
     *
     * @return list<SponsoredProductsCreateDraftProductAd>
     */
    public function getProductAds(): array
    {
        return $this->productAds;
    }

    /**
     * An array of ads.
     *
     * @param list<SponsoredProductsCreateDraftProductAd> $productAds
     */
    public function setProductAds(array $productAds): self
    {
        $this->initialized['productAds'] = true;
        $this->productAds = $productAds;

        return $this;
    }
}
