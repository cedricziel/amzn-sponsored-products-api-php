<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsGlobalProductIdentifiers extends \ArrayObject
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
     * @var list<SponsoredProductsMarketplaceLevelProductIdentifier>
     */
    protected $marketplaceSettings;

    /**
     * @return list<SponsoredProductsMarketplaceLevelProductIdentifier>
     */
    public function getMarketplaceSettings(): array
    {
        return $this->marketplaceSettings;
    }

    /**
     * @param list<SponsoredProductsMarketplaceLevelProductIdentifier> $marketplaceSettings
     */
    public function setMarketplaceSettings(array $marketplaceSettings): self
    {
        $this->initialized['marketplaceSettings'] = true;
        $this->marketplaceSettings = $marketplaceSettings;

        return $this;
    }
}
