<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class BudgetUsagePortfolio extends \ArrayObject
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
     * Budget usage percentage (spend / available budget) for the given budget policy.
     *
     * @var float
     */
    protected $budgetUsagePercent;
    /**
     * ID of requested resource.
     *
     * @var string
     */
    protected $portfolioId;
    /**
     * Last evaluation time for budget usage.
     *
     * @var \DateTime
     */
    protected $usageUpdatedTimestamp;
    /**
     * An index to maintain order of the portfolioIds.
     *
     * @var float
     */
    protected $index;
    /**
     * Budget amount of resource requested.
     *
     * @var float
     */
    protected $budget;

    /**
     * Budget usage percentage (spend / available budget) for the given budget policy.
     */
    public function getBudgetUsagePercent(): float
    {
        return $this->budgetUsagePercent;
    }

    /**
     * Budget usage percentage (spend / available budget) for the given budget policy.
     */
    public function setBudgetUsagePercent(float $budgetUsagePercent): self
    {
        $this->initialized['budgetUsagePercent'] = true;
        $this->budgetUsagePercent = $budgetUsagePercent;

        return $this;
    }

    /**
     * ID of requested resource.
     */
    public function getPortfolioId(): string
    {
        return $this->portfolioId;
    }

    /**
     * ID of requested resource.
     */
    public function setPortfolioId(string $portfolioId): self
    {
        $this->initialized['portfolioId'] = true;
        $this->portfolioId = $portfolioId;

        return $this;
    }

    /**
     * Last evaluation time for budget usage.
     */
    public function getUsageUpdatedTimestamp(): \DateTime
    {
        return $this->usageUpdatedTimestamp;
    }

    /**
     * Last evaluation time for budget usage.
     */
    public function setUsageUpdatedTimestamp(\DateTime $usageUpdatedTimestamp): self
    {
        $this->initialized['usageUpdatedTimestamp'] = true;
        $this->usageUpdatedTimestamp = $usageUpdatedTimestamp;

        return $this;
    }

    /**
     * An index to maintain order of the portfolioIds.
     */
    public function getIndex(): float
    {
        return $this->index;
    }

    /**
     * An index to maintain order of the portfolioIds.
     */
    public function setIndex(float $index): self
    {
        $this->initialized['index'] = true;
        $this->index = $index;

        return $this;
    }

    /**
     * Budget amount of resource requested.
     */
    public function getBudget(): float
    {
        return $this->budget;
    }

    /**
     * Budget amount of resource requested.
     */
    public function setBudget(float $budget): self
    {
        $this->initialized['budget'] = true;
        $this->budget = $budget;

        return $this;
    }
}
