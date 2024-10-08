<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsMarketplaceLevelProductIdentifier extends \ArrayObject
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
     * @var string
     */
    protected $identifier;
    /**
     * @var string
     */
    protected $marketplace;

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function setIdentifier(string $identifier): self
    {
        $this->initialized['identifier'] = true;
        $this->identifier = $identifier;

        return $this;
    }

    public function getMarketplace(): string
    {
        return $this->marketplace;
    }

    public function setMarketplace(string $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;

        return $this;
    }
}
