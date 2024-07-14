<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsCampaignNegativeTargetingClauseSuccessResponseItem extends \ArrayObject
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
     * the CampaignNegativeTargets ID.
     *
     * @var string
     */
    protected $campaignNegativeTargetingClauseId;
    /**
     * @var SponsoredProductsCampaignNegativeTargetingClause
     */
    protected $campaignNegativeTargetingClauses;
    /**
     * the index of the CampaignNegativeTargets in the array from the request body.
     *
     * @var int
     */
    protected $index;

    /**
     * the CampaignNegativeTargets ID.
     */
    public function getCampaignNegativeTargetingClauseId(): string
    {
        return $this->campaignNegativeTargetingClauseId;
    }

    /**
     * the CampaignNegativeTargets ID.
     */
    public function setCampaignNegativeTargetingClauseId(string $campaignNegativeTargetingClauseId): self
    {
        $this->initialized['campaignNegativeTargetingClauseId'] = true;
        $this->campaignNegativeTargetingClauseId = $campaignNegativeTargetingClauseId;

        return $this;
    }

    public function getCampaignNegativeTargetingClauses(): SponsoredProductsCampaignNegativeTargetingClause
    {
        return $this->campaignNegativeTargetingClauses;
    }

    public function setCampaignNegativeTargetingClauses(SponsoredProductsCampaignNegativeTargetingClause $campaignNegativeTargetingClauses): self
    {
        $this->initialized['campaignNegativeTargetingClauses'] = true;
        $this->campaignNegativeTargetingClauses = $campaignNegativeTargetingClauses;

        return $this;
    }

    /**
     * the index of the CampaignNegativeTargets in the array from the request body.
     */
    public function getIndex(): int
    {
        return $this->index;
    }

    /**
     * the index of the CampaignNegativeTargets in the array from the request body.
     */
    public function setIndex(int $index): self
    {
        $this->initialized['index'] = true;
        $this->index = $index;

        return $this;
    }
}
