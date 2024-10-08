<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Endpoint;

class GetProductRecommendations extends \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * Given an advertised ASIN as input, this API returns suggested ASINs to target in a product targeting campaign. We use various methods to generate these suggestions. These include using historical performance of your ad, items that shoppers they frequently view and purchase together, etc. The suggested targets can be retrieved either as a single list, or grouped by ‘theme' – i.e. an accompanying context for why we recommend the items. You can pick the desired format using the Accepts header, please see the response mediaTypes for more information. </br>
     * <h4>Pagination Behavior</h4> The API supports cursor based pagination using encoded cursor values to return next set of records or previously served records. The <b>count</b> parameter in the request body will be used to determine the size of results when requesting the previous page or next page. If no value for <b>count</b> is passed in the request, a default value is assumed. Please refer the range and defaults for these values in the request schema under GetProductRecommendationsRequest. </br> <i><b>Note:</b> The clients should never cache pagination cursor values locally as these values will expire after a certain time period. However a cursor value can be reused to perform retries in case of failures as long as the value has not expired.
     * </br></br> <h4>Themes </h4> Themes provide additional context for why we are recommending a product as a target. See below for an overall list of themes currently available –  </br><b>- Top converting targets</b> – These ASINs generated conversions for the input ASIN in the past 30 days (e.g. your product appeared as an ad on the detail page of these items, and a shopper clicked and purchased your item). The suggested ASINs under this theme are sorted in decreasing order of sales generated for your promoted item. </br><b>- Similar items (frequently viewed together)</b> – Items that shoppers frequently view and click along with your advertised item during a shopping session.
     * </br><b>- Complements</b> – Items that are frequently purchased together as complements. For example, if you are promoting a tennis racquet, you may see tennis balls recommended under this theme.
     * </br><b>- Similar items with low ratings and reviews</b> – Subset of the ‘similar items’ theme containing items that are rated lower than 3 stars and/or with fewer than 5 reviews.
     * </br><b>- Other books read by your readers</b> – Items that shoppers frequently view and click along with your advertised item during a shopping session. </br></br><i><b>Note:</b> Availability of themes differs by input ASIN - some ASINs may not have all above themes available</i>.
     *
     * @param array $headerParameters {
     *
     * @var string $Amazon-Advertising-API-AdvertiserId The Advertiser ID associated with the advertiser account
     * @var string $Amazon-Advertising-API-ClientId The identifier of a client associated with a "Login with Amazon" account. This is a required header for advertisers and integrators using the Advertising API.
     * @var string $Amazon-Advertising-API-Scope The identifier of a profile associated with the advertiser account. Use `GET` method on Profiles resource to list profiles associated with the access token passed in the HTTP Authorization header. This is a required header for advertisers and integrators using the Advertising API.
     *             }
     *
     * @param array $accept Accept content header application/vnd.spproductrecommendationresponse.themes.v3+json|application/vnd.spproductrecommendationresponse.asins.v3+json|application/json
     */
    public function __construct(?\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\GetProductRecommendationsRequest $requestBody = null, array $headerParameters = [], array $accept = [])
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
        return '/sp/targets/products/recommendations';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\GetProductRecommendationsRequest) {
            return [['Content-Type' => ['application/vnd.spproductrecommendation.v3+json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/vnd.spproductrecommendationresponse.themes.v3+json', 'application/vnd.spproductrecommendationresponse.asins.v3+json', 'application/json']];
        }

        return $this->accept;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Amazon-Advertising-API-AdvertiserId', 'Amazon-Advertising-API-ClientId', 'Amazon-Advertising-API-Scope']);
        $optionsResolver->setRequired(['Amazon-Advertising-API-ClientId', 'Amazon-Advertising-API-Scope']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Amazon-Advertising-API-AdvertiserId', ['string']);
        $optionsResolver->addAllowedTypes('Amazon-Advertising-API-ClientId', ['string']);
        $optionsResolver->addAllowedTypes('Amazon-Advertising-API-Scope', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\ProductRecommendationsByTheme|\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\ProductRecommendationsByASIN|null
     *
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetProductRecommendationsBadRequestException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetProductRecommendationsUnprocessableEntityException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetProductRecommendationsInternalServerErrorException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetProductRecommendationsTooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.spproductrecommendationresponse.themes.v3+json')) {
                return $serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\ProductRecommendationsByTheme', 'json');
            }
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.spproductrecommendationresponse.asins.v3+json')) {
                return $serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\ProductRecommendationsByASIN', 'json');
            }
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetProductRecommendationsBadRequestException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BadRequestException', 'json'), $response);
        }
        if (false === is_null($contentType) && (422 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetProductRecommendationsUnprocessableEntityException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\UnprocessableEntityException', 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetProductRecommendationsInternalServerErrorException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\InternalServerException', 'json'), $response);
        }
        if (false === is_null($contentType) && (429 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetProductRecommendationsTooManyRequestsException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\ThrottlingException', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}
