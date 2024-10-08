<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsListSponsoredProductsGlobalCampaignNegativeKeywordsRequestContent extends \ArrayObject
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
     * Filter entities by the list of objectIds.
     *
     * @var SponsoredProductsObjectIdFilter
     */
    protected $campaignNegativeKeywordIdFilter;
    /**
     * Number of records to include in the paginated response. Defaults to max page size for given API.
     *
     * @var int
     */
    protected $maxResults;
    /**
     * token value allowing to navigate to the next response page.
     *
     * @var string
     */
    protected $nextToken;
    /**
     * Whether to get entity with extended data fields such as creationDate, lastUpdateDate, servingStatus.
     *
     * @var bool
     */
    protected $includeExtendedDataFields;

    /**
     * Filter entities by the list of objectIds.
     */
    public function getCampaignNegativeKeywordIdFilter(): SponsoredProductsObjectIdFilter
    {
        return $this->campaignNegativeKeywordIdFilter;
    }

    /**
     * Filter entities by the list of objectIds.
     */
    public function setCampaignNegativeKeywordIdFilter(SponsoredProductsObjectIdFilter $campaignNegativeKeywordIdFilter): self
    {
        $this->initialized['campaignNegativeKeywordIdFilter'] = true;
        $this->campaignNegativeKeywordIdFilter = $campaignNegativeKeywordIdFilter;

        return $this;
    }

    /**
     * Number of records to include in the paginated response. Defaults to max page size for given API.
     */
    public function getMaxResults(): int
    {
        return $this->maxResults;
    }

    /**
     * Number of records to include in the paginated response. Defaults to max page size for given API.
     */
    public function setMaxResults(int $maxResults): self
    {
        $this->initialized['maxResults'] = true;
        $this->maxResults = $maxResults;

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
     * Whether to get entity with extended data fields such as creationDate, lastUpdateDate, servingStatus.
     */
    public function getIncludeExtendedDataFields(): bool
    {
        return $this->includeExtendedDataFields;
    }

    /**
     * Whether to get entity with extended data fields such as creationDate, lastUpdateDate, servingStatus.
     */
    public function setIncludeExtendedDataFields(bool $includeExtendedDataFields): self
    {
        $this->initialized['includeExtendedDataFields'] = true;
        $this->includeExtendedDataFields = $includeExtendedDataFields;

        return $this;
    }
}
