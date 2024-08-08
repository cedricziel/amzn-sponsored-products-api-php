<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Endpoint;

class GetKeywordGroupRecommendations extends \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\EndpointTrait;

    /**
     * This API (currently beta) recommends Keyword Group targets for a given list of Ad ASINs. Keyword Groups is a new control for Amazon Ads Sponsored Products keyword-based campaigns that enables advertisers to reach relevant audiences through a collection of keywords.
     *
     * Once a Keyword Group specification is created, the performance of Keyword Groups will be available in the search terms report. Keyword Groups improves campaign performance by dynamically updating the keywords within a group through the campaign lifecycle and eliminates the need for advertisers to constantly curate new keywords. Additionally, Keyword Groups can be used alongside keywords within the same ad group.
     *
     * @param array $headerParameters {
     *
     * @var string $Amazon-Advertising-API-ClientId The identifier of a client associated with a "Login with Amazon" account
     * @var string $Amazon-Advertising-API-Scope The identifier of a profile associated with the advertiser account. Use `GET` method on Profiles resource to list profiles associated with the access token passed in the HTTP Authorization header and choose profile id `profileId` from the response to pass it as input.
     * @var string $locale User specified locale. If nothing is passed the default for the marketplace will be used. The value should confirm to the IETF BCP 47 standard, using language tags composed of language- and optionally region specific sub-tags (e.g., 'en-us' for American English and 'fr-CA' for Canadian French).
     *             }
     */
    public function __construct(?\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\KeywordGroupsRecommendationsRequest $requestBody = null, array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/sp/targeting/recommendations/keywordGroups';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\KeywordGroupsRecommendationsRequest) {
            return [['Content-Type' => ['application/vnd.spkeywordgroupsrecommendations.v1.0+json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/vnd.spkeywordgroupsrecommendations.v1.0+json']];
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Amazon-Advertising-API-ClientId', 'Amazon-Advertising-API-Scope', 'locale']);
        $optionsResolver->setRequired(['Amazon-Advertising-API-ClientId', 'Amazon-Advertising-API-Scope']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Amazon-Advertising-API-ClientId', ['string']);
        $optionsResolver->addAllowedTypes('Amazon-Advertising-API-Scope', ['string']);
        $optionsResolver->addAllowedTypes('locale', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\KeywordGroupsRecommendationsResponse|null
     *
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetKeywordGroupRecommendationsBadRequestException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetKeywordGroupRecommendationsUnauthorizedException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetKeywordGroupRecommendationsInternalServerErrorException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetKeywordGroupRecommendationsFailedDependencyException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetKeywordGroupRecommendationsForbiddenException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetKeywordGroupRecommendationsNotFoundException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetKeywordGroupRecommendationsUnsupportedMediaTypeException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetKeywordGroupRecommendationsServiceUnavailableException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetKeywordGroupRecommendationsTooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.spkeywordgroupsrecommendations.v1.0+json'))) {
            return $serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\KeywordGroupsRecommendationsResponse', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.spkeywordgroupsrecommendations.v1.0+json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetKeywordGroupRecommendationsBadRequestException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPKeywordGroupsException', 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.spkeywordgroupsrecommendations.v1.0+json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetKeywordGroupRecommendationsUnauthorizedException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPKeywordGroupsException', 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.spkeywordgroupsrecommendations.v1.0+json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetKeywordGroupRecommendationsInternalServerErrorException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPKeywordGroupsException', 'json'), $response);
        }
        if (false === is_null($contentType) && (424 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.spkeywordgroupsrecommendations.v1.0+json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetKeywordGroupRecommendationsFailedDependencyException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPKeywordGroupsException', 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.spkeywordgroupsrecommendations.v1.0+json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetKeywordGroupRecommendationsForbiddenException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPKeywordGroupsException', 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.spkeywordgroupsrecommendations.v1.0+json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetKeywordGroupRecommendationsNotFoundException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPKeywordGroupsException', 'json'), $response);
        }
        if (false === is_null($contentType) && (415 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.spkeywordgroupsrecommendations.v1.0+json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetKeywordGroupRecommendationsUnsupportedMediaTypeException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPKeywordGroupsException', 'json'), $response);
        }
        if (false === is_null($contentType) && (503 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.spkeywordgroupsrecommendations.v1.0+json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetKeywordGroupRecommendationsServiceUnavailableException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPKeywordGroupsException', 'json'), $response);
        }
        if (false === is_null($contentType) && (429 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.spkeywordgroupsrecommendations.v1.0+json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetKeywordGroupRecommendationsTooManyRequestsException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPKeywordGroupsException', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}
