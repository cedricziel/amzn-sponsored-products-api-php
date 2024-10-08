<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception;

class GetBudgetRecommendationsUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTORBudgetRecommendationError
     */
    private $sPTORBudgetRecommendationError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTORBudgetRecommendationError $sPTORBudgetRecommendationError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized - Request failed because user is not authenticated or is not allowed to invoke the operation.');
        $this->sPTORBudgetRecommendationError = $sPTORBudgetRecommendationError;
        $this->response = $response;
    }

    public function getSPTORBudgetRecommendationError(): \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTORBudgetRecommendationError
    {
        return $this->sPTORBudgetRecommendationError;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
