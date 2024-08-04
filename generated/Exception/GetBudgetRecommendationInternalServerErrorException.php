<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception;

class GetBudgetRecommendationInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BudgetRecommendationNewCampaignsException
     */
    private $budgetRecommendationNewCampaignsException;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BudgetRecommendationNewCampaignsException $budgetRecommendationNewCampaignsException, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('500 response.');
        $this->budgetRecommendationNewCampaignsException = $budgetRecommendationNewCampaignsException;
        $this->response = $response;
    }

    public function getBudgetRecommendationNewCampaignsException(): \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BudgetRecommendationNewCampaignsException
    {
        return $this->budgetRecommendationNewCampaignsException;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
