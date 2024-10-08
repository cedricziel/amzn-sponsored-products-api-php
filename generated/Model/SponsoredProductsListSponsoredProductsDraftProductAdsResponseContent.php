<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsListSponsoredProductsDraftProductAdsResponseContent extends \ArrayObject
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
     * The total number of entities.
     *
     * @var int
     */
    protected $totalResults;
    /**
     * token value allowing to navigate to the next response page.
     *
     * @var string
     */
    protected $nextToken;
    /**
     * @var list<SponsoredProductsDraftProductAd>
     */
    protected $productAds;

    /**
     * The total number of entities.
     */
    public function getTotalResults(): int
    {
        return $this->totalResults;
    }

    /**
     * The total number of entities.
     */
    public function setTotalResults(int $totalResults): self
    {
        $this->initialized['totalResults'] = true;
        $this->totalResults = $totalResults;

        return $this;
    }

    /**
     * token value allowing to navigate to the next response page.
     */
    public function getNextToken(): string
    {
        return $this->nextToken;
    }

    /**
     * token value allowing to navigate to the next response page.
     */
    public function setNextToken(string $nextToken): self
    {
        $this->initialized['nextToken'] = true;
        $this->nextToken = $nextToken;

        return $this;
    }

    /**
     * @return list<SponsoredProductsDraftProductAd>
     */
    public function getProductAds(): array
    {
        return $this->productAds;
    }

    /**
     * @param list<SponsoredProductsDraftProductAd> $productAds
     */
    public function setProductAds(array $productAds): self
    {
        $this->initialized['productAds'] = true;
        $this->productAds = $productAds;

        return $this;
    }
}
