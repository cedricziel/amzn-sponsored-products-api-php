<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SBBudgetRuleDetails extends \ArrayObject
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
     * @var RuleDuration
     */
    protected $duration;
    /**
     * @var Recurrence
     */
    protected $recurrence;
    /**
     * The type of budget rule. SCHEDULE: A budget rule based on a start and end date. PERFORMANCE: A budget rule based on advertising performance criteria.
     *
     * @var string
     */
    protected $ruleType;
    /**
     * @var BudgetIncreaseBy
     */
    protected $budgetIncreaseBy;
    /**
     * The budget rule name. Required to be unique within a campaign.
     *
     * @var string
     */
    protected $name;
    /**
     * @var PerformanceMeasureConditionForSB
     */
    protected $performanceMeasureCondition;

    public function getDuration(): RuleDuration
    {
        return $this->duration;
    }

    public function setDuration(RuleDuration $duration): self
    {
        $this->initialized['duration'] = true;
        $this->duration = $duration;

        return $this;
    }

    public function getRecurrence(): Recurrence
    {
        return $this->recurrence;
    }

    public function setRecurrence(Recurrence $recurrence): self
    {
        $this->initialized['recurrence'] = true;
        $this->recurrence = $recurrence;

        return $this;
    }

    /**
     * The type of budget rule. SCHEDULE: A budget rule based on a start and end date. PERFORMANCE: A budget rule based on advertising performance criteria.
     */
    public function getRuleType(): string
    {
        return $this->ruleType;
    }

    /**
     * The type of budget rule. SCHEDULE: A budget rule based on a start and end date. PERFORMANCE: A budget rule based on advertising performance criteria.
     */
    public function setRuleType(string $ruleType): self
    {
        $this->initialized['ruleType'] = true;
        $this->ruleType = $ruleType;

        return $this;
    }

    public function getBudgetIncreaseBy(): BudgetIncreaseBy
    {
        return $this->budgetIncreaseBy;
    }

    public function setBudgetIncreaseBy(BudgetIncreaseBy $budgetIncreaseBy): self
    {
        $this->initialized['budgetIncreaseBy'] = true;
        $this->budgetIncreaseBy = $budgetIncreaseBy;

        return $this;
    }

    /**
     * The budget rule name. Required to be unique within a campaign.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The budget rule name. Required to be unique within a campaign.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getPerformanceMeasureCondition(): PerformanceMeasureConditionForSB
    {
        return $this->performanceMeasureCondition;
    }

    public function setPerformanceMeasureCondition(PerformanceMeasureConditionForSB $performanceMeasureCondition): self
    {
        $this->initialized['performanceMeasureCondition'] = true;
        $this->performanceMeasureCondition = $performanceMeasureCondition;

        return $this;
    }
}
