<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class OptimizationRulesAPISwaggerRuleCondition extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    protected $criteria;
    /**
     * The attribute of the rule.
     *
     * @var string
     */
    protected $attributeName;

    public function getCriteria()
    {
        return $this->criteria;
    }

    public function setCriteria($criteria): self
    {
        $this->initialized['criteria'] = true;
        $this->criteria = $criteria;

        return $this;
    }

    /**
     * The attribute of the rule.
     */
    public function getAttributeName(): string
    {
        return $this->attributeName;
    }

    /**
     * The attribute of the rule.
     */
    public function setAttributeName(string $attributeName): self
    {
        $this->initialized['attributeName'] = true;
        $this->attributeName = $attributeName;

        return $this;
    }
}
