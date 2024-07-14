<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsGetTargetPromotionGroupsRecommendationsInternalResponseContent extends \ArrayObject
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
     * Total number of records available.
     *
     * @var int
     */
    protected $totalResults;
    /**
     * Token for fetching the next page.
     *
     * @var string
     */
    protected $nextToken;
    /**
     * List of optimized targets for the request, as recommended by Amazon heuristics.
     *
     * @var list<SponsoredProductsRecommendedTarget>
     */
    protected $targets;

    /**
     * Total number of records available.
     */
    public function getTotalResults(): int
    {
        return $this->totalResults;
    }

    /**
     * Total number of records available.
     */
    public function setTotalResults(int $totalResults): self
    {
        $this->initialized['totalResults'] = true;
        $this->totalResults = $totalResults;

        return $this;
    }

    /**
     * Token for fetching the next page.
     */
    public function getNextToken(): string
    {
        return $this->nextToken;
    }

    /**
     * Token for fetching the next page.
     */
    public function setNextToken(string $nextToken): self
    {
        $this->initialized['nextToken'] = true;
        $this->nextToken = $nextToken;

        return $this;
    }

    /**
     * List of optimized targets for the request, as recommended by Amazon heuristics.
     *
     * @return list<SponsoredProductsRecommendedTarget>
     */
    public function getTargets(): array
    {
        return $this->targets;
    }

    /**
     * List of optimized targets for the request, as recommended by Amazon heuristics.
     *
     * @param list<SponsoredProductsRecommendedTarget> $targets
     */
    public function setTargets(array $targets): self
    {
        $this->initialized['targets'] = true;
        $this->targets = $targets;

        return $this;
    }
}
