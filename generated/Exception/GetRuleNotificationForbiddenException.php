<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception;

class GetRuleNotificationForbiddenException extends ForbiddenException
{
    /**
     * @var \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\CampaignOptimizationRuleError
     */
    private $campaignOptimizationRuleError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\CampaignOptimizationRuleError $campaignOptimizationRuleError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden. The request failed because user does not have access to a specified resource.');
        $this->campaignOptimizationRuleError = $campaignOptimizationRuleError;
        $this->response = $response;
    }

    public function getCampaignOptimizationRuleError(): \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\CampaignOptimizationRuleError
    {
        return $this->campaignOptimizationRuleError;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
