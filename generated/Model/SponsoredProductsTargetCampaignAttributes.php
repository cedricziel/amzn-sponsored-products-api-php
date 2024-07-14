<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsTargetCampaignAttributes extends \ArrayObject
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
     * The identifier of the target marketplace.
     *
     * @var string
     */
    protected $marketplaceId;
    /**
     * The end date for the campaign in formats according to https://tools.ietf.org/html/rfc3339#section-5.6.
     *
     * @var \DateTime
     */
    protected $endDate;
    /**
     * The name to be appended to the campaign. If new name already exists, a number will be appended i.e. if "Campaign Name Copy" exist, we will name it "Campaign Name Copy 1".
     *
     * @var string
     */
    protected $nameSuffix;
    /**
     * The start date of the campaign in formats according to https://tools.ietf.org/html/rfc3339#section-5.6.
     *
     * @var \DateTime
     */
    protected $startDate;
    /**
     * The advertiser id per the targeted marketplace. Advertiser id per marketplace can fetched through /v2/profiles API.
     *
     * @var string
     */
    protected $advertiserId;
    /**
     * The budget for the campaign.
     *
     * @var float
     */
    protected $budget;
    /**
     * Entity state for create or update operation.
     *
     * @var string
     */
    protected $status;

    /**
     * The identifier of the target marketplace.
     */
    public function getMarketplaceId(): string
    {
        return $this->marketplaceId;
    }

    /**
     * The identifier of the target marketplace.
     */
    public function setMarketplaceId(string $marketplaceId): self
    {
        $this->initialized['marketplaceId'] = true;
        $this->marketplaceId = $marketplaceId;

        return $this;
    }

    /**
     * The end date for the campaign in formats according to https://tools.ietf.org/html/rfc3339#section-5.6.
     */
    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    /**
     * The end date for the campaign in formats according to https://tools.ietf.org/html/rfc3339#section-5.6.
     */
    public function setEndDate(\DateTime $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * The name to be appended to the campaign. If new name already exists, a number will be appended i.e. if "Campaign Name Copy" exist, we will name it "Campaign Name Copy 1".
     */
    public function getNameSuffix(): string
    {
        return $this->nameSuffix;
    }

    /**
     * The name to be appended to the campaign. If new name already exists, a number will be appended i.e. if "Campaign Name Copy" exist, we will name it "Campaign Name Copy 1".
     */
    public function setNameSuffix(string $nameSuffix): self
    {
        $this->initialized['nameSuffix'] = true;
        $this->nameSuffix = $nameSuffix;

        return $this;
    }

    /**
     * The start date of the campaign in formats according to https://tools.ietf.org/html/rfc3339#section-5.6.
     */
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    /**
     * The start date of the campaign in formats according to https://tools.ietf.org/html/rfc3339#section-5.6.
     */
    public function setStartDate(\DateTime $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * The advertiser id per the targeted marketplace. Advertiser id per marketplace can fetched through /v2/profiles API.
     */
    public function getAdvertiserId(): string
    {
        return $this->advertiserId;
    }

    /**
     * The advertiser id per the targeted marketplace. Advertiser id per marketplace can fetched through /v2/profiles API.
     */
    public function setAdvertiserId(string $advertiserId): self
    {
        $this->initialized['advertiserId'] = true;
        $this->advertiserId = $advertiserId;

        return $this;
    }

    /**
     * The budget for the campaign.
     */
    public function getBudget(): float
    {
        return $this->budget;
    }

    /**
     * The budget for the campaign.
     */
    public function setBudget(float $budget): self
    {
        $this->initialized['budget'] = true;
        $this->budget = $budget;

        return $this;
    }

    /**
     * Entity state for create or update operation.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Entity state for create or update operation.
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }
}
