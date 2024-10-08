<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception;

class UpdateSponsoredProductsAdGroupsBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsAdGroupMutationExceptionResponseContent
     */
    private $sponsoredProductsAdGroupMutationExceptionResponseContent;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsAdGroupMutationExceptionResponseContent $sponsoredProductsAdGroupMutationExceptionResponseContent, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('AdGroupMutationException 400 response');
        $this->sponsoredProductsAdGroupMutationExceptionResponseContent = $sponsoredProductsAdGroupMutationExceptionResponseContent;
        $this->response = $response;
    }

    public function getSponsoredProductsAdGroupMutationExceptionResponseContent(): \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsAdGroupMutationExceptionResponseContent
    {
        return $this->sponsoredProductsAdGroupMutationExceptionResponseContent;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
