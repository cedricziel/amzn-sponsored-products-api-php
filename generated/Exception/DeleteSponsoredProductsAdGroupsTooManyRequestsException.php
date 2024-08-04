<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception;

class DeleteSponsoredProductsAdGroupsTooManyRequestsException extends TooManyRequestsException
{
    /**
     * @var \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsThrottlingExceptionResponseContent
     */
    private $sponsoredProductsThrottlingExceptionResponseContent;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsThrottlingExceptionResponseContent $sponsoredProductsThrottlingExceptionResponseContent, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('ThrottlingException 429 response');
        $this->sponsoredProductsThrottlingExceptionResponseContent = $sponsoredProductsThrottlingExceptionResponseContent;
        $this->response = $response;
    }

    public function getSponsoredProductsThrottlingExceptionResponseContent(): \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsThrottlingExceptionResponseContent
    {
        return $this->sponsoredProductsThrottlingExceptionResponseContent;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
