<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class OptimizationRulesAPISwaggerSearchOptimizationRulesRequest extends \ArrayObject
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
     * @var string
     */
    protected $nextToken;
    /**
     * Filter on optimization rules.
     *
     * @var OptimizationRulesAPISwaggerOptimizationRuleFilter
     */
    protected $optimizationRuleFilter;
    /**
     * @var float
     */
    protected $pageSize;
    /**
     * Filter on campaigns.
     *
     * @var OptimizationRulesAPISwaggerCampaignFilter
     */
    protected $campaignFilter;

    public function getNextToken(): string
    {
        return $this->nextToken;
    }

    public function setNextToken(string $nextToken): self
    {
        $this->initialized['nextToken'] = true;
        $this->nextToken = $nextToken;

        return $this;
    }

    /**
     * Filter on optimization rules.
     */
    public function getOptimizationRuleFilter(): OptimizationRulesAPISwaggerOptimizationRuleFilter
    {
        return $this->optimizationRuleFilter;
    }

    /**
     * Filter on optimization rules.
     */
    public function setOptimizationRuleFilter(OptimizationRulesAPISwaggerOptimizationRuleFilter $optimizationRuleFilter): self
    {
        $this->initialized['optimizationRuleFilter'] = true;
        $this->optimizationRuleFilter = $optimizationRuleFilter;

        return $this;
    }

    public function getPageSize(): float
    {
        return $this->pageSize;
    }

    public function setPageSize(float $pageSize): self
    {
        $this->initialized['pageSize'] = true;
        $this->pageSize = $pageSize;

        return $this;
    }

    /**
     * Filter on campaigns.
     */
    public function getCampaignFilter(): OptimizationRulesAPISwaggerCampaignFilter
    {
        return $this->campaignFilter;
    }

    /**
     * Filter on campaigns.
     */
    public function setCampaignFilter(OptimizationRulesAPISwaggerCampaignFilter $campaignFilter): self
    {
        $this->initialized['campaignFilter'] = true;
        $this->campaignFilter = $campaignFilter;

        return $this;
    }
}
