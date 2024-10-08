<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Endpoint;

class GetThemeBasedBidRecommendationForAdGroupV1 extends \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * This API is currently available at marketplaces where SP is available. The API supports keyword, auto and product targets. The API will return a 422 response when an unsupported marketplace or target is provided. <h1> Version 4.0 </h1>  <h2> New Features </h2> Version 4.0 allows users to get theme-based bid recommendations for product targeting expressions, including PAT_ASIN, PAT_CATEGORY and PAT_CATEGORY_REFINEMENT. Version 4.0 supports keyword, auto and product targets in all marketplaces. Version 4.0 removes "impact metrics" when returning each bid suggestion. <br> Version 4.0 also allows users to get theme-based bid recommendations for keyword group targeting expressions with the type KEYWORD_GROUP. This new type is only available in US marketplace. <br>.
     *
     **Requires one of these permissions**:
     * ["advertiser_campaign_edit","advertiser_campaign_view"]
     *
     * @param mixed|null $requestBody
     * @param array      $headerParameters {
     *
     * @var string $Amazon-Advertising-API-ClientId The identifier of a client associated with a "Login with Amazon" account
     * @var string $Amazon-Advertising-API-Scope The identifier of a profile associated with the advertiser account. Use `GET` method on Profiles resource to list profiles associated with the access token passed in the HTTP Authorization header and choose profile id `profileId` from the response to pass it as input.
     *             }
     *
     * @param array $accept Accept content header application/vnd.spthemebasedbidrecommendation.v4+json|application/vnd.spthemebasedbidrecommendation.v3+json
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
        return '/sp/targets/bid/recommendations';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if (isset($this->body)) {
            return [['Content-Type' => ['application/vnd.spthemebasedbidrecommendation.v4+json']], json_encode($this->body)];
        }
        if (isset($this->body)) {
            return [['Content-Type' => ['application/vnd.spthemebasedbidrecommendation.v3+json']], json_encode($this->body)];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/vnd.spthemebasedbidrecommendation.v4+json', 'application/vnd.spthemebasedbidrecommendation.v3+json']];
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
     * @return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\ThemeBasedBidRecommendationResponseV4|\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\ThemeBasedBidRecommendationResponse|null
     *
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetThemeBasedBidRecommendationForAdGroupV1BadRequestException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetThemeBasedBidRecommendationForAdGroupV1UnprocessableEntityException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetThemeBasedBidRecommendationForAdGroupV1UnauthorizedException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetThemeBasedBidRecommendationForAdGroupV1InternalServerErrorException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetThemeBasedBidRecommendationForAdGroupV1UnsupportedMediaTypeException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetThemeBasedBidRecommendationForAdGroupV1MethodNotAllowedException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetThemeBasedBidRecommendationForAdGroupV1NotAcceptableException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetThemeBasedBidRecommendationForAdGroupV1TooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.spthemebasedbidrecommendation.v4+json')) {
                return $serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\ThemeBasedBidRecommendationResponseV4', 'json');
            }
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.spthemebasedbidrecommendation.v3+json')) {
                return $serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\ThemeBasedBidRecommendationResponse', 'json');
            }
        }
        if (400 === $status) {
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.spthemebasedbidrecommendation.v4+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetThemeBasedBidRecommendationForAdGroupV1BadRequestException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BidRecommendationError', 'json'), $response);
            }
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.spthemebasedbidrecommendation.v3+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetThemeBasedBidRecommendationForAdGroupV1BadRequestException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BidRecommendationError', 'json'), $response);
            }
        }
        if (422 === $status) {
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.spthemebasedbidrecommendation.v4+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetThemeBasedBidRecommendationForAdGroupV1UnprocessableEntityException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BidRecommendationError', 'json'), $response);
            }
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.spthemebasedbidrecommendation.v3+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetThemeBasedBidRecommendationForAdGroupV1UnprocessableEntityException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BidRecommendationError', 'json'), $response);
            }
        }
        if (401 === $status) {
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.spthemebasedbidrecommendation.v4+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetThemeBasedBidRecommendationForAdGroupV1UnauthorizedException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BidRecommendationError', 'json'), $response);
            }
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.spthemebasedbidrecommendation.v3+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetThemeBasedBidRecommendationForAdGroupV1UnauthorizedException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BidRecommendationError', 'json'), $response);
            }
        }
        if (500 === $status) {
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.spthemebasedbidrecommendation.v4+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetThemeBasedBidRecommendationForAdGroupV1InternalServerErrorException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BidRecommendationError', 'json'), $response);
            }
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.spthemebasedbidrecommendation.v3+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetThemeBasedBidRecommendationForAdGroupV1InternalServerErrorException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BidRecommendationError', 'json'), $response);
            }
        }
        if (415 === $status) {
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.spthemebasedbidrecommendation.v4+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetThemeBasedBidRecommendationForAdGroupV1UnsupportedMediaTypeException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BidRecommendationError', 'json'), $response);
            }
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.spthemebasedbidrecommendation.v3+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetThemeBasedBidRecommendationForAdGroupV1UnsupportedMediaTypeException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BidRecommendationError', 'json'), $response);
            }
        }
        if (405 === $status) {
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.spthemebasedbidrecommendation.v4+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetThemeBasedBidRecommendationForAdGroupV1MethodNotAllowedException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BidRecommendationError', 'json'), $response);
            }
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.spthemebasedbidrecommendation.v3+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetThemeBasedBidRecommendationForAdGroupV1MethodNotAllowedException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BidRecommendationError', 'json'), $response);
            }
        }
        if (406 === $status) {
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.spthemebasedbidrecommendation.v4+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetThemeBasedBidRecommendationForAdGroupV1NotAcceptableException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BidRecommendationError', 'json'), $response);
            }
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.spthemebasedbidrecommendation.v3+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetThemeBasedBidRecommendationForAdGroupV1NotAcceptableException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BidRecommendationError', 'json'), $response);
            }
        }
        if (429 === $status) {
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.spthemebasedbidrecommendation.v4+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetThemeBasedBidRecommendationForAdGroupV1TooManyRequestsException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BidRecommendationError', 'json'), $response);
            }
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.spthemebasedbidrecommendation.v3+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetThemeBasedBidRecommendationForAdGroupV1TooManyRequestsException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BidRecommendationError', 'json'), $response);
            }
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}
