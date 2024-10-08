<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsCreateOrUpdateGlobalEntityState extends \ArrayObject
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
     * @var list<SponsoredProductsCreateOrUpdateMarketplaceState>
     */
    protected $marketplaceSettings;
    /**
     * Entity state for create or update operation.
     *
     * @var string
     */
    protected $state;

    /**
     * @return list<SponsoredProductsCreateOrUpdateMarketplaceState>
     */
    public function getMarketplaceSettings(): array
    {
        return $this->marketplaceSettings;
    }

    /**
     * @param list<SponsoredProductsCreateOrUpdateMarketplaceState> $marketplaceSettings
     */
    public function setMarketplaceSettings(array $marketplaceSettings): self
    {
        $this->initialized['marketplaceSettings'] = true;
        $this->marketplaceSettings = $marketplaceSettings;

        return $this;
    }

    /**
     * Entity state for create or update operation.
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * Entity state for create or update operation.
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

        return $this;
    }
}
