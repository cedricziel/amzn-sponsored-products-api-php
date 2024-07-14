<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsCampaign extends \ArrayObject
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
     * The identifier of an existing portfolio to which the campaign is associated.
     *
     * @var string
     */
    protected $portfolioId;
    /**
     * The format of the date is YYYY-MM-DD.
     *
     * @var \DateTime|null
     */
    protected $endDate;
    /**
     * The identifier of the campaign.
     *
     * @var string
     */
    protected $campaignId;
    /**
     * The name of the campaign.
     *
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $targetingType;
    /**
     * The current resource state.
     * | State | Description |
     * | --- | --- |
     * | `ENABLED` | Enabled State |
     * | `PAUSED` | Paused State |
     * | `ARCHIVED` | ARCHIVED State |
     * | `ENABLING` | State for Draft Entity Only |
     * | `USER_DELETED` | State for Draft Entity Only |
     * | `OTHER` | Read Only |.
     *
     * @var string
     */
    protected $state;
    /**
     * @var SponsoredProductsDynamicBidding
     */
    protected $dynamicBidding;
    /**
     * The format of the date is YYYY-MM-DD.
     *
     * @var \DateTime
     */
    protected $startDate;
    /**
     * @var SponsoredProductsBudget
     */
    protected $budget;
    /**
     * A list of advertiser-specified custom identifiers for the campaign. Each customer identifier is a key-value pair. You can specify a maximum of 50 identifiers.
     *
     * @var array<string, string>
     */
    protected $tags;
    /**
     * @var SponsoredProductsCampaignExtendedData
     */
    protected $extendedData;

    /**
     * The identifier of an existing portfolio to which the campaign is associated.
     */
    public function getPortfolioId(): string
    {
        return $this->portfolioId;
    }

    /**
     * The identifier of an existing portfolio to which the campaign is associated.
     */
    public function setPortfolioId(string $portfolioId): self
    {
        $this->initialized['portfolioId'] = true;
        $this->portfolioId = $portfolioId;

        return $this;
    }

    /**
     * The format of the date is YYYY-MM-DD.
     */
    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    /**
     * The format of the date is YYYY-MM-DD.
     */
    public function setEndDate(?\DateTime $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * The identifier of the campaign.
     */
    public function getCampaignId(): string
    {
        return $this->campaignId;
    }

    /**
     * The identifier of the campaign.
     */
    public function setCampaignId(string $campaignId): self
    {
        $this->initialized['campaignId'] = true;
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * The name of the campaign.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name of the campaign.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getTargetingType(): string
    {
        return $this->targetingType;
    }

    public function setTargetingType(string $targetingType): self
    {
        $this->initialized['targetingType'] = true;
        $this->targetingType = $targetingType;

        return $this;
    }

    /**
     * The current resource state.
     * | State | Description |
     * | --- | --- |
     * | `ENABLED` | Enabled State |
     * | `PAUSED` | Paused State |
     * | `ARCHIVED` | ARCHIVED State |
     * | `ENABLING` | State for Draft Entity Only |
     * | `USER_DELETED` | State for Draft Entity Only |
     * | `OTHER` | Read Only |.
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * The current resource state.
     * | State | Description |
     * | --- | --- |
     * | `ENABLED` | Enabled State |
     * | `PAUSED` | Paused State |
     * | `ARCHIVED` | ARCHIVED State |
     * | `ENABLING` | State for Draft Entity Only |
     * | `USER_DELETED` | State for Draft Entity Only |
     * | `OTHER` | Read Only |.
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

        return $this;
    }

    public function getDynamicBidding(): SponsoredProductsDynamicBidding
    {
        return $this->dynamicBidding;
    }

    public function setDynamicBidding(SponsoredProductsDynamicBidding $dynamicBidding): self
    {
        $this->initialized['dynamicBidding'] = true;
        $this->dynamicBidding = $dynamicBidding;

        return $this;
    }

    /**
     * The format of the date is YYYY-MM-DD.
     */
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    /**
     * The format of the date is YYYY-MM-DD.
     */
    public function setStartDate(\DateTime $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;

        return $this;
    }

    public function getBudget(): SponsoredProductsBudget
    {
        return $this->budget;
    }

    public function setBudget(SponsoredProductsBudget $budget): self
    {
        $this->initialized['budget'] = true;
        $this->budget = $budget;

        return $this;
    }

    /**
     * A list of advertiser-specified custom identifiers for the campaign. Each customer identifier is a key-value pair. You can specify a maximum of 50 identifiers.
     *
     * @return array<string, string>
     */
    public function getTags(): iterable
    {
        return $this->tags;
    }

    /**
     * A list of advertiser-specified custom identifiers for the campaign. Each customer identifier is a key-value pair. You can specify a maximum of 50 identifiers.
     *
     * @param array<string, string> $tags
     */
    public function setTags(iterable $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;

        return $this;
    }

    public function getExtendedData(): SponsoredProductsCampaignExtendedData
    {
        return $this->extendedData;
    }

    public function setExtendedData(SponsoredProductsCampaignExtendedData $extendedData): self
    {
        $this->initialized['extendedData'] = true;
        $this->extendedData = $extendedData;

        return $this;
    }
}
