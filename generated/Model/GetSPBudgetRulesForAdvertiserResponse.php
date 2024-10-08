<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class GetSPBudgetRulesForAdvertiserResponse extends \ArrayObject
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
     * A list of rules created by the advertiser.
     *
     * @var list<SPBudgetRule>
     */
    protected $budgetRulesForAdvertiserResponse;
    /**
     * To retrieve the next page of results, call the same operation and specify this token in the request. If the `nextToken` field is empty, there are no further results.
     *
     * @var string
     */
    protected $nextToken;

    /**
     * A list of rules created by the advertiser.
     *
     * @return list<SPBudgetRule>
     */
    public function getBudgetRulesForAdvertiserResponse(): array
    {
        return $this->budgetRulesForAdvertiserResponse;
    }

    /**
     * A list of rules created by the advertiser.
     *
     * @param list<SPBudgetRule> $budgetRulesForAdvertiserResponse
     */
    public function setBudgetRulesForAdvertiserResponse(array $budgetRulesForAdvertiserResponse): self
    {
        $this->initialized['budgetRulesForAdvertiserResponse'] = true;
        $this->budgetRulesForAdvertiserResponse = $budgetRulesForAdvertiserResponse;

        return $this;
    }

    /**
     * To retrieve the next page of results, call the same operation and specify this token in the request. If the `nextToken` field is empty, there are no further results.
     */
    public function getNextToken(): string
    {
        return $this->nextToken;
    }

    /**
     * To retrieve the next page of results, call the same operation and specify this token in the request. If the `nextToken` field is empty, there are no further results.
     */
    public function setNextToken(string $nextToken): self
    {
        $this->initialized['nextToken'] = true;
        $this->nextToken = $nextToken;

        return $this;
    }
}
