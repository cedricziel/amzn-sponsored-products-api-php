<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsListAllSPTargetsRequestContent extends \ArrayObject
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
     * Filter entities by the list of objectIds.
     *
     * @var SponsoredProductsObjectIdFilter
     */
    protected $targetIdFilter;
    /**
     * Filter entities by the list of objectIds.
     *
     * @var SponsoredProductsObjectIdFilter
     */
    protected $adGroupIdFilter;

    /**
     * Filter entities by the list of objectIds.
     */
    public function getCampaignIdFilter(): SponsoredProductsObjectIdFilter
    {
        return $this->campaignIdFilter;
    }

    /**
     * Filter entities by the list of objectIds.
     */
    public function setCampaignIdFilter(SponsoredProductsObjectIdFilter $campaignIdFilter): self
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

    /**
     * Filter entities by the list of objectIds.
     */
    public function getTargetIdFilter(): SponsoredProductsObjectIdFilter
    {
        return $this->targetIdFilter;
    }

    /**
     * Filter entities by the list of objectIds.
     */
    public function setTargetIdFilter(SponsoredProductsObjectIdFilter $targetIdFilter): self
    {
        $this->initialized['targetIdFilter'] = true;
        $this->targetIdFilter = $targetIdFilter;

        return $this;
    }

    /**
     * Filter entities by the list of objectIds.
     */
    public function getAdGroupIdFilter(): SponsoredProductsObjectIdFilter
    {
        return $this->adGroupIdFilter;
    }

    /**
     * Filter entities by the list of objectIds.
     */
    public function setAdGroupIdFilter(SponsoredProductsObjectIdFilter $adGroupIdFilter): self
    {
        $this->initialized['adGroupIdFilter'] = true;
        $this->adGroupIdFilter = $adGroupIdFilter;

        return $this;
    }
}
