<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class InitialBudgetRecommendationRequest extends \ArrayObject
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
     * The bidding control configuration for the new campaign.
     *
     * @var Bidding
     */
    protected $bidding;
    /**
     * The ad group information for this new campaign.
     *
     * @var list<AdGroup>
     */
    protected $adGroups;
    /**
     * The end date of the campaign in YYYYMMDD format.
     *
     * @var string
     */
    protected $endDate;
    /**
     * Specifies the targeting type.
     *
     * @var string
     */
    protected $targetingType;
    /**
     * The start date of the campaign in YYYYMMDD format.
     *
     * @var string
     */
    protected $startDate;

    /**
     * The bidding control configuration for the new campaign.
     */
    public function getBidding(): Bidding
    {
        return $this->bidding;
    }

    /**
     * The bidding control configuration for the new campaign.
     */
    public function setBidding(Bidding $bidding): self
    {
        $this->initialized['bidding'] = true;
        $this->bidding = $bidding;

        return $this;
    }

    /**
     * The ad group information for this new campaign.
     *
     * @return list<AdGroup>
     */
    public function getAdGroups(): array
    {
        return $this->adGroups;
    }

    /**
     * The ad group information for this new campaign.
     *
     * @param list<AdGroup> $adGroups
     */
    public function setAdGroups(array $adGroups): self
    {
        $this->initialized['adGroups'] = true;
        $this->adGroups = $adGroups;

        return $this;
    }

    /**
     * The end date of the campaign in YYYYMMDD format.
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * The end date of the campaign in YYYYMMDD format.
     */
    public function setEndDate(string $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Specifies the targeting type.
     */
    public function getTargetingType(): string
    {
        return $this->targetingType;
    }

    /**
     * Specifies the targeting type.
     */
    public function setTargetingType(string $targetingType): self
    {
        $this->initialized['targetingType'] = true;
        $this->targetingType = $targetingType;

        return $this;
    }

    /**
     * The start date of the campaign in YYYYMMDD format.
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * The start date of the campaign in YYYYMMDD format.
     */
    public function setStartDate(string $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;

        return $this;
    }
}
