<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception;

class GetCampaignRecommendationsUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\UnprocessableEntityException
     */
    private $unprocessableEntityException;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\UnprocessableEntityException $unprocessableEntityException, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unprocessable entity - Failed due to invalid parameters.');
        $this->unprocessableEntityException = $unprocessableEntityException;
        $this->response = $response;
    }

    public function getUnprocessableEntityException(): \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\UnprocessableEntityException
    {
        return $this->unprocessableEntityException;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
