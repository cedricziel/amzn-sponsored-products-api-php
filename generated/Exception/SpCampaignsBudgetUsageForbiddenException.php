<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception;

class SpCampaignsBudgetUsageForbiddenException extends ForbiddenException
{
    /**
     * @var \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BudgetUsageError
     */
    private $budgetUsageError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BudgetUsageError $budgetUsageError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden. The request failed because user does not have access to a specified resource.');
        $this->budgetUsageError = $budgetUsageError;
        $this->response = $response;
    }

    public function getBudgetUsageError(): \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BudgetUsageError
    {
        return $this->budgetUsageError;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
