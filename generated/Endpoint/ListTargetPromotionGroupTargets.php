<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Endpoint;

class ListTargetPromotionGroupTargets extends \cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Client\BaseEndpoint implements \cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Client\Endpoint
{
    use \cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * Returns the targets created through target promotion groups for an advertiser and / or given target promotion group.
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
     * @param array $accept Accept content header application/vnd.spTargetPromotionGroupTarget.v1+json|application/json
     */
    public function __construct(?\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsListTargetPromotionGroupTargetsRequestContent $requestBody = null, array $headerParameters = [], array $accept = [])
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
        return '/sp/targetPromotionGroups/targets/list';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsListTargetPromotionGroupTargetsRequestContent) {
            return [['Content-Type' => ['application/vnd.spTargetPromotionGroupTarget.v1+json']], $this->body];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/vnd.spTargetPromotionGroupTarget.v1+json', 'application/json']];
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
     * @return \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsListTargetPromotionGroupTargetsResponseContent|null
     *
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\ListTargetPromotionGroupTargetsBadRequestException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\ListTargetPromotionGroupTargetsUnauthorizedException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\ListTargetPromotionGroupTargetsInternalServerErrorException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\ListTargetPromotionGroupTargetsNotImplementedException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\ListTargetPromotionGroupTargetsForbiddenException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\ListTargetPromotionGroupTargetsServiceUnavailableException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\ListTargetPromotionGroupTargetsTooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/vnd.spTargetPromotionGroupTarget.v1+json'))) {
            return $serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsListTargetPromotionGroupTargetsResponseContent', 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\ListTargetPromotionGroupTargetsBadRequestException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsSchemaValidationExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\ListTargetPromotionGroupTargetsUnauthorizedException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsUnauthenticatedExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\ListTargetPromotionGroupTargetsInternalServerErrorException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsInternalServerExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (501 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\ListTargetPromotionGroupTargetsNotImplementedException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsNotImplementedExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\ListTargetPromotionGroupTargetsForbiddenException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsAccessDeniedExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (503 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\ListTargetPromotionGroupTargetsServiceUnavailableException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsServiceUnavailableExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (429 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\ListTargetPromotionGroupTargetsTooManyRequestsException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsThrottlingExceptionResponseContent', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}
