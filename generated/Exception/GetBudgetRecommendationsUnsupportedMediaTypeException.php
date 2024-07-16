<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Exception;

class GetBudgetRecommendationsUnsupportedMediaTypeException extends UnsupportedMediaTypeException
{
    /**
     * @var \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SPTORBudgetRecommendationError
     */
    private $sPTORBudgetRecommendationError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SPTORBudgetRecommendationError $sPTORBudgetRecommendationError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unsupported Media Type - the payload is in a format not supported by this method.');
        $this->sPTORBudgetRecommendationError = $sPTORBudgetRecommendationError;
        $this->response = $response;
    }

    public function getSPTORBudgetRecommendationError(): \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SPTORBudgetRecommendationError
    {
        return $this->sPTORBudgetRecommendationError;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
