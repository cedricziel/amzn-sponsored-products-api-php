<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsGlobalKeywordServingStatus extends \ArrayObject
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
     * Serving status details of Keyword.
     *
     * @var list<string>
     */
    protected $statusReasons;
    /**
     * The marketplace serving statuses.
     *
     * @var list<SponsoredProductsMarketplaceLevelKeywordServingStatus>
     */
    protected $marketplaceKeywordServingStatus;
    /**
     * @var string
     */
    protected $keywordServingStatus;

    /**
     * Serving status details of Keyword.
     *
     * @return list<string>
     */
    public function getStatusReasons(): array
    {
        return $this->statusReasons;
    }

    /**
     * Serving status details of Keyword.
     *
     * @param list<string> $statusReasons
     */
    public function setStatusReasons(array $statusReasons): self
    {
        $this->initialized['statusReasons'] = true;
        $this->statusReasons = $statusReasons;

        return $this;
    }

    /**
     * The marketplace serving statuses.
     *
     * @return list<SponsoredProductsMarketplaceLevelKeywordServingStatus>
     */
    public function getMarketplaceKeywordServingStatus(): array
    {
        return $this->marketplaceKeywordServingStatus;
    }

    /**
     * The marketplace serving statuses.
     *
     * @param list<SponsoredProductsMarketplaceLevelKeywordServingStatus> $marketplaceKeywordServingStatus
     */
    public function setMarketplaceKeywordServingStatus(array $marketplaceKeywordServingStatus): self
    {
        $this->initialized['marketplaceKeywordServingStatus'] = true;
        $this->marketplaceKeywordServingStatus = $marketplaceKeywordServingStatus;

        return $this;
    }

    public function getKeywordServingStatus(): string
    {
        return $this->keywordServingStatus;
    }

    public function setKeywordServingStatus(string $keywordServingStatus): self
    {
        $this->initialized['keywordServingStatus'] = true;
        $this->keywordServingStatus = $keywordServingStatus;

        return $this;
    }
}
