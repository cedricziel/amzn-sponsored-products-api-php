<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception;

class CreateOptimizationRuleInternalServerErrorException extends InternalServerErrorException
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
        parent::__construct('Internal Server Error. Something went wrong on the server. Retry later and report an error if unresolved.');
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
