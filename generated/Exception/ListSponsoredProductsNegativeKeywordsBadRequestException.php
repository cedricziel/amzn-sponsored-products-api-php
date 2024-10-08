<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception;

class ListSponsoredProductsNegativeKeywordsBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsNegativeKeywordAccessExceptionResponseContent
     */
    private $sponsoredProductsNegativeKeywordAccessExceptionResponseContent;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsNegativeKeywordAccessExceptionResponseContent $sponsoredProductsNegativeKeywordAccessExceptionResponseContent, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('NegativeKeywordAccessException 400 response');
        $this->sponsoredProductsNegativeKeywordAccessExceptionResponseContent = $sponsoredProductsNegativeKeywordAccessExceptionResponseContent;
        $this->response = $response;
    }

    public function getSponsoredProductsNegativeKeywordAccessExceptionResponseContent(): \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsNegativeKeywordAccessExceptionResponseContent
    {
        return $this->sponsoredProductsNegativeKeywordAccessExceptionResponseContent;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
