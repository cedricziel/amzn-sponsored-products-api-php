<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class OptimizationRulesAPISwaggerUpdateOptimizationRulesResponse extends \ArrayObject
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
     * An enumerated error code for machine use.
     *
     * @var string
     */
    protected $code;
    /**
     * @var list<OptimizationRulesAPISwaggerSingleOptimizationRuleResponse>
     */
    protected $responses;

    /**
     * An enumerated error code for machine use.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * An enumerated error code for machine use.
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * @return list<OptimizationRulesAPISwaggerSingleOptimizationRuleResponse>
     */
    public function getResponses(): array
    {
        return $this->responses;
    }

    /**
     * @param list<OptimizationRulesAPISwaggerSingleOptimizationRuleResponse> $responses
     */
    public function setResponses(array $responses): self
    {
        $this->initialized['responses'] = true;
        $this->responses = $responses;

        return $this;
    }
}
