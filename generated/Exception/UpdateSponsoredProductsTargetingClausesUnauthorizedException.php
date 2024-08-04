<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception;

class UpdateSponsoredProductsTargetingClausesUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsUnauthorizedExceptionResponseContent
     */
    private $sponsoredProductsUnauthorizedExceptionResponseContent;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsUnauthorizedExceptionResponseContent $sponsoredProductsUnauthorizedExceptionResponseContent, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('UnauthorizedException 401 response');
        $this->sponsoredProductsUnauthorizedExceptionResponseContent = $sponsoredProductsUnauthorizedExceptionResponseContent;
        $this->response = $response;
    }

    public function getSponsoredProductsUnauthorizedExceptionResponseContent(): \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsUnauthorizedExceptionResponseContent
    {
        return $this->sponsoredProductsUnauthorizedExceptionResponseContent;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
