<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsGlobalCampaign extends \ArrayObject
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
     * The format of the date is YYYY-MM-DD.
     *
     * @var \DateTime
     */
    protected $endDate;
    /**
     * The identifier of the campaign.
     *
     * @var string
     */
    protected $campaignId;
    /**
     * @var list<string>
     */
    protected $applicableMarketplaces;
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
     * @var SponsoredProductsGlobalEntityState
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
     * @var SponsoredProductsGlobalBudget
     */
    protected $budget;
    /**
     * A list of advertiser-specified custom identifiers for the campaign. Each customer identifier is a key-value pair. You can specify a maximum of 50 identifiers.
     *
     * @var array<string, string>
     */
    protected $tags;
    /**
     * @var SponsoredProductsGlobalCampaignExtendedData
     */
    protected $extendedData;

    /**
     * The format of the date is YYYY-MM-DD.
     */
    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    /**
     * The format of the date is YYYY-MM-DD.
     */
    public function setEndDate(\DateTime $endDate): self
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
     * @return list<string>
     */
    public function getApplicableMarketplaces(): array
    {
        return $this->applicableMarketplaces;
    }

    /**
     * @param list<string> $applicableMarketplaces
     */
    public function setApplicableMarketplaces(array $applicableMarketplaces): self
    {
        $this->initialized['applicableMarketplaces'] = true;
        $this->applicableMarketplaces = $applicableMarketplaces;

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

    public function getState(): SponsoredProductsGlobalEntityState
    {
        return $this->state;
    }

    public function setState(SponsoredProductsGlobalEntityState $state): self
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

    public function getBudget(): SponsoredProductsGlobalBudget
    {
        return $this->budget;
    }

    public function setBudget(SponsoredProductsGlobalBudget $budget): self
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

    public function getExtendedData(): SponsoredProductsGlobalCampaignExtendedData
    {
        return $this->extendedData;
    }

    public function setExtendedData(SponsoredProductsGlobalCampaignExtendedData $extendedData): self
    {
        $this->initialized['extendedData'] = true;
        $this->extendedData = $extendedData;

        return $this;
    }
}
