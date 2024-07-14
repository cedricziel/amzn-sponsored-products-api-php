<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsGlobalNegativeKeywordText extends \ArrayObject
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
     * The marketplace settings for keyword text to be overridden for marketplace.
     *
     * @var list<SponsoredProductsKeywordTextMarketplaceSettings>
     */
    protected $marketplaceSettings;
    /**
     * @var string
     */
    protected $value;

    /**
     * The marketplace settings for keyword text to be overridden for marketplace.
     *
     * @return list<SponsoredProductsKeywordTextMarketplaceSettings>
     */
    public function getMarketplaceSettings(): array
    {
        return $this->marketplaceSettings;
    }

    /**
     * The marketplace settings for keyword text to be overridden for marketplace.
     *
     * @param list<SponsoredProductsKeywordTextMarketplaceSettings> $marketplaceSettings
     */
    public function setMarketplaceSettings(array $marketplaceSettings): self
    {
        $this->initialized['marketplaceSettings'] = true;
        $this->marketplaceSettings = $marketplaceSettings;

        return $this;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
