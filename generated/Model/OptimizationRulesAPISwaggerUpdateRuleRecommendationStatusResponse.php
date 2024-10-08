<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class OptimizationRulesAPISwaggerUpdateRuleRecommendationStatusResponse extends \ArrayObject
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
     * @var list<OptimizationRulesAPISwaggerUpdateRuleRecommendationStatusResponseSuccessItem>
     */
    protected $success;
    /**
     * @var list<OptimizationRulesAPISwaggerUpdateRuleRecommendationStatusResponseErrorItem>
     */
    protected $error;

    /**
     * @return list<OptimizationRulesAPISwaggerUpdateRuleRecommendationStatusResponseSuccessItem>
     */
    public function getSuccess(): array
    {
        return $this->success;
    }

    /**
     * @param list<OptimizationRulesAPISwaggerUpdateRuleRecommendationStatusResponseSuccessItem> $success
     */
    public function setSuccess(array $success): self
    {
        $this->initialized['success'] = true;
        $this->success = $success;

        return $this;
    }

    /**
     * @return list<OptimizationRulesAPISwaggerUpdateRuleRecommendationStatusResponseErrorItem>
     */
    public function getError(): array
    {
        return $this->error;
    }

    /**
     * @param list<OptimizationRulesAPISwaggerUpdateRuleRecommendationStatusResponseErrorItem> $error
     */
    public function setError(array $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;

        return $this;
    }
}
