<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class UpdateSBBudgetRulesRequest extends \ArrayObject
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
     * A list of budget rule details.
     *
     * @var list<SBBudgetRule>
     */
    protected $budgetRulesDetails;

    /**
     * A list of budget rule details.
     *
     * @return list<SBBudgetRule>
     */
    public function getBudgetRulesDetails(): array
    {
        return $this->budgetRulesDetails;
    }

    /**
     * A list of budget rule details.
     *
     * @param list<SBBudgetRule> $budgetRulesDetails
     */
    public function setBudgetRulesDetails(array $budgetRulesDetails): self
    {
        $this->initialized['budgetRulesDetails'] = true;
        $this->budgetRulesDetails = $budgetRulesDetails;

        return $this;
    }
}
