<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class OptimizationRulesAPISwaggerRuleAction extends \ArrayObject
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
     * The action taken when the optimization rule is enabled. Defaults to ADOPT.
     *
     * @var string
     */
    protected $actionType;
    /**
     * Details of a rule action.
     *
     * @var OptimizationRulesAPISwaggerActionDetails
     */
    protected $actionDetails;

    /**
     * The action taken when the optimization rule is enabled. Defaults to ADOPT.
     */
    public function getActionType(): string
    {
        return $this->actionType;
    }

    /**
     * The action taken when the optimization rule is enabled. Defaults to ADOPT.
     */
    public function setActionType(string $actionType): self
    {
        $this->initialized['actionType'] = true;
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Details of a rule action.
     */
    public function getActionDetails(): OptimizationRulesAPISwaggerActionDetails
    {
        return $this->actionDetails;
    }

    /**
     * Details of a rule action.
     */
    public function setActionDetails(OptimizationRulesAPISwaggerActionDetails $actionDetails): self
    {
        $this->initialized['actionDetails'] = true;
        $this->actionDetails = $actionDetails;

        return $this;
    }
}
