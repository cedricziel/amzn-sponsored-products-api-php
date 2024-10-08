<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Endpoint;

class GetCategoryRecommendationsForASINs extends \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * Returns a list of category recommendations for the input list of ASINs. Use this API to discover relevant categories to target. To find ASINs, either use the Product Metadata API or browse the Amazon Retail Website. <br> <ul><li>Response can be requested in different versions with the help of accept header. Please review the response mediaTypes for more information.</li><ul>.
     *
     **Requires one of these permissions**:
     * ["advertiser_campaign_edit","advertiser_campaign_view"]
     *
     * @param array $queryParameters {
     *
     * @var string $locale The locale to which the caller wishes to translate the list of category recommendations to. For example, if the caller wishes to receive a list of category recommendations in Simplified Chinese, the locale parameter should be set to zh_CN. If no locale is provided, the returned list of category recommendations will be in the default language of the marketplace.
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Amazon-Advertising-API-ClientId The identifier of a client associated with a "Login with Amazon" account. This is a required header for advertisers and integrators using the Advertising API.
     * @var string $Amazon-Advertising-API-Scope The identifier of a profile associated with the advertiser account. Use `GET` method on Profiles resource to list profiles associated with the access token passed in the HTTP Authorization header. This is a required header for advertisers and integrators using the Advertising API.
     * @var string $Prefer Used to indicate the behavior preferred by the client but is not required for successful completion of the request. Supported values will be updated in the future.
     *             }
     *
     * @param array $accept Accept content header application/vnd.spproducttargetingresponse.v3+json|application/vnd.spproducttargetingresponse.v4+json|application/vnd.spproducttargetingresponse.v5+json|application/json
     */
    public function __construct(?\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\GetCategoryRecommendationsForAsinsRequest $requestBody = null, array $queryParameters = [], array $headerParameters = [], array $accept = [])
    {
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/sp/targets/categories/recommendations';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\GetCategoryRecommendationsForAsinsRequest) {
            return [['Content-Type' => ['application/vnd.spproducttargeting.v3+json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/vnd.spproducttargetingresponse.v3+json', 'application/vnd.spproducttargetingresponse.v4+json', 'application/vnd.spproducttargetingresponse.v5+json', 'application/json']];
        }

        return $this->accept;
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['locale']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('locale', ['string']);

        return $optionsResolver;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Amazon-Advertising-API-ClientId', 'Amazon-Advertising-API-Scope', 'Prefer']);
        $optionsResolver->setRequired(['Amazon-Advertising-API-ClientId', 'Amazon-Advertising-API-Scope']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Amazon-Advertising-API-ClientId', ['string']);
        $optionsResolver->addAllowedTypes('Amazon-Advertising-API-Scope', ['string']);
        $optionsResolver->addAllowedTypes('Prefer', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\CategoryRecommendations|\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\CategoryRecommendationsWithAsinCounts|\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\CategoryRecommendationsWithAsinCountsLoP|null
     *
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetCategoryRecommendationsForASINsBadRequestException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetCategoryRecommendationsForASINsUnprocessableEntityException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetCategoryRecommendationsForASINsUnauthorizedException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetCategoryRecommendationsForASINsInternalServerErrorException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetCategoryRecommendationsForASINsTooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.spproducttargetingresponse.v3+json')) {
                return $serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\CategoryRecommendations', 'json');
            }
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.spproducttargetingresponse.v4+json')) {
                return $serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\CategoryRecommendationsWithAsinCounts', 'json');
            }
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.spproducttargetingresponse.v5+json')) {
                return $serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\CategoryRecommendationsWithAsinCountsLoP', 'json');
            }
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetCategoryRecommendationsForASINsBadRequestException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BadRequestException', 'json'), $response);
        }
        if (false === is_null($contentType) && (422 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetCategoryRecommendationsForASINsUnprocessableEntityException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\UnprocessableEntityException', 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetCategoryRecommendationsForASINsUnauthorizedException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\UnauthorizedException', 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetCategoryRecommendationsForASINsInternalServerErrorException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\InternalServerException', 'json'), $response);
        }
        if (false === is_null($contentType) && (429 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetCategoryRecommendationsForASINsTooManyRequestsException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\ThrottlingException', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}
