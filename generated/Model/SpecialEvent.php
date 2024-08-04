<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SpecialEvent extends \ArrayObject
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
     * Deprecated. The factor used to boost the recommended budget.
     *
     * @var float
     */
    protected $budgetModifier;
    /**
     * The end date of the special event in YYYYMMDD format.
     *
     * @var string
     */
    protected $endDate;
    /**
     * Recommended daily budget for the new campaign during the special event period.
     *
     * @var float
     */
    protected $dailyBudget;
    /**
     * The key of the special event.
     *
     * @var string
     */
    protected $eventKey;
    /**
     * The name of the special event.
     *
     * @var string
     */
    protected $eventName;
    /**
     * The start date of the special event in YYYYMMDD format.
     *
     * @var string
     */
    protected $startDate;
    /**
     * Forecasted impact metrics for next 7 days or during special days.
     *
     * @var Benchmark
     */
    protected $benchmark;

    /**
     * Deprecated. The factor used to boost the recommended budget.
     */
    public function getBudgetModifier(): float
    {
        return $this->budgetModifier;
    }

    /**
     * Deprecated. The factor used to boost the recommended budget.
     */
    public function setBudgetModifier(float $budgetModifier): self
    {
        $this->initialized['budgetModifier'] = true;
        $this->budgetModifier = $budgetModifier;

        return $this;
    }

    /**
     * The end date of the special event in YYYYMMDD format.
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * The end date of the special event in YYYYMMDD format.
     */
    public function setEndDate(string $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Recommended daily budget for the new campaign during the special event period.
     */
    public function getDailyBudget(): float
    {
        return $this->dailyBudget;
    }

    /**
     * Recommended daily budget for the new campaign during the special event period.
     */
    public function setDailyBudget(float $dailyBudget): self
    {
        $this->initialized['dailyBudget'] = true;
        $this->dailyBudget = $dailyBudget;

        return $this;
    }

    /**
     * The key of the special event.
     */
    public function getEventKey(): string
    {
        return $this->eventKey;
    }

    /**
     * The key of the special event.
     */
    public function setEventKey(string $eventKey): self
    {
        $this->initialized['eventKey'] = true;
        $this->eventKey = $eventKey;

        return $this;
    }

    /**
     * The name of the special event.
     */
    public function getEventName(): string
    {
        return $this->eventName;
    }

    /**
     * The name of the special event.
     */
    public function setEventName(string $eventName): self
    {
        $this->initialized['eventName'] = true;
        $this->eventName = $eventName;

        return $this;
    }

    /**
     * The start date of the special event in YYYYMMDD format.
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * The start date of the special event in YYYYMMDD format.
     */
    public function setStartDate(string $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Forecasted impact metrics for next 7 days or during special days.
     */
    public function getBenchmark(): Benchmark
    {
        return $this->benchmark;
    }

    /**
     * Forecasted impact metrics for next 7 days or during special days.
     */
    public function setBenchmark(Benchmark $benchmark): self
    {
        $this->initialized['benchmark'] = true;
        $this->benchmark = $benchmark;

        return $this;
    }
}
