<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsListSponsoredProductsNegativeTargetingClausesPreviewRequestContent extends \ArrayObject
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
    protected $negativeTargetIdFilter;
    /**
     * Filter entities by the list of objectIds.
     *
     * @var SponsoredProductsReducedObjectIdFilter
     */
    protected $campaignIdFilter;
    /**
     * Filter entities by state. To filter live entities, only 'ENABLED', 'PAUSED' and 'ARCHIVED' can be used.
     *
     * @var SponsoredProductsEntityStateFilter
     */
    protected $stateFilter;
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
     * @var SponsoredProductsAsinFilter
     */
    protected $asinFilter;
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
     * Filter entities by the list of objectIds.
     */
    public function getNegativeTargetIdFilter(): SponsoredProductsObjectIdFilter
    {
        return $this->negativeTargetIdFilter;
    }

    /**
     * Filter entities by the list of objectIds.
     */
    public function setNegativeTargetIdFilter(SponsoredProductsObjectIdFilter $negativeTargetIdFilter): self
    {
        $this->initialized['negativeTargetIdFilter'] = true;
        $this->negativeTargetIdFilter = $negativeTargetIdFilter;

        return $this;
    }

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
     * Filter entities by state. To filter live entities, only 'ENABLED', 'PAUSED' and 'ARCHIVED' can be used.
     */
    public function getStateFilter(): SponsoredProductsEntityStateFilter
    {
        return $this->stateFilter;
    }

    /**
     * Filter entities by state. To filter live entities, only 'ENABLED', 'PAUSED' and 'ARCHIVED' can be used.
     */
    public function setStateFilter(SponsoredProductsEntityStateFilter $stateFilter): self
    {
        $this->initialized['stateFilter'] = true;
        $this->stateFilter = $stateFilter;

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

    public function getAsinFilter(): SponsoredProductsAsinFilter
    {
        return $this->asinFilter;
    }

    public function setAsinFilter(SponsoredProductsAsinFilter $asinFilter): self
    {
        $this->initialized['asinFilter'] = true;
        $this->asinFilter = $asinFilter;

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
}
