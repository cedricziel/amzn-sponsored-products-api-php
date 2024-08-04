<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class OptimizationRulesAPISwaggerValueTypeRuleCriteria extends \ArrayObject
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
     * The comparison operator.
     *
     * @var string
     */
    protected $comparisonOperator;
    /**
     * @var float
     */
    protected $value;

    /**
     * The comparison operator.
     */
    public function getComparisonOperator(): string
    {
        return $this->comparisonOperator;
    }

    /**
     * The comparison operator.
     */
    public function setComparisonOperator(string $comparisonOperator): self
    {
        $this->initialized['comparisonOperator'] = true;
        $this->comparisonOperator = $comparisonOperator;

        return $this;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function setValue(float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
