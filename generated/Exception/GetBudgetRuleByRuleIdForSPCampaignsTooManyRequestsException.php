<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Exception;

class GetBudgetRuleByRuleIdForSPCampaignsTooManyRequestsException extends TooManyRequestsException
{
    /**
     * @var \cedricziel\amznsponsoredproductsapiphp\Generated\Model\BudgetRuleError
     */
    private $budgetRuleError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\amznsponsoredproductsapiphp\Generated\Model\BudgetRuleError $budgetRuleError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Too Many Requests. The request was rate-limited. Retry later.');
        $this->budgetRuleError = $budgetRuleError;
        $this->response = $response;
    }

    public function getBudgetRuleError(): \cedricziel\amznsponsoredproductsapiphp\Generated\Model\BudgetRuleError
    {
        return $this->budgetRuleError;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
