<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception;

class CreateSponsoredProductsCampaignNegativeKeywordsBadRequestException extends BadRequestException
{
    /**
     * @var \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsCampaignNegativeKeywordMutationExceptionResponseContent
     */
    private $sponsoredProductsCampaignNegativeKeywordMutationExceptionResponseContent;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsCampaignNegativeKeywordMutationExceptionResponseContent $sponsoredProductsCampaignNegativeKeywordMutationExceptionResponseContent, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('CampaignNegativeKeywordMutationException 400 response');
        $this->sponsoredProductsCampaignNegativeKeywordMutationExceptionResponseContent = $sponsoredProductsCampaignNegativeKeywordMutationExceptionResponseContent;
        $this->response = $response;
    }

    public function getSponsoredProductsCampaignNegativeKeywordMutationExceptionResponseContent(): \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsCampaignNegativeKeywordMutationExceptionResponseContent
    {
        return $this->sponsoredProductsCampaignNegativeKeywordMutationExceptionResponseContent;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
