<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsListTargetPromotionGroupsResponseContent extends \ArrayObject
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
     * The total number of results available.
     *
     * @var int
     */
    protected $totalResults;
    /**
     * To retrieve the next page of results, call the same operation and specify this token in the
     * request. If the nextToken field is empty, there are no further results.
     *
     * @var string
     */
    protected $nextToken;
    /**
     * @var list<SponsoredProductsTargetPromotionGroup>
     */
    protected $targetPromotionGroups;

    /**
     * The total number of results available.
     */
    public function getTotalResults(): int
    {
        return $this->totalResults;
    }

    /**
     * The total number of results available.
     */
    public function setTotalResults(int $totalResults): self
    {
        $this->initialized['totalResults'] = true;
        $this->totalResults = $totalResults;

        return $this;
    }

    /**
     * To retrieve the next page of results, call the same operation and specify this token in the
     * request. If the nextToken field is empty, there are no further results.
     */
    public function getNextToken(): string
    {
        return $this->nextToken;
    }

    /**
     * To retrieve the next page of results, call the same operation and specify this token in the
     * request. If the nextToken field is empty, there are no further results.
     */
    public function setNextToken(string $nextToken): self
    {
        $this->initialized['nextToken'] = true;
        $this->nextToken = $nextToken;

        return $this;
    }

    /**
     * @return list<SponsoredProductsTargetPromotionGroup>
     */
    public function getTargetPromotionGroups(): array
    {
        return $this->targetPromotionGroups;
    }

    /**
     * @param list<SponsoredProductsTargetPromotionGroup> $targetPromotionGroups
     */
    public function setTargetPromotionGroups(array $targetPromotionGroups): self
    {
        $this->initialized['targetPromotionGroups'] = true;
        $this->targetPromotionGroups = $targetPromotionGroups;

        return $this;
    }
}
