<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Exception;

class GetTargetPromotionGroupsRecommendationsInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsInternalServerExceptionResponseContent
     */
    private $sponsoredProductsInternalServerExceptionResponseContent;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsInternalServerExceptionResponseContent $sponsoredProductsInternalServerExceptionResponseContent, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('InternalServerException 500 response');
        $this->sponsoredProductsInternalServerExceptionResponseContent = $sponsoredProductsInternalServerExceptionResponseContent;
        $this->response = $response;
    }

    public function getSponsoredProductsInternalServerExceptionResponseContent(): \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsInternalServerExceptionResponseContent
    {
        return $this->sponsoredProductsInternalServerExceptionResponseContent;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
