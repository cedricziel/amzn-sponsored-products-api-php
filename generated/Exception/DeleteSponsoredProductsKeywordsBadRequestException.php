<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception;

class DeleteSponsoredProductsKeywordsBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsKeywordMutationExceptionResponseContent
     */
    private $sponsoredProductsKeywordMutationExceptionResponseContent;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsKeywordMutationExceptionResponseContent $sponsoredProductsKeywordMutationExceptionResponseContent, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('KeywordMutationException 400 response');
        $this->sponsoredProductsKeywordMutationExceptionResponseContent = $sponsoredProductsKeywordMutationExceptionResponseContent;
        $this->response = $response;
    }

    public function getSponsoredProductsKeywordMutationExceptionResponseContent(): \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsKeywordMutationExceptionResponseContent
    {
        return $this->sponsoredProductsKeywordMutationExceptionResponseContent;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
