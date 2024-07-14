<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsListSponsoredProductsAdGroupsResponseContent extends \ArrayObject
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
     * @var list<SponsoredProductsAdGroup>
     */
    protected $adGroups;
    /**
     * token value allowing to navigate to the next response page.
     *
     * @var string
     */
    protected $nextToken;

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
     * @return list<SponsoredProductsAdGroup>
     */
    public function getAdGroups(): array
    {
        return $this->adGroups;
    }

    /**
     * @param list<SponsoredProductsAdGroup> $adGroups
     */
    public function setAdGroups(array $adGroups): self
    {
        $this->initialized['adGroups'] = true;
        $this->adGroups = $adGroups;

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
}
