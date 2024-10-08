<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsMarketplaceLevelKeywordServingStatus extends \ArrayObject
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
     * @var list<string>
     */
    protected $statusReasons;
    /**
     * @var string
     */
    protected $marketplace;
    /**
     * @var string
     */
    protected $servingStatus;

    /**
     * @return list<string>
     */
    public function getStatusReasons(): array
    {
        return $this->statusReasons;
    }

    /**
     * @param list<string> $statusReasons
     */
    public function setStatusReasons(array $statusReasons): self
    {
        $this->initialized['statusReasons'] = true;
        $this->statusReasons = $statusReasons;

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

    public function getServingStatus(): string
    {
        return $this->servingStatus;
    }

    public function setServingStatus(string $servingStatus): self
    {
        $this->initialized['servingStatus'] = true;
        $this->servingStatus = $servingStatus;

        return $this;
    }
}
