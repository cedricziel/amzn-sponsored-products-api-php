<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsListSponsoredProductsGlobalNegativeKeywordsResponseContent extends \ArrayObject
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
     * @var list<SponsoredProductsGlobalNegativeKeyword>
     */
    protected $negativeKeywords;
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
     * @return list<SponsoredProductsGlobalNegativeKeyword>
     */
    public function getNegativeKeywords(): array
    {
        return $this->negativeKeywords;
    }

    /**
     * @param list<SponsoredProductsGlobalNegativeKeyword> $negativeKeywords
     */
    public function setNegativeKeywords(array $negativeKeywords): self
    {
        $this->initialized['negativeKeywords'] = true;
        $this->negativeKeywords = $negativeKeywords;

        return $this;
    }

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
}
