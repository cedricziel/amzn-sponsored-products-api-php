<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception;

class GetGlobalRankedKeywordRecommendationBadRequestException extends BadRequestException
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
        parent::__construct('Bad Request');
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
