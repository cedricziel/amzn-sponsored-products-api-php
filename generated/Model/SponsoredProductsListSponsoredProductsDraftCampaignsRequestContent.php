<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsListSponsoredProductsDraftCampaignsRequestContent extends \ArrayObject
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
     * Filter entities by the list of objectIds.
     *
     * @var SponsoredProductsReducedObjectIdFilter
     */
    protected $portfolioIdFilter;
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
     * Filter entities by name.
     *
     * @var SponsoredProductsNameFilter
     */
    protected $nameFilter;

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
     * Filter entities by the list of objectIds.
     */
    public function getPortfolioIdFilter(): SponsoredProductsReducedObjectIdFilter
    {
        return $this->portfolioIdFilter;
    }

    /**
     * Filter entities by the list of objectIds.
     */
    public function setPortfolioIdFilter(SponsoredProductsReducedObjectIdFilter $portfolioIdFilter): self
    {
        $this->initialized['portfolioIdFilter'] = true;
        $this->portfolioIdFilter = $portfolioIdFilter;

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

    /**
     * Filter entities by name.
     */
    public function getNameFilter(): SponsoredProductsNameFilter
    {
        return $this->nameFilter;
    }

    /**
     * Filter entities by name.
     */
    public function setNameFilter(SponsoredProductsNameFilter $nameFilter): self
    {
        $this->initialized['nameFilter'] = true;
        $this->nameFilter = $nameFilter;

        return $this;
    }
}
