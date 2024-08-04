<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception;

class UpdateSponsoredProductsNegativeKeywordsBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsNegativeKeywordMutationExceptionResponseContent
     */
    private $sponsoredProductsNegativeKeywordMutationExceptionResponseContent;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsNegativeKeywordMutationExceptionResponseContent $sponsoredProductsNegativeKeywordMutationExceptionResponseContent, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('NegativeKeywordMutationException 400 response');
        $this->sponsoredProductsNegativeKeywordMutationExceptionResponseContent = $sponsoredProductsNegativeKeywordMutationExceptionResponseContent;
        $this->response = $response;
    }

    public function getSponsoredProductsNegativeKeywordMutationExceptionResponseContent(): \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsNegativeKeywordMutationExceptionResponseContent
    {
        return $this->sponsoredProductsNegativeKeywordMutationExceptionResponseContent;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
