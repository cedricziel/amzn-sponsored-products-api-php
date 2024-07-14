<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class RMSBudgetRule extends \ArrayObject
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
     * The budget rule state.
     *
     * @var string
     */
    protected $ruleState;
    /**
     * Epoch time of budget rule update. Read-only.
     *
     * @var float
     */
    protected $lastUpdatedDate;
    /**
     * Epoch time of budget rule creation. Read-only.
     *
     * @var float
     */
    protected $createdDate;
    /**
     * Object representing details of a budget rule for RMS campaign.
     *
     * @var RMSBudgetRuleDetails
     */
    protected $ruleDetails;
    /**
     * The budget rule identifier.
     *
     * @var string
     */
    protected $ruleId;
    /**
     * The budget rule status. Read-only.
     *
     * @var string
     */
    protected $ruleStatus;

    /**
     * The budget rule state.
     */
    public function getRuleState(): string
    {
        return $this->ruleState;
    }

    /**
     * The budget rule state.
     */
    public function setRuleState(string $ruleState): self
    {
        $this->initialized['ruleState'] = true;
        $this->ruleState = $ruleState;

        return $this;
    }

    /**
     * Epoch time of budget rule update. Read-only.
     */
    public function getLastUpdatedDate(): float
    {
        return $this->lastUpdatedDate;
    }

    /**
     * Epoch time of budget rule update. Read-only.
     */
    public function setLastUpdatedDate(float $lastUpdatedDate): self
    {
        $this->initialized['lastUpdatedDate'] = true;
        $this->lastUpdatedDate = $lastUpdatedDate;

        return $this;
    }

    /**
     * Epoch time of budget rule creation. Read-only.
     */
    public function getCreatedDate(): float
    {
        return $this->createdDate;
    }

    /**
     * Epoch time of budget rule creation. Read-only.
     */
    public function setCreatedDate(float $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Object representing details of a budget rule for RMS campaign.
     */
    public function getRuleDetails(): RMSBudgetRuleDetails
    {
        return $this->ruleDetails;
    }

    /**
     * Object representing details of a budget rule for RMS campaign.
     */
    public function setRuleDetails(RMSBudgetRuleDetails $ruleDetails): self
    {
        $this->initialized['ruleDetails'] = true;
        $this->ruleDetails = $ruleDetails;

        return $this;
    }

    /**
     * The budget rule identifier.
     */
    public function getRuleId(): string
    {
        return $this->ruleId;
    }

    /**
     * The budget rule identifier.
     */
    public function setRuleId(string $ruleId): self
    {
        $this->initialized['ruleId'] = true;
        $this->ruleId = $ruleId;

        return $this;
    }

    /**
     * The budget rule status. Read-only.
     */
    public function getRuleStatus(): string
    {
        return $this->ruleStatus;
    }

    /**
     * The budget rule status. Read-only.
     */
    public function setRuleStatus(string $ruleStatus): self
    {
        $this->initialized['ruleStatus'] = true;
        $this->ruleStatus = $ruleStatus;

        return $this;
    }
}
