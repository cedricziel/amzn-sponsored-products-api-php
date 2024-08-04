<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception;

class SPGetBudgetRulesRecommendationBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPBudgetRulesRecommendationError
     */
    private $sPBudgetRulesRecommendationError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPBudgetRulesRecommendationError $sPBudgetRulesRecommendationError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request.');
        $this->sPBudgetRulesRecommendationError = $sPBudgetRulesRecommendationError;
        $this->response = $response;
    }

    public function getSPBudgetRulesRecommendationError(): \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPBudgetRulesRecommendationError
    {
        return $this->sPBudgetRulesRecommendationError;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
