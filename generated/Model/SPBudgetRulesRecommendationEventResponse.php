<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SPBudgetRulesRecommendationEventResponse extends \ArrayObject
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
     * A list of recommended special events with date range and suggested budget increase.
     *
     * @var list<SPBudgetRulesRecommendationEvent>
     */
    protected $recommendedBudgetRuleEvents;

    /**
     * A list of recommended special events with date range and suggested budget increase.
     *
     * @return list<SPBudgetRulesRecommendationEvent>
     */
    public function getRecommendedBudgetRuleEvents(): array
    {
        return $this->recommendedBudgetRuleEvents;
    }

    /**
     * A list of recommended special events with date range and suggested budget increase.
     *
     * @param list<SPBudgetRulesRecommendationEvent> $recommendedBudgetRuleEvents
     */
    public function setRecommendedBudgetRuleEvents(array $recommendedBudgetRuleEvents): self
    {
        $this->initialized['recommendedBudgetRuleEvents'] = true;
        $this->recommendedBudgetRuleEvents = $recommendedBudgetRuleEvents;

        return $this;
    }
}
