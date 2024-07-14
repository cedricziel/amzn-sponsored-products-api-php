<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Exception;

class UpdateSponsoredProductsNegativeTargetingClausesBadRequestException extends BadRequestException
{
    /**
     * @var \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsNegativeTargetMutationExceptionResponseContent
     */
    private $sponsoredProductsNegativeTargetMutationExceptionResponseContent;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsNegativeTargetMutationExceptionResponseContent $sponsoredProductsNegativeTargetMutationExceptionResponseContent, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('NegativeTargetMutationException 400 response');
        $this->sponsoredProductsNegativeTargetMutationExceptionResponseContent = $sponsoredProductsNegativeTargetMutationExceptionResponseContent;
        $this->response = $response;
    }

    public function getSponsoredProductsNegativeTargetMutationExceptionResponseContent(): \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsNegativeTargetMutationExceptionResponseContent
    {
        return $this->sponsoredProductsNegativeTargetMutationExceptionResponseContent;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
