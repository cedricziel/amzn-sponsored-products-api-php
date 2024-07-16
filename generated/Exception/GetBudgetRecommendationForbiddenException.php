<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Exception;

class GetBudgetRecommendationForbiddenException extends ForbiddenException
{
    /**
     * @var \cedricziel\amznsponsoredproductsapiphp\Generated\Model\BudgetRecommendationNewCampaignsException
     */
    private $budgetRecommendationNewCampaignsException;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\amznsponsoredproductsapiphp\Generated\Model\BudgetRecommendationNewCampaignsException $budgetRecommendationNewCampaignsException, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('403 response.');
        $this->budgetRecommendationNewCampaignsException = $budgetRecommendationNewCampaignsException;
        $this->response = $response;
    }

    public function getBudgetRecommendationNewCampaignsException(): \cedricziel\amznsponsoredproductsapiphp\Generated\Model\BudgetRecommendationNewCampaignsException
    {
        return $this->budgetRecommendationNewCampaignsException;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
