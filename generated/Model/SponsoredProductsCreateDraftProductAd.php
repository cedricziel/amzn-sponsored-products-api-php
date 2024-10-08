<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsCreateDraftProductAd extends \ArrayObject
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
     * The custom text to use for creating a custom text ad for the associated ASIN. Defined only for KDP Authors and Book Vendors in US marketplace.
     *
     * @var string
     */
    protected $customText;
    /**
     * The ASIN associated with the product. Defined for vendors only.
     *
     * @var string
     */
    protected $asin;
    /**
     * The SKU associated with the product. Defined for seller accounts only.
     *
     * @var string
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
     * The custom text to use for creating a custom text ad for the associated ASIN. Defined only for KDP Authors and Book Vendors in US marketplace.
     */
    public function getCustomText(): string
    {
        return $this->customText;
    }

    /**
     * The custom text to use for creating a custom text ad for the associated ASIN. Defined only for KDP Authors and Book Vendors in US marketplace.
     */
    public function setCustomText(string $customText): self
    {
        $this->initialized['customText'] = true;
        $this->customText = $customText;

        return $this;
    }

    /**
     * The ASIN associated with the product. Defined for vendors only.
     */
    public function getAsin(): string
    {
        return $this->asin;
    }

    /**
     * The ASIN associated with the product. Defined for vendors only.
     */
    public function setAsin(string $asin): self
    {
        $this->initialized['asin'] = true;
        $this->asin = $asin;

        return $this;
    }

    /**
     * The SKU associated with the product. Defined for seller accounts only.
     */
    public function getSku(): string
    {
        return $this->sku;
    }

    /**
     * The SKU associated with the product. Defined for seller accounts only.
     */
    public function setSku(string $sku): self
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
