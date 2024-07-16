<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Exception;

class GetCampaignRecommendationsBadRequestException extends BadRequestException
{
    /**
     * @var \cedricziel\amznsponsoredproductsapiphp\Generated\Model\ValidationException
     */
    private $validationException;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\amznsponsoredproductsapiphp\Generated\Model\ValidationException $validationException, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Invalid Request - The input fails to satisfy the constraints of the API.');
        $this->validationException = $validationException;
        $this->response = $response;
    }

    public function getValidationException(): \cedricziel\amznsponsoredproductsapiphp\Generated\Model\ValidationException
    {
        return $this->validationException;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
