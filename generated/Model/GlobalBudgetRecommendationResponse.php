<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class GlobalBudgetRecommendationResponse extends \ArrayObject
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
     * List of global budget recommendation results for campaigns.
     *
     * @var list<GlobalBudgetRecommendationResult>
     */
    protected $budgetRecommendationsResults;

    /**
     * List of global budget recommendation results for campaigns.
     *
     * @return list<GlobalBudgetRecommendationResult>
     */
    public function getBudgetRecommendationsResults(): array
    {
        return $this->budgetRecommendationsResults;
    }

    /**
     * List of global budget recommendation results for campaigns.
     *
     * @param list<GlobalBudgetRecommendationResult> $budgetRecommendationsResults
     */
    public function setBudgetRecommendationsResults(array $budgetRecommendationsResults): self
    {
        $this->initialized['budgetRecommendationsResults'] = true;
        $this->budgetRecommendationsResults = $budgetRecommendationsResults;

        return $this;
    }
}
