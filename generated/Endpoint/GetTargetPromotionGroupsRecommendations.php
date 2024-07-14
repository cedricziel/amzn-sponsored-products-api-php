<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Endpoint;

class GetTargetPromotionGroupsRecommendations extends \cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Client\BaseEndpoint implements \cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Client\Endpoint
{
    use \cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * Retrieves keyword and product targets of an auto-targeting campaign as recommendations for promoting to a manual-targeting campaign. The recommendations are based on performance heuristics of the targets.
     *
     **Requires one of these permissions**:
     * ["advertiser_campaign_edit","advertiser_campaign_view"]
     *
     * @param array $headerParameters {
     *
     * @var string $Amazon-Advertising-API-ClientId The identifier of a client associated with a 'Login with Amazon' account
     * @var string $Amazon-Advertising-API-Scope The identifier of a profile associated with the advertiser account. Use GET method on Profiles resource to list profiles associated with the access token passed in the HTTP Authorization header.
     *             }
     *
     * @param array $accept Accept content header application/vnd.spTargetPromotionGroupsRecommendations.v1+json|application/json
     */
    public function __construct(?\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsGetTargetPromotionGroupsRecommendationsRequestContent $requestBody = null, array $headerParameters = [], array $accept = [])
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
        return '/sp/targetPromotionGroups/recommendations';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsGetTargetPromotionGroupsRecommendationsRequestContent) {
            return [['Content-Type' => ['application/vnd.spTargetPromotionGroupsRecommendations.v1+json']], $this->body];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/vnd.spTargetPromotionGroupsRecommendations.v1+json', 'application/json']];
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
     * @return null
     *
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetTargetPromotionGroupsRecommendationsBadRequestException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetTargetPromotionGroupsRecommendationsInternalServerErrorException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetTargetPromotionGroupsRecommendationsForbiddenException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetTargetPromotionGroupsRecommendationsUnsupportedMediaTypeException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetTargetPromotionGroupsRecommendationsServiceUnavailableException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetTargetPromotionGroupsRecommendationsTooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetTargetPromotionGroupsRecommendationsBadRequestException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsSchemaValidationExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetTargetPromotionGroupsRecommendationsInternalServerErrorException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsInternalServerExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetTargetPromotionGroupsRecommendationsForbiddenException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsAccessDeniedExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (415 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetTargetPromotionGroupsRecommendationsUnsupportedMediaTypeException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsUnsupportedMediaTypeExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (503 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetTargetPromotionGroupsRecommendationsServiceUnavailableException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsServiceUnavailableExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (429 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetTargetPromotionGroupsRecommendationsTooManyRequestsException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsThrottlingExceptionResponseContent', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
