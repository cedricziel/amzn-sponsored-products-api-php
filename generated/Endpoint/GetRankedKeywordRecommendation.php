<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Endpoint;

class GetRankedKeywordRecommendation extends \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * The <b> POST /sp/targets/keywords/recommendations </b> endpoint returns recommended keyword targets given either A) a list of ad ASINs or B) a campaign ID and ad group ID. Please use the recommendationType field to specify if you want to use option A or option B. This endpoint will also return recommended bids along with each recommendation keyword target.<br><br> <b> Ranking </b> <br> The keyword recommendations will be ranked in descending order of clicks or impressions, depending on the <b>sortDimension</b> field provided by the user. You may also input your own keyword targets to be ranked alongside the keyword recommendations by using the <b>targets</b> array. <br><br> <b> Localization </b> <br> Use the <b> locale </b> field to get keywords in your specified locale. Supported marketplace to locale mappings can be found at the <a href='https://advertising.amazon.com/API/docs/en-us/localization/#/Keyword%20Localization'>POST /keywords/localize</a> endpoint. <h1> Version 5.0 </h1>  <h2> New Features </h2> Version 5.0 utilizes the new theme-based bid recommendations, which can be retrieved at the endpoint <b>/sp/targets/bid/recommendations</b>, to return improved bid recommendations for each keyword. Theme-based bid recommendations provide \\\"themes\\\" and \\\"impact metrics\\\" along with each bid suggestion to help you choose the right bid for your keyword target.<br><br><b>Themes</b><br> We now may return multiple bid suggestions for each keyword target. Each suggestion will have a theme to express the business objective of the bid. Available themes are: <ul> <li> CONVERSION_OPPORTUNITIES - The default theme which aims to maximize number of conversions. </li> <li> SPECIAL_DAYS - A theme available during high sales events such as Prime Day, to anticipate an increase in sales and competition.</li></ul><b>Impact Metrics</b><br>We have added impact metrics which provide insight on the number of clicks and conversions you will receive for targeting a keyword at a certain bid. <br><br><b>Bidding Strategy</b><br> You may now specify your bidding strategy in the KEYWORDS_BY_ASINS request to get bid suggestions tailored to your bidding strategy. For KEYWORDS_BY_ADGROUP requests, you will not specify a bidding strategy, because the bidding strategy of the ad group is used. The three bidding strategies are: <ul> <li> LEGACY_FOR_SALES - Dynamic bids (down only) </li> <li> AUTO_FOR_SALES - Dynamic bids (up and down) </li> <li> MANUAL - Fixed bids </li> </ul> <h3> Availability </h3> Version 5.0 is only available in the following marketplaces: US, CA, UK, DE, FR, ES, IN, JP. <h1> Version 4.0 </h1> <h2> New features </h2> Version 4.0 allows users to retrieve recommended keyword targets which are sorted in descending order of clicks or conversions. The default sort dimension, if not specified, ranks recommendations by our interal ranking mechanism. We have also added search term metrics. <b> Search term impression share </b> indicates the percentage share of all ad-attributed impressions you received on that keyword in the last 30 days. This metric helps advertisers identify potential opportunities based on their share on relevant keywords. <b> Search term impression rank </b> indicates your ranking among all advertisers for the keyword by ad impressions in a marketplace. It tells an advertiser how many advertisers had higher share of ad impressions. <i> Search term information is only available for keywords the advertiser targeted with ad impressions. </i> <h3> Availability </h3> Version 4.0 is available in all marketplaces.
     *
     **Requires one of these permissions**:
     * ["advertiser_campaign_edit","advertiser_campaign_view"]
     *
     * @param mixed|null $requestBody
     * @param array      $headerParameters {
     *
     * @var string $Amazon-Advertising-API-MarketplaceId The advertiser's Marketplace ID associated with the advertiser.
     *             account.
     * @var string $Amazon-Advertising-API-AdvertiserId The advertiser's ID associated with the advertiser account
     * @var string $Amazon-Advertising-API-ClientId The identifier of a client associated with a "Login with Amazon" account. This is a required header for advertisers and integrators using the Advertising API.
     * @var string $Amazon-Advertising-API-Scope The identifier of a profile associated with the advertiser account. Use `GET` method on Profiles resource to list profiles associated with the access token passed in the HTTP Authorization header. This is a required header for advertisers and integrators using the Advertising API.
     *             }
     *
     * @param array $accept Accept content header application/vnd.spkeywordsrecommendation.v3+json|application/vnd.spkeywordsrecommendation.v5+json|application/vnd.spkeywordsrecommendation.v4+json
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
        return '/sp/targets/keywords/recommendations';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if (isset($this->body)) {
            return [['Content-Type' => ['application/vnd.spkeywordsrecommendation.v3+json']], json_encode($this->body)];
        }
        if (isset($this->body)) {
            return [['Content-Type' => ['application/vnd.spkeywordsrecommendation.v5+json']], json_encode($this->body)];
        }
        if (isset($this->body)) {
            return [['Content-Type' => ['application/vnd.spkeywordsrecommendation.v4+json']], json_encode($this->body)];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/vnd.spkeywordsrecommendation.v3+json', 'application/vnd.spkeywordsrecommendation.v5+json', 'application/vnd.spkeywordsrecommendation.v4+json']];
        }

        return $this->accept;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Amazon-Advertising-API-MarketplaceId', 'Amazon-Advertising-API-AdvertiserId', 'Amazon-Advertising-API-ClientId', 'Amazon-Advertising-API-Scope']);
        $optionsResolver->setRequired(['Amazon-Advertising-API-ClientId', 'Amazon-Advertising-API-Scope']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Amazon-Advertising-API-MarketplaceId', ['string']);
        $optionsResolver->addAllowedTypes('Amazon-Advertising-API-AdvertiserId', ['string']);
        $optionsResolver->addAllowedTypes('Amazon-Advertising-API-ClientId', ['string']);
        $optionsResolver->addAllowedTypes('Amazon-Advertising-API-Scope', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\KeywordTargetResponse|\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\RankedTargetWithThemedBidsResponse|\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\RankedTargetResponse|null
     *
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationBadRequestException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationUnprocessableEntityException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationUnauthorizedException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationInternalServerErrorException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationUnsupportedMediaTypeException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationServiceUnavailableException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationTooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            if (false !== mb_strpos($contentType, 'application/vnd.spkeywordsrecommendation.v3+json')) {
                return $serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\KeywordTargetResponse', 'json');
            }
            if (false !== mb_strpos($contentType, 'application/vnd.spkeywordsrecommendation.v5+json')) {
                return $serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\RankedTargetWithThemedBidsResponse', 'json');
            }
            if (false !== mb_strpos($contentType, 'application/vnd.spkeywordsrecommendation.v4+json')) {
                return $serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\RankedTargetResponse', 'json');
            }
        }
        if (400 === $status) {
            if (false !== mb_strpos($contentType, 'application/vnd.spkeywordsrecommendation.v3+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationBadRequestException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
            }
            if (false !== mb_strpos($contentType, 'application/vnd.spkeywordsrecommendation.v5+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationBadRequestException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
            }
            if (false !== mb_strpos($contentType, 'application/vnd.spkeywordsrecommendation.v4+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationBadRequestException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
            }
        }
        if (422 === $status) {
            if (false !== mb_strpos($contentType, 'application/vnd.spkeywordsrecommendation.v3+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationUnprocessableEntityException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
            }
            if (false !== mb_strpos($contentType, 'application/vnd.spkeywordsrecommendation.v5+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationUnprocessableEntityException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
            }
            if (false !== mb_strpos($contentType, 'application/vnd.spkeywordsrecommendation.v4+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationUnprocessableEntityException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
            }
        }
        if (401 === $status) {
            if (false !== mb_strpos($contentType, 'application/vnd.spkeywordsrecommendation.v3+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationUnauthorizedException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
            }
            if (false !== mb_strpos($contentType, 'application/vnd.spkeywordsrecommendation.v5+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationUnauthorizedException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
            }
            if (false !== mb_strpos($contentType, 'application/vnd.spkeywordsrecommendation.v4+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationUnauthorizedException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
            }
        }
        if (500 === $status) {
            if (false !== mb_strpos($contentType, 'application/vnd.spkeywordsrecommendation.v3+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationInternalServerErrorException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
            }
            if (false !== mb_strpos($contentType, 'application/vnd.spkeywordsrecommendation.v5+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationInternalServerErrorException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
            }
            if (false !== mb_strpos($contentType, 'application/vnd.spkeywordsrecommendation.v4+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationInternalServerErrorException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
            }
        }
        if (415 === $status) {
            if (false !== mb_strpos($contentType, 'application/vnd.spkeywordsrecommendation.v3+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationUnsupportedMediaTypeException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
            }
            if (false !== mb_strpos($contentType, 'application/vnd.spkeywordsrecommendation.v5+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationUnsupportedMediaTypeException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
            }
            if (false !== mb_strpos($contentType, 'application/vnd.spkeywordsrecommendation.v4+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationUnsupportedMediaTypeException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
            }
        }
        if (503 === $status) {
            if (false !== mb_strpos($contentType, 'application/vnd.spkeywordsrecommendation.v3+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationServiceUnavailableException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
            }
            if (false !== mb_strpos($contentType, 'application/vnd.spkeywordsrecommendation.v5+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationServiceUnavailableException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
            }
            if (false !== mb_strpos($contentType, 'application/vnd.spkeywordsrecommendation.v4+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationServiceUnavailableException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
            }
        }
        if (429 === $status) {
            if (false !== mb_strpos($contentType, 'application/vnd.spkeywordsrecommendation.v3+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationTooManyRequestsException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
            }
            if (false !== mb_strpos($contentType, 'application/vnd.spkeywordsrecommendation.v5+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationTooManyRequestsException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
            }
            if (false !== mb_strpos($contentType, 'application/vnd.spkeywordsrecommendation.v4+json')) {
                throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetRankedKeywordRecommendationTooManyRequestsException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTargetingError', 'json'), $response);
            }
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}
