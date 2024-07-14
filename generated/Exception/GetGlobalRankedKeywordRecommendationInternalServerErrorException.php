<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Exception;

class GetGlobalRankedKeywordRecommendationInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SPTargetingError
     */
    private $sPTargetingError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SPTargetingError $sPTargetingError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Internal Server Error - Something went wrong on the server. Retry
later and report an error if unresolved.');
        $this->sPTargetingError = $sPTargetingError;
        $this->response = $response;
    }

    public function getSPTargetingError(): \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SPTargetingError
    {
        return $this->sPTargetingError;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
