<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsCreateGlobalProductAd extends \ArrayObject
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
     * The campaign identifier.
     *
     * @var string
     */
    protected $campaignId;
    /**
     * The custom text to use for creating a custom text ad for the associated ASIN. Defined for only KDP Authors and Book Vendors.
     *
     * @var string
     */
    protected $customText;
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
     * The ad group identifier.
     *
     * @var string
     */
    protected $adGroupId;

    /**
     * The campaign identifier.
     */
    public function getCampaignId(): string
    {
        return $this->campaignId;
    }

    /**
     * The campaign identifier.
     */
    public function setCampaignId(string $campaignId): self
    {
        $this->initialized['campaignId'] = true;
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * The custom text to use for creating a custom text ad for the associated ASIN. Defined for only KDP Authors and Book Vendors.
     */
    public function getCustomText(): string
    {
        return $this->customText;
    }

    /**
     * The custom text to use for creating a custom text ad for the associated ASIN. Defined for only KDP Authors and Book Vendors.
     */
    public function setCustomText(string $customText): self
    {
        $this->initialized['customText'] = true;
        $this->customText = $customText;

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

    /**
     * The ad group identifier.
     */
    public function getAdGroupId(): string
    {
        return $this->adGroupId;
    }

    /**
     * The ad group identifier.
     */
    public function setAdGroupId(string $adGroupId): self
    {
        $this->initialized['adGroupId'] = true;
        $this->adGroupId = $adGroupId;

        return $this;
    }
}
