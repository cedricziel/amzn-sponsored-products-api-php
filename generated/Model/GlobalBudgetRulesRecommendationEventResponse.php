<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class GlobalBudgetRulesRecommendationEventResponse extends \ArrayObject
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
    protected $resultStatus = 'SUCCESS';
    /**
     * A list of recommended special events with date range and suggested budget increase for each country targeted by the campaign.
     *
     * @var array<string, list<SPBudgetRulesRecommendationEvent>>
     */
    protected $countryBudgetRuleEventsRecommendations;
    /**
     * @var list<GlobalBudgetRulesRecommendationError>
     */
    protected $errors;

    public function getResultStatus(): string
    {
        return $this->resultStatus;
    }

    public function setResultStatus(string $resultStatus): self
    {
        $this->initialized['resultStatus'] = true;
        $this->resultStatus = $resultStatus;

        return $this;
    }

    /**
     * A list of recommended special events with date range and suggested budget increase for each country targeted by the campaign.
     *
     * @return array<string, list<SPBudgetRulesRecommendationEvent>>
     */
    public function getCountryBudgetRuleEventsRecommendations(): iterable
    {
        return $this->countryBudgetRuleEventsRecommendations;
    }

    /**
     * A list of recommended special events with date range and suggested budget increase for each country targeted by the campaign.
     *
     * @param array<string, list<SPBudgetRulesRecommendationEvent>> $countryBudgetRuleEventsRecommendations
     */
    public function setCountryBudgetRuleEventsRecommendations(iterable $countryBudgetRuleEventsRecommendations): self
    {
        $this->initialized['countryBudgetRuleEventsRecommendations'] = true;
        $this->countryBudgetRuleEventsRecommendations = $countryBudgetRuleEventsRecommendations;

        return $this;
    }

    /**
     * @return list<GlobalBudgetRulesRecommendationError>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param list<GlobalBudgetRulesRecommendationError> $errors
     */
    public function setErrors(array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }
}
