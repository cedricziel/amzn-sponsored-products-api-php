<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception;

class GetGlobalRankedKeywordRecommendationUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError
     */
    private $sPTargetingError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError $sPTargetingError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized - Request failed because user is not authenticated in any of requested marketplaces or
is not allowed to invoke the operation.');
        $this->sPTargetingError = $sPTargetingError;
        $this->response = $response;
    }

    public function getSPTargetingError(): \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError
    {
        return $this->sPTargetingError;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
