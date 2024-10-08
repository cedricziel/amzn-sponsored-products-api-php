<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Endpoint;

class DeleteSponsoredProductsCampaignNegativeKeywords extends \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * Delete campaign negative keywords.
     *
     **Requires one of these permissions**:
     * ["advertiser_campaign_edit"]
     *
     * @param array $headerParameters {
     *
     * @var string $Amazon-Advertising-API-ClientId The identifier of a client associated with a "Login with Amazon" account
     * @var string $Amazon-Advertising-API-Scope The identifier of a profile associated with the advertiser account. Use GET method on Profiles resource to list
     *             profiles associated with the access token passed in the HTTP Authorization header.
     *             }
     *
     * @param array $accept Accept content header application/json|application/vnd.spCampaignNegativeKeyword.v3+json
     */
    public function __construct(\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsDeleteSponsoredProductsCampaignNegativeKeywordsRequestContent $requestBody, array $headerParameters = [], array $accept = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/sp/campaignNegativeKeywords/delete';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsDeleteSponsoredProductsCampaignNegativeKeywordsRequestContent) {
            return [['Content-Type' => ['application/vnd.spCampaignNegativeKeyword.v3+json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'application/vnd.spCampaignNegativeKeyword.v3+json']];
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
     * @return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsDeleteSponsoredProductsCampaignNegativeKeywordsResponseContent|null
     *
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\DeleteSponsoredProductsCampaignNegativeKeywordsBadRequestException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\DeleteSponsoredProductsCampaignNegativeKeywordsUnauthorizedException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\DeleteSponsoredProductsCampaignNegativeKeywordsInternalServerErrorException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\DeleteSponsoredProductsCampaignNegativeKeywordsForbiddenException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\DeleteSponsoredProductsCampaignNegativeKeywordsUnsupportedMediaTypeException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\DeleteSponsoredProductsCampaignNegativeKeywordsTooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\DeleteSponsoredProductsCampaignNegativeKeywordsBadRequestException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsCampaignNegativeKeywordMutationExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\DeleteSponsoredProductsCampaignNegativeKeywordsUnauthorizedException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsUnauthorizedExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\DeleteSponsoredProductsCampaignNegativeKeywordsInternalServerErrorException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsInternalServerExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\DeleteSponsoredProductsCampaignNegativeKeywordsForbiddenException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsAccessDeniedExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (415 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\DeleteSponsoredProductsCampaignNegativeKeywordsUnsupportedMediaTypeException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsUnsupportedMediaTypeExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (207 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.spcampaignnegativekeyword.v3+json'))) {
            return $serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsDeleteSponsoredProductsCampaignNegativeKeywordsResponseContent', 'json');
        }
        if (false === is_null($contentType) && (429 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\DeleteSponsoredProductsCampaignNegativeKeywordsTooManyRequestsException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsThrottlingExceptionResponseContent', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}
