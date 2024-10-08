<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception;

class ListSponsoredProductsProductAdsBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsProductAdAccessExceptionResponseContent
     */
    private $sponsoredProductsProductAdAccessExceptionResponseContent;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsProductAdAccessExceptionResponseContent $sponsoredProductsProductAdAccessExceptionResponseContent, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('ProductAdAccessException 400 response');
        $this->sponsoredProductsProductAdAccessExceptionResponseContent = $sponsoredProductsProductAdAccessExceptionResponseContent;
        $this->response = $response;
    }

    public function getSponsoredProductsProductAdAccessExceptionResponseContent(): \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsProductAdAccessExceptionResponseContent
    {
        return $this->sponsoredProductsProductAdAccessExceptionResponseContent;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
