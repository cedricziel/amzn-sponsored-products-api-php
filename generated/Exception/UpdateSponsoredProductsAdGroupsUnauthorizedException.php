<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Exception;

class UpdateSponsoredProductsAdGroupsUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsUnauthorizedExceptionResponseContent
     */
    private $sponsoredProductsUnauthorizedExceptionResponseContent;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsUnauthorizedExceptionResponseContent $sponsoredProductsUnauthorizedExceptionResponseContent, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('UnauthorizedException 401 response');
        $this->sponsoredProductsUnauthorizedExceptionResponseContent = $sponsoredProductsUnauthorizedExceptionResponseContent;
        $this->response = $response;
    }

    public function getSponsoredProductsUnauthorizedExceptionResponseContent(): \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsUnauthorizedExceptionResponseContent
    {
        return $this->sponsoredProductsUnauthorizedExceptionResponseContent;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
