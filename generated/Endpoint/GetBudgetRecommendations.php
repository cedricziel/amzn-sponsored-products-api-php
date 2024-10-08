<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Endpoint;

class GetBudgetRecommendations extends \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\EndpointTrait;

    /**
     * Given a list of campaigns as input, this API provides the following metrics -  <br> <b>1. Recommended daily budget - </b> Estimated daily budget needed to keep the campaign in budget for the full 24-hour period in a day. Consider this daily budget to minimize your campaign's chances of running out of budget. <br> <b>2. Percent time in budget </b> - Actual average percentage of time the campaign was in budget between the start and end date specified in the response. Note: value -1 means we don’t have enough information to compute the campaign’s percent time in budget. <br> <b>3. Estimated missed impressions, clicks and sales </b> - These are the estimated range of additional impressions, clicks and sales the campaign might have generated between the start and end date specified in the response had it been in budget 100% of the time. These are estimates based on historical traffic and the campaign's past performance (e.g. impressions & clicks generated) but not guaranteed.
     *
     **Requires one of these permissions**:
     * ["advertiser_campaign_edit","advertiser_campaign_view"]
     *
     * @param array $headerParameters {
     *
     * @var string $Amazon-Advertising-API-ClientId The identifier of a client associated with a "Login with Amazon" account
     * @var string $Amazon-Advertising-API-Scope The identifier of a profile associated with the advertiser account. Use `GET` method on Profiles resource to list profiles associated with the access token passed in the HTTP Authorization header.
     *             }
     */
    public function __construct(\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BudgetRecommendationRequest $requestBody, array $headerParameters = [])
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
        return '/sp/campaigns/budgetRecommendations';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BudgetRecommendationRequest) {
            return [['Content-Type' => ['application/vnd.budgetrecommendation.v3+json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/vnd.budgetrecommendation.v3+json']];
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
     * @return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BudgetRecommendationResponse|null
     *
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetBudgetRecommendationsBadRequestException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetBudgetRecommendationsUnprocessableEntityException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetBudgetRecommendationsUnauthorizedException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetBudgetRecommendationsInternalServerErrorException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetBudgetRecommendationsForbiddenException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetBudgetRecommendationsUnsupportedMediaTypeException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetBudgetRecommendationsTooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.budgetrecommendation.v3+json'))) {
            return $serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BudgetRecommendationResponse', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.budgetrecommendation.v3+json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetBudgetRecommendationsBadRequestException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTORBudgetRecommendationError', 'json'), $response);
        }
        if (false === is_null($contentType) && (422 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.budgetrecommendation.v3+json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetBudgetRecommendationsUnprocessableEntityException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTORBudgetRecommendationError', 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.budgetrecommendation.v3+json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetBudgetRecommendationsUnauthorizedException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTORBudgetRecommendationError', 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.budgetrecommendation.v3+json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetBudgetRecommendationsInternalServerErrorException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTORBudgetRecommendationError', 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.budgetrecommendation.v3+json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetBudgetRecommendationsForbiddenException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTORBudgetRecommendationError', 'json'), $response);
        }
        if (false === is_null($contentType) && (415 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.budgetrecommendation.v3+json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetBudgetRecommendationsUnsupportedMediaTypeException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTORBudgetRecommendationError', 'json'), $response);
        }
        if (false === is_null($contentType) && (429 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.budgetrecommendation.v3+json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\GetBudgetRecommendationsTooManyRequestsException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPTORBudgetRecommendationError', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}
