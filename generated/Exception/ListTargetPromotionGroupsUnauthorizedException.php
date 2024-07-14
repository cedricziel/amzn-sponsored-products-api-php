<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Exception;

class ListTargetPromotionGroupsUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsUnauthenticatedExceptionResponseContent
     */
    private $sponsoredProductsUnauthenticatedExceptionResponseContent;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsUnauthenticatedExceptionResponseContent $sponsoredProductsUnauthenticatedExceptionResponseContent, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('UnauthenticatedException 401 response');
        $this->sponsoredProductsUnauthenticatedExceptionResponseContent = $sponsoredProductsUnauthenticatedExceptionResponseContent;
        $this->response = $response;
    }

    public function getSponsoredProductsUnauthenticatedExceptionResponseContent(): \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsUnauthenticatedExceptionResponseContent
    {
        return $this->sponsoredProductsUnauthenticatedExceptionResponseContent;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
