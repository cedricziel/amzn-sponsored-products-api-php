<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Endpoint;

class GetGlobalRankedKeywordRecommendation extends \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * The <b> POST /sp/global/targets/keywords/recommendations/list </b> endpoint returns recommended keyword targets for a list of countries given either A) a list of ad ASINs per target country or B) a global campaign ID and ad group ID. Please use the recommendationType field to specify if you want to use option A or option B. This endpoint will also return recommended bids along with each recommendation keyword target.<br><br> <b> CountryCodes</b> <br>Global API endpoint accepts <b>countryCodes</b> dictionary. Key is the 2-letter country code. Value is an object with two arrays <b>asins</b> and <b>targets</b>. Each country will be processed in parallel according to rules of <a href="https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Keyword-Targets:~:text=keywords/localize%20endpoint.-,Version%205.0,-New%20Features">version 5</a> recommendation API.<h3> Availability </h3> Global keyword recommendation API is available in all the marketplaces.
     *
     * @param mixed|null $requestBody
     * @param array      $headerParameters {
     *
     * @var string $Amazon-Advertising-API-MarketplaceId The advertiser's Marketplace ID associated with the advertiser account to support single marketplace request. Will not be used if global account id is provided.
     * @var string $Amazon-Advertising-API-AdvertiserId The advertiser's ID associated with the advertiser account to support single marketplace request. Will not be used if global account id is provided.
     * @var string $Amazon-Advertising-API-ClientId The identifier of a client associated with a "Login with Amazon" account. This is a required header for advertisers and integrators using the Advertising API.
     * @var string $Amazon-Advertising-API-Scope The identifier of a profile associated with the advertiser account. Use `GET` method on Profiles resource to list profiles associated with the access token passed in the HTTP Authorization header. This is a required header for advertisers and integrators using the Advertising API.
     * @var string $Amazon-Ads-AccountId The identifier of a profile associated with the advertiser account. Used for authentication of Global Account.
     *             }
     *
     * @param array $accept Accept content header application/vnd.spkeywordsrecommendation.v5+json|application/json
     */
    public function __construct($requestBody = null, array $headerParameters = [], array $accept = [])
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
        return '/sp/global/targets/keywords/recommendations/list';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if (isset($this->body)) {
            return [['Content-Type' => ['application/vnd.spkeywordsrecommendation.v5+json']], json_encode($this->body)];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/vnd.spkeywordsrecommendation.v5+json', 'application/json']];
        }

        return $this->accept;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Amazon-Advertising-API-MarketplaceId', 'Amazon-Advertising-API-AdvertiserId', 'Amazon-Advertising-API-ClientId', 'Amazon-Advertising-API-Scope', 'Amazon-Ads-AccountId']);
        $optionsResolver->setRequired(['Amazon-Advertising-API-ClientId', 'Amazon-Advertising-API-Scope', 'Amazon-Ads-AccountId']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Amazon-Advertising-API-MarketplaceId', ['string']);
        $optionsResolver->addAllowedTypes('Amazon-Advertising-API-AdvertiserId', ['string']);
        $optionsResolver->addAllowedTypes('Amazon-Advertising-API-ClientId', ['string']);
        $optionsResolver->addAllowedTypes('Amazon-Advertising-API-Scope', ['string']);
        $optionsResolver->addAllowedTypes('Amazon-Ads-AccountId', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\GlobalRankedTargetWithThemedBidsResponse|null
     *
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetGlobalRankedKeywordRecommendationBadRequestException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetGlobalRankedKeywordRecommendationUnprocessableEntityException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetGlobalRankedKeywordRecommendationUnauthorizedException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetGlobalRankedKeywordRecommendationInternalServerErrorException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetGlobalRankedKeywordRecommendationUnsupportedMediaTypeException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetGlobalRankedKeywordRecommendationServiceUnavailableException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetGlobalRankedKeywordRecommendationTooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.spkeywordsrecommendation.v5+json'))) {
            return $serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\GlobalRankedTargetWithThemedBidsResponse', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetGlobalRankedKeywordRecommendationBadRequestException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
        }
        if (false === is_null($contentType) && (422 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetGlobalRankedKeywordRecommendationUnprocessableEntityException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetGlobalRankedKeywordRecommendationUnauthorizedException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetGlobalRankedKeywordRecommendationInternalServerErrorException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
        }
        if (false === is_null($contentType) && (415 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetGlobalRankedKeywordRecommendationUnsupportedMediaTypeException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
        }
        if (false === is_null($contentType) && (503 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetGlobalRankedKeywordRecommendationServiceUnavailableException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
        }
        if (false === is_null($contentType) && (429 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetGlobalRankedKeywordRecommendationTooManyRequestsException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}
