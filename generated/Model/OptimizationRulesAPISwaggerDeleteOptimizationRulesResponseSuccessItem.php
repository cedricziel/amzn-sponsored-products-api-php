<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class OptimizationRulesAPISwaggerDeleteOptimizationRulesResponseSuccessItem extends \ArrayObject
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
     * Index of the optimization rule in the request.
     *
     * @var int
     */
    protected $index;
    /**
     * The id that uniquely identified the optimization rule that succeeded in deletion.
     *
     * @var string
     */
    protected $optimizationRuleId;

    /**
     * Index of the optimization rule in the request.
     */
    public function getIndex(): int
    {
        return $this->index;
    }

    /**
     * Index of the optimization rule in the request.
     */
    public function setIndex(int $index): self
    {
        $this->initialized['index'] = true;
        $this->index = $index;

        return $this;
    }

    /**
     * The id that uniquely identified the optimization rule that succeeded in deletion.
     */
    public function getOptimizationRuleId(): string
    {
        return $this->optimizationRuleId;
    }

    /**
     * The id that uniquely identified the optimization rule that succeeded in deletion.
     */
    public function setOptimizationRuleId(string $optimizationRuleId): self
    {
        $this->initialized['optimizationRuleId'] = true;
        $this->optimizationRuleId = $optimizationRuleId;

        return $this;
    }
}
