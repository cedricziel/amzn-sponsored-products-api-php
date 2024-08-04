<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsUpdateSponsoredProductsGlobalProductAdsRequestContent extends \ArrayObject
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
     * An array of ads with updated values.
     *
     * @var list<SponsoredProductsUpdateGlobalProductAd>
     */
    protected $productAds;

    /**
     * An array of ads with updated values.
     *
     * @return list<SponsoredProductsUpdateGlobalProductAd>
     */
    public function getProductAds(): array
    {
        return $this->productAds;
    }

    /**
     * An array of ads with updated values.
     *
     * @param list<SponsoredProductsUpdateGlobalProductAd> $productAds
     */
    public function setProductAds(array $productAds): self
    {
        $this->initialized['productAds'] = true;
        $this->productAds = $productAds;

        return $this;
    }
}
