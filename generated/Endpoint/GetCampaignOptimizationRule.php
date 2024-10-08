<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Endpoint;

class GetCampaignOptimizationRule extends \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\EndpointTrait;
    protected $campaignOptimizationId;
    protected $accept;

    /**
     **Requires one of these permissions**:
     * ["advertiser_campaign_edit","advertiser_campaign_view"].
     *
     * @param string $campaignOptimizationId the sp campaign optimization rule identifier
     * @param array  $headerParameters       {
     *
     * @var string $Amazon-Advertising-API-ClientId The identifier of a client associated with a "Login with Amazon" account. This is a required header for advertisers and integrators using the Advertising API.
     * @var string $Amazon-Advertising-API-Scope The identifier of a profile associated with the advertiser account. Use `GET` method on Profiles resource to list profiles associated with the access token passed in the HTTP Authorization header. This is a required header for advertisers and integrators using the Advertising API.
     *             }
     *
     * @param array $accept Accept content header application/vnd.optimizationrules.v1+json|application/json
     */
    public function __construct(string $campaignOptimizationId, array $headerParameters = [], array $accept = [])
    {
        $this->campaignOptimizationId = $campaignOptimizationId;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{campaignOptimizationId}'], [$this->campaignOptimizationId], '/sp/rules/campaignOptimization/{campaignOptimizationId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/vnd.optimizationrules.v1+json', 'application/json']];
        }

        return $this->accept;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Amazon-Advertising-API-ClientId', 'Amazon-Advertising-API-Scope']);
        $optionsResolver->setRequired(['Amazon-Advertising-API-ClientId', 'Amazon-Advertising-API-Scope']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Amazon-Advertising-API-ClientId', ['string']);
        $optionsResolver->addAllowedTypes('Amazon-Advertising-API-Scope', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\GetSPCampaignOptimizationRuleResponse|null
     *
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetCampaignOptimizationRuleBadRequestException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetCampaignOptimizationRuleUnprocessableEntityException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetCampaignOptimizationRuleUnauthorizedException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetCampaignOptimizationRuleInternalServerErrorException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetCampaignOptimizationRuleForbiddenException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetCampaignOptimizationRuleNotFoundException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetCampaignOptimizationRuleTooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.optimizationrules.v1+json'))) {
            return $serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\GetSPCampaignOptimizationRuleResponse', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetCampaignOptimizationRuleBadRequestException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\CampaignOptimizationRuleError', 'json'), $response);
        }
        if (false === is_null($contentType) && (422 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetCampaignOptimizationRuleUnprocessableEntityException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\CampaignOptimizationRuleError', 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetCampaignOptimizationRuleUnauthorizedException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\CampaignOptimizationRuleError', 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetCampaignOptimizationRuleInternalServerErrorException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\CampaignOptimizationRuleError', 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetCampaignOptimizationRuleForbiddenException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\CampaignOptimizationRuleError', 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetCampaignOptimizationRuleNotFoundException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\CampaignOptimizationRuleError', 'json'), $response);
        }
        if (false === is_null($contentType) && (429 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetCampaignOptimizationRuleTooManyRequestsException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\CampaignOptimizationRuleError', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}
