<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Exception;

class SpCampaignsBudgetUsageUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \cedricziel\amznsponsoredproductsapiphp\Generated\Model\BudgetUsageError
     */
    private $budgetUsageError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\amznsponsoredproductsapiphp\Generated\Model\BudgetUsageError $budgetUsageError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unprocessable entity. The server understood the request, but was unable to process the instruction.');
        $this->budgetUsageError = $budgetUsageError;
        $this->response = $response;
    }

    public function getBudgetUsageError(): \cedricziel\amznsponsoredproductsapiphp\Generated\Model\BudgetUsageError
    {
        return $this->budgetUsageError;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
