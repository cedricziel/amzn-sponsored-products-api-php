<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class GetSBBudgetRuleResponse extends \ArrayObject
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
     * @var SBBudgetRule
     */
    protected $budgetRule;

    public function getBudgetRule(): SBBudgetRule
    {
        return $this->budgetRule;
    }

    public function setBudgetRule(SBBudgetRule $budgetRule): self
    {
        $this->initialized['budgetRule'] = true;
        $this->budgetRule = $budgetRule;

        return $this;
    }
}
