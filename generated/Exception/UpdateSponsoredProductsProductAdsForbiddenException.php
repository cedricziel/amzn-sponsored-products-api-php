<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Exception;

class UpdateSponsoredProductsProductAdsForbiddenException extends ForbiddenException
{
    /**
     * @var \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsAccessDeniedExceptionResponseContent
     */
    private $sponsoredProductsAccessDeniedExceptionResponseContent;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsAccessDeniedExceptionResponseContent $sponsoredProductsAccessDeniedExceptionResponseContent, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('AccessDeniedException 403 response');
        $this->sponsoredProductsAccessDeniedExceptionResponseContent = $sponsoredProductsAccessDeniedExceptionResponseContent;
        $this->response = $response;
    }

    public function getSponsoredProductsAccessDeniedExceptionResponseContent(): \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsAccessDeniedExceptionResponseContent
    {
        return $this->sponsoredProductsAccessDeniedExceptionResponseContent;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
