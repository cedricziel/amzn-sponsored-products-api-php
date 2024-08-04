<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception;

class UpdateSponsoredProductsProductAdsBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsProductAdMutationExceptionResponseContent
     */
    private $sponsoredProductsProductAdMutationExceptionResponseContent;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsProductAdMutationExceptionResponseContent $sponsoredProductsProductAdMutationExceptionResponseContent, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('ProductAdMutationException 400 response');
        $this->sponsoredProductsProductAdMutationExceptionResponseContent = $sponsoredProductsProductAdMutationExceptionResponseContent;
        $this->response = $response;
    }

    public function getSponsoredProductsProductAdMutationExceptionResponseContent(): \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsProductAdMutationExceptionResponseContent
    {
        return $this->sponsoredProductsProductAdMutationExceptionResponseContent;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
