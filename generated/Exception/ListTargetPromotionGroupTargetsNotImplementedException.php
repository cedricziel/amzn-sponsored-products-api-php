<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception;

class ListTargetPromotionGroupTargetsNotImplementedException extends NotImplementedException
{
    /**
     * @var \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsNotImplementedExceptionResponseContent
     */
    private $sponsoredProductsNotImplementedExceptionResponseContent;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsNotImplementedExceptionResponseContent $sponsoredProductsNotImplementedExceptionResponseContent, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('NotImplementedException 501 response');
        $this->sponsoredProductsNotImplementedExceptionResponseContent = $sponsoredProductsNotImplementedExceptionResponseContent;
        $this->response = $response;
    }

    public function getSponsoredProductsNotImplementedExceptionResponseContent(): \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsNotImplementedExceptionResponseContent
    {
        return $this->sponsoredProductsNotImplementedExceptionResponseContent;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
