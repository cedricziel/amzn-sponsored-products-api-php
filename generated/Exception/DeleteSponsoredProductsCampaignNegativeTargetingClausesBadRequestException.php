<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Exception;

class DeleteSponsoredProductsCampaignNegativeTargetingClausesBadRequestException extends BadRequestException
{
    /**
     * @var \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCampaignNegativeTargetsMutationExceptionResponseContent
     */
    private $sponsoredProductsCampaignNegativeTargetsMutationExceptionResponseContent;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCampaignNegativeTargetsMutationExceptionResponseContent $sponsoredProductsCampaignNegativeTargetsMutationExceptionResponseContent, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('CampaignNegativeTargetsMutationException 400 response');
        $this->sponsoredProductsCampaignNegativeTargetsMutationExceptionResponseContent = $sponsoredProductsCampaignNegativeTargetsMutationExceptionResponseContent;
        $this->response = $response;
    }

    public function getSponsoredProductsCampaignNegativeTargetsMutationExceptionResponseContent(): \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCampaignNegativeTargetsMutationExceptionResponseContent
    {
        return $this->sponsoredProductsCampaignNegativeTargetsMutationExceptionResponseContent;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
