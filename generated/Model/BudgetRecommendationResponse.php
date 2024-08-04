<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class BudgetRecommendationResponse extends \ArrayObject
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
     * List of successful budget recomendation for campagins.
     *
     * @var list<BudgetRecommendationForExistingCampaign>
     */
    protected $budgetRecommendationsSuccessResults;
    /**
     * List of errors that occured when generating bduget recommendation.
     *
     * @var list<BudgetRecommendationError>
     */
    protected $budgetRecommendationsErrorResults;

    /**
     * List of successful budget recomendation for campagins.
     *
     * @return list<BudgetRecommendationForExistingCampaign>
     */
    public function getBudgetRecommendationsSuccessResults(): array
    {
        return $this->budgetRecommendationsSuccessResults;
    }

    /**
     * List of successful budget recomendation for campagins.
     *
     * @param list<BudgetRecommendationForExistingCampaign> $budgetRecommendationsSuccessResults
     */
    public function setBudgetRecommendationsSuccessResults(array $budgetRecommendationsSuccessResults): self
    {
        $this->initialized['budgetRecommendationsSuccessResults'] = true;
        $this->budgetRecommendationsSuccessResults = $budgetRecommendationsSuccessResults;

        return $this;
    }

    /**
     * List of errors that occured when generating bduget recommendation.
     *
     * @return list<BudgetRecommendationError>
     */
    public function getBudgetRecommendationsErrorResults(): array
    {
        return $this->budgetRecommendationsErrorResults;
    }

    /**
     * List of errors that occured when generating bduget recommendation.
     *
     * @param list<BudgetRecommendationError> $budgetRecommendationsErrorResults
     */
    public function setBudgetRecommendationsErrorResults(array $budgetRecommendationsErrorResults): self
    {
        $this->initialized['budgetRecommendationsErrorResults'] = true;
        $this->budgetRecommendationsErrorResults = $budgetRecommendationsErrorResults;

        return $this;
    }
}
