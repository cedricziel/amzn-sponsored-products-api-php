<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception;

class UpdateSponsoredProductsProductAdsUnsupportedMediaTypeException extends UnsupportedMediaTypeException
{
    /**
     * @var \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsUnsupportedMediaTypeExceptionResponseContent
     */
    private $sponsoredProductsUnsupportedMediaTypeExceptionResponseContent;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsUnsupportedMediaTypeExceptionResponseContent $sponsoredProductsUnsupportedMediaTypeExceptionResponseContent, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('UnsupportedMediaTypeException 415 response');
        $this->sponsoredProductsUnsupportedMediaTypeExceptionResponseContent = $sponsoredProductsUnsupportedMediaTypeExceptionResponseContent;
        $this->response = $response;
    }

    public function getSponsoredProductsUnsupportedMediaTypeExceptionResponseContent(): \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsUnsupportedMediaTypeExceptionResponseContent
    {
        return $this->sponsoredProductsUnsupportedMediaTypeExceptionResponseContent;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
