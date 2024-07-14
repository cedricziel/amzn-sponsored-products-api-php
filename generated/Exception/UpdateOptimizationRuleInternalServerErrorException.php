<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Exception;

class UpdateOptimizationRuleInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \cedricziel\amznsponsoredproductsapiphp\Generated\Model\CampaignOptimizationRuleError
     */
    private $campaignOptimizationRuleError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\amznsponsoredproductsapiphp\Generated\Model\CampaignOptimizationRuleError $campaignOptimizationRuleError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Internal Server Error. ');
        $this->campaignOptimizationRuleError = $campaignOptimizationRuleError;
        $this->response = $response;
    }

    public function getCampaignOptimizationRuleError(): \cedricziel\amznsponsoredproductsapiphp\Generated\Model\CampaignOptimizationRuleError
    {
        return $this->campaignOptimizationRuleError;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
