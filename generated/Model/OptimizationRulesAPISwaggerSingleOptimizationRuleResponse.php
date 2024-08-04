<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class OptimizationRulesAPISwaggerSingleOptimizationRuleResponse extends \ArrayObject
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
     * An enumerated success or error code for machine use.
     *
     * @var string
     */
    protected $code;
    /**
     * @var OptimizationRulesAPISwaggerOptimizationRule
     */
    protected $optimizationRule;
    /**
     * A human-readable description of the error, if unsuccessful.
     *
     * @var string
     */
    protected $details;

    /**
     * An enumerated success or error code for machine use.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * An enumerated success or error code for machine use.
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    public function getOptimizationRule(): OptimizationRulesAPISwaggerOptimizationRule
    {
        return $this->optimizationRule;
    }

    public function setOptimizationRule(OptimizationRulesAPISwaggerOptimizationRule $optimizationRule): self
    {
        $this->initialized['optimizationRule'] = true;
        $this->optimizationRule = $optimizationRule;

        return $this;
    }

    /**
     * A human-readable description of the error, if unsuccessful.
     */
    public function getDetails(): string
    {
        return $this->details;
    }

    /**
     * A human-readable description of the error, if unsuccessful.
     */
    public function setDetails(string $details): self
    {
        $this->initialized['details'] = true;
        $this->details = $details;

        return $this;
    }
}
