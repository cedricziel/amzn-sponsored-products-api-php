<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception;

class DeleteSponsoredProductsAdGroupsInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsInternalServerExceptionResponseContent
     */
    private $sponsoredProductsInternalServerExceptionResponseContent;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsInternalServerExceptionResponseContent $sponsoredProductsInternalServerExceptionResponseContent, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('InternalServerException 500 response');
        $this->sponsoredProductsInternalServerExceptionResponseContent = $sponsoredProductsInternalServerExceptionResponseContent;
        $this->response = $response;
    }

    public function getSponsoredProductsInternalServerExceptionResponseContent(): \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsInternalServerExceptionResponseContent
    {
        return $this->sponsoredProductsInternalServerExceptionResponseContent;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
