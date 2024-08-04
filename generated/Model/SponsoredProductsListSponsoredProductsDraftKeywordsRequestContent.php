<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsListSponsoredProductsDraftKeywordsRequestContent extends \ArrayObject
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
     * @var SponsoredProductsReducedObjectIdFilter
     */
    protected $campaignIdFilter;
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
     * Filter entities by the list of objectIds.
     *
     * @var SponsoredProductsReducedObjectIdFilter
     */
    protected $adGroupIdFilter;
    /**
     * Whether to get entity with extended data fields such as creationDate, lastUpdateDate, servingStatus.
     *
     * @var bool
     */
    protected $includeExtendedDataFields;
    /**
     * Restricts results to draft keywords associated with locale.
     *
     * @var string
     */
    protected $locale;
    /**
     * Filter by keywordText.
     *
     * @var SponsoredProductsKeywordTextFilter
     */
    protected $keywordTextFilter;
    /**
     * Filter entities by the list of objectIds.
     *
     * @var SponsoredProductsObjectIdFilter
     */
    protected $keywordIdFilter;
    /**
     * Only the draft keyword with match type that is in this list will be listed.
     *
     * @var list<string>
     */
    protected $matchTypeFilter;

    /**
     * Filter entities by the list of objectIds.
     */
    public function getCampaignIdFilter(): SponsoredProductsReducedObjectIdFilter
    {
        return $this->campaignIdFilter;
    }

    /**
     * Filter entities by the list of objectIds.
     */
    public function setCampaignIdFilter(SponsoredProductsReducedObjectIdFilter $campaignIdFilter): self
    {
        $this->initialized['campaignIdFilter'] = true;
        $this->campaignIdFilter = $campaignIdFilter;

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
     * Filter entities by the list of objectIds.
     */
    public function getAdGroupIdFilter(): SponsoredProductsReducedObjectIdFilter
    {
        return $this->adGroupIdFilter;
    }

    /**
     * Filter entities by the list of objectIds.
     */
    public function setAdGroupIdFilter(SponsoredProductsReducedObjectIdFilter $adGroupIdFilter): self
    {
        $this->initialized['adGroupIdFilter'] = true;
        $this->adGroupIdFilter = $adGroupIdFilter;

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

    /**
     * Restricts results to draft keywords associated with locale.
     */
    public function getLocale(): string
    {
        return $this->locale;
    }

    /**
     * Restricts results to draft keywords associated with locale.
     */
    public function setLocale(string $locale): self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;

        return $this;
    }

    /**
     * Filter by keywordText.
     */
    public function getKeywordTextFilter(): SponsoredProductsKeywordTextFilter
    {
        return $this->keywordTextFilter;
    }

    /**
     * Filter by keywordText.
     */
    public function setKeywordTextFilter(SponsoredProductsKeywordTextFilter $keywordTextFilter): self
    {
        $this->initialized['keywordTextFilter'] = true;
        $this->keywordTextFilter = $keywordTextFilter;

        return $this;
    }

    /**
     * Filter entities by the list of objectIds.
     */
    public function getKeywordIdFilter(): SponsoredProductsObjectIdFilter
    {
        return $this->keywordIdFilter;
    }

    /**
     * Filter entities by the list of objectIds.
     */
    public function setKeywordIdFilter(SponsoredProductsObjectIdFilter $keywordIdFilter): self
    {
        $this->initialized['keywordIdFilter'] = true;
        $this->keywordIdFilter = $keywordIdFilter;

        return $this;
    }

    /**
     * Only the draft keyword with match type that is in this list will be listed.
     *
     * @return list<string>
     */
    public function getMatchTypeFilter(): array
    {
        return $this->matchTypeFilter;
    }

    /**
     * Only the draft keyword with match type that is in this list will be listed.
     *
     * @param list<string> $matchTypeFilter
     */
    public function setMatchTypeFilter(array $matchTypeFilter): self
    {
        $this->initialized['matchTypeFilter'] = true;
        $this->matchTypeFilter = $matchTypeFilter;

        return $this;
    }
}
