<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Endpoint;

class CreateTargetPromotionGroups extends \cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Client\BaseEndpoint implements \cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Client\Endpoint
{
    use \cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * Creates a target promotion group, by grouping the auto-targeting adGroupId
     * and manual-targeting adGroups, divided by keyword targeting adGroups, and product targeting adGroups.
     *
     **Requires one of these permissions**:
     * ["advertiser_campaign_edit","advertiser_campaign_view"]
     *
     * @param array $headerParameters {
     *
     * @var string $Amazon-Advertising-API-ClientId  The identifier of a client associated with a 'Login with Amazon' account. This is a required
     *             header for advertisers and integrators using the Advertising API.
     * @var string $Amazon-Advertising-API-Scope The identifier of a profile associated with the advertiser account. Use `GET` method on Profiles
     *             resource to list profiles associated with the access token passed in the HTTP Authorization header. This is a
     *             required header for advertisers and integrators using the Advertising API.
     *             }
     *
     * @param array $accept Accept content header application/vnd.spTargetPromotionGroup.v1+json|application/json
     */
    public function __construct(\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCreateTargetPromotionGroupsRequestContent $requestBody, array $headerParameters = [], array $accept = [])
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
        return '/sp/targetPromotionGroups';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCreateTargetPromotionGroupsRequestContent) {
            return [['Content-Type' => ['application/vnd.spTargetPromotionGroup.v1+json']], $this->body];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/vnd.spTargetPromotionGroup.v1+json', 'application/json']];
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
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupsBadRequestException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupsUnauthorizedException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupsInternalServerErrorException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupsNotImplementedException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupsForbiddenException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupsServiceUnavailableException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupsTooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupsBadRequestException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsSchemaValidationExceptionResponseContent', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupsUnauthorizedException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsUnauthenticatedExceptionResponseContent', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupsInternalServerErrorException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsInternalServerExceptionResponseContent', 'json'), $response);
        }
        if (is_null($contentType) === false && (501 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupsNotImplementedException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsNotImplementedExceptionResponseContent', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupsForbiddenException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsAccessDeniedExceptionResponseContent', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupsServiceUnavailableException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsServiceUnavailableExceptionResponseContent', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupsTooManyRequestsException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsThrottlingExceptionResponseContent', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
