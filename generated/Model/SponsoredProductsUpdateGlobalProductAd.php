<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsUpdateGlobalProductAd extends \ArrayObject
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
     * The product ad identifier.
     *
     * @var string
     */
    protected $adId;
    /**
     * Name for the product Ad.
     *
     * @var string
     */
    protected $name;
    /**
     * @var SponsoredProductsGlobalProductIdentifiers
     */
    protected $asin;
    /**
     * @var SponsoredProductsCreateOrUpdateGlobalEntityState
     */
    protected $state;
    /**
     * @var SponsoredProductsGlobalProductIdentifiers
     */
    protected $sku;

    /**
     * The product ad identifier.
     */
    public function getAdId(): string
    {
        return $this->adId;
    }

    /**
     * The product ad identifier.
     */
    public function setAdId(string $adId): self
    {
        $this->initialized['adId'] = true;
        $this->adId = $adId;

        return $this;
    }

    /**
     * Name for the product Ad.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name for the product Ad.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getAsin(): SponsoredProductsGlobalProductIdentifiers
    {
        return $this->asin;
    }

    public function setAsin(SponsoredProductsGlobalProductIdentifiers $asin): self
    {
        $this->initialized['asin'] = true;
        $this->asin = $asin;

        return $this;
    }

    public function getState(): SponsoredProductsCreateOrUpdateGlobalEntityState
    {
        return $this->state;
    }

    public function setState(SponsoredProductsCreateOrUpdateGlobalEntityState $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

        return $this;
    }

    public function getSku(): SponsoredProductsGlobalProductIdentifiers
    {
        return $this->sku;
    }

    public function setSku(SponsoredProductsGlobalProductIdentifiers $sku): self
    {
        $this->initialized['sku'] = true;
        $this->sku = $sku;

        return $this;
    }
}
