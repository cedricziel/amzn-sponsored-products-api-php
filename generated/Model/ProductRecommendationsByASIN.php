<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class ProductRecommendationsByASIN extends \ArrayObject
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
     * An identifier to fetch next set of `ProductRecommendation` records in the result set if available. This will be null when at the end of result set.
     *
     * @var string
     */
    protected $nextCursor;
    /**
     * Optional parameter that links to the previous result set served. This parameter will be null on the first request.
     *
     * @var string
     */
    protected $previousCursor;
    /**
     * An array of `ProductRecommendation` objects.
     *
     * @var list<ProductRecommendation>
     */
    protected $recommendations;

    /**
     * An identifier to fetch next set of `ProductRecommendation` records in the result set if available. This will be null when at the end of result set.
     */
    public function getNextCursor(): string
    {
        return $this->nextCursor;
    }

    /**
     * An identifier to fetch next set of `ProductRecommendation` records in the result set if available. This will be null when at the end of result set.
     */
    public function setNextCursor(string $nextCursor): self
    {
        $this->initialized['nextCursor'] = true;
        $this->nextCursor = $nextCursor;

        return $this;
    }

    /**
     * Optional parameter that links to the previous result set served. This parameter will be null on the first request.
     */
    public function getPreviousCursor(): string
    {
        return $this->previousCursor;
    }

    /**
     * Optional parameter that links to the previous result set served. This parameter will be null on the first request.
     */
    public function setPreviousCursor(string $previousCursor): self
    {
        $this->initialized['previousCursor'] = true;
        $this->previousCursor = $previousCursor;

        return $this;
    }

    /**
     * An array of `ProductRecommendation` objects.
     *
     * @return list<ProductRecommendation>
     */
    public function getRecommendations(): array
    {
        return $this->recommendations;
    }

    /**
     * An array of `ProductRecommendation` objects.
     *
     * @param list<ProductRecommendation> $recommendations
     */
    public function setRecommendations(array $recommendations): self
    {
        $this->initialized['recommendations'] = true;
        $this->recommendations = $recommendations;

        return $this;
    }
}
