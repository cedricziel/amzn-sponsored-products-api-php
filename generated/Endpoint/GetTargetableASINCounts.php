<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Endpoint;

class GetTargetableASINCounts extends \cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Client\BaseEndpoint implements \cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Client\Endpoint
{
    use \cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * Get number of targetable asins based on refinements provided by the user. Please use the GetTargetableCategories API or the GetCategoryRecommendationsForASINs API to retrieve the category ID. Please use the GetRefinementsByCategory API to retrieve refinements data for a category.
     *
     **Requires one of these permissions**:
     * ["advertiser_campaign_edit","advertiser_campaign_view"]
     *
     * @param array $headerParameters {
     *
     * @var string $Amazon-Advertising-API-ClientId The identifier of a client associated with a "Login with Amazon" account. This is a required header for advertisers and integrators using the Advertising API.
     * @var string $Amazon-Advertising-API-Scope The identifier of a profile associated with the advertiser account. Use `GET` method on Profiles resource to list profiles associated with the access token passed in the HTTP Authorization header. This is a required header for advertisers and integrators using the Advertising API.
     * @var string $Prefer Used to indicate the behavior preferred by the client but is not required for successful completion of the request. Supported values will be updated in the future.
     *             }
     *
     * @param array $accept Accept content header application/vnd.spproducttargetingresponse.v3+json|application/json
     */
    public function __construct(?\cedricziel\amznsponsoredproductsapiphp\Generated\Model\GetTargetableAsinCountsRequest $requestBody = null, array $headerParameters = [], array $accept = [])
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
        return '/sp/targets/products/count';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \cedricziel\amznsponsoredproductsapiphp\Generated\Model\GetTargetableAsinCountsRequest) {
            return [['Content-Type' => ['application/vnd.spproducttargeting.v3+json']], $this->body];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/vnd.spproducttargetingresponse.v3+json', 'application/json']];
        }

        return $this->accept;
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
     * @return null
     *
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetTargetableASINCountsBadRequestException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetTargetableASINCountsUnprocessableEntityException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetTargetableASINCountsUnauthorizedException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetTargetableASINCountsInternalServerErrorException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetTargetableASINCountsTooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetTargetableASINCountsBadRequestException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\BadRequestException', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetTargetableASINCountsUnprocessableEntityException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\UnprocessableEntityException', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetTargetableASINCountsUnauthorizedException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\UnauthorizedException', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetTargetableASINCountsInternalServerErrorException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\InternalServerException', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetTargetableASINCountsTooManyRequestsException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\ThrottlingException', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
