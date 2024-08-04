<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class OptimizationRulesAPISwaggerDeleteOptimizationRulesRequest extends \ArrayObject
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
     * An array of rule identifiers.
     *
     * @var list<string>
     */
    protected $optimizationRuleIds;

    /**
     * An array of rule identifiers.
     *
     * @return list<string>
     */
    public function getOptimizationRuleIds(): array
    {
        return $this->optimizationRuleIds;
    }

    /**
     * An array of rule identifiers.
     *
     * @param list<string> $optimizationRuleIds
     */
    public function setOptimizationRuleIds(array $optimizationRuleIds): self
    {
        $this->initialized['optimizationRuleIds'] = true;
        $this->optimizationRuleIds = $optimizationRuleIds;

        return $this;
    }
}
