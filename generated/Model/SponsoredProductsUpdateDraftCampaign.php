<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsUpdateDraftCampaign extends \ArrayObject
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
     * The identifier of an existing portfolio to which the draft is associated.
     *
     * @var string|null
     */
    protected $portfolioId;
    /**
     * The format of the date is YYYY-MM-DD.
     *
     * @var \DateTime|null
     */
    protected $endDate;
    /**
     * The identifier of the draft.
     *
     * @var string
     */
    protected $campaignId;
    /**
     * The name of the draft.
     *
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $targetingType;
    /**
     * @var SponsoredProductsCreateOrUpdateDraftCampaignDynamicBidding
     */
    protected $dynamicBidding;
    /**
     * The format of the date is YYYY-MM-DD.
     *
     * @var \DateTime
     */
    protected $startDate;
    /**
     * @var SponsoredProductsCreateOrUpdateDraftCampaignBudget
     */
    protected $budget;
    /**
     * A list of advertiser-specified custom identifiers for the campaign. Each customer identifier is a key-value pair. You can specify a maximum of 50 identifiers.
     *
     * @var array<string, string>
     */
    protected $tags;

    /**
     * The identifier of an existing portfolio to which the draft is associated.
     */
    public function getPortfolioId(): ?string
    {
        return $this->portfolioId;
    }

    /**
     * The identifier of an existing portfolio to which the draft is associated.
     */
    public function setPortfolioId(?string $portfolioId): self
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
     * The identifier of the draft.
     */
    public function getCampaignId(): string
    {
        return $this->campaignId;
    }

    /**
     * The identifier of the draft.
     */
    public function setCampaignId(string $campaignId): self
    {
        $this->initialized['campaignId'] = true;
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * The name of the draft.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name of the draft.
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

    public function getDynamicBidding(): SponsoredProductsCreateOrUpdateDraftCampaignDynamicBidding
    {
        return $this->dynamicBidding;
    }

    public function setDynamicBidding(SponsoredProductsCreateOrUpdateDraftCampaignDynamicBidding $dynamicBidding): self
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

    public function getBudget(): SponsoredProductsCreateOrUpdateDraftCampaignBudget
    {
        return $this->budget;
    }

    public function setBudget(SponsoredProductsCreateOrUpdateDraftCampaignBudget $budget): self
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
}
