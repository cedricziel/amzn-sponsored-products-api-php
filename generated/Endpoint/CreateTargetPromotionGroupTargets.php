<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Endpoint;

class CreateTargetPromotionGroupTargets extends \cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Client\BaseEndpoint implements \cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Client\Endpoint
{
    use \cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * Creates keyword and/or product targets in the manual adGroup that are part of the target promotion group.
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
     * @param array $accept Accept content header application/json|application/vnd.spTargetPromotionGroupTarget.v1+json
     */
    public function __construct(\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCreateTargetPromotionGroupTargetsRequestContent $requestBody, array $headerParameters = [], array $accept = [])
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
        return '/sp/targetPromotionGroups/targets';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCreateTargetPromotionGroupTargetsRequestContent) {
            return [['Content-Type' => ['application/vnd.spTargetPromotionGroupTarget.v1+json']], $this->body];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'application/vnd.spTargetPromotionGroupTarget.v1+json']];
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
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupTargetsBadRequestException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupTargetsUnauthorizedException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupTargetsInternalServerErrorException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupTargetsNotImplementedException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupTargetsForbiddenException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupTargetsServiceUnavailableException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupTargetsTooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupTargetsBadRequestException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsSchemaValidationExceptionResponseContent', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupTargetsUnauthorizedException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsUnauthenticatedExceptionResponseContent', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupTargetsInternalServerErrorException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsInternalServerExceptionResponseContent', 'json'), $response);
        }
        if (is_null($contentType) === false && (501 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupTargetsNotImplementedException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsNotImplementedExceptionResponseContent', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupTargetsForbiddenException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsAccessDeniedExceptionResponseContent', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupTargetsServiceUnavailableException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsServiceUnavailableExceptionResponseContent', 'json'), $response);
        }
        if (207 === $status) {
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateTargetPromotionGroupTargetsTooManyRequestsException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsThrottlingExceptionResponseContent', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
