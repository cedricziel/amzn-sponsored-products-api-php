<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsBudget extends \ArrayObject
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
     * @var string
     */
    protected $budgetType;
    /**
     * Monetary value.
     *
     * @var float
     */
    protected $budget;
    /**
     * Monetary value.
     *
     * @var float
     */
    protected $effectiveBudget;

    public function getBudgetType(): string
    {
        return $this->budgetType;
    }

    public function setBudgetType(string $budgetType): self
    {
        $this->initialized['budgetType'] = true;
        $this->budgetType = $budgetType;

        return $this;
    }

    /**
     * Monetary value.
     */
    public function getBudget(): float
    {
        return $this->budget;
    }

    /**
     * Monetary value.
     */
    public function setBudget(float $budget): self
    {
        $this->initialized['budget'] = true;
        $this->budget = $budget;

        return $this;
    }

    /**
     * Monetary value.
     */
    public function getEffectiveBudget(): float
    {
        return $this->effectiveBudget;
    }

    /**
     * Monetary value.
     */
    public function setEffectiveBudget(float $effectiveBudget): self
    {
        $this->initialized['effectiveBudget'] = true;
        $this->effectiveBudget = $effectiveBudget;

        return $this;
    }
}
