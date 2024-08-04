<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Endpoint;

class DeleteSponsoredProductsProductAds extends \cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Client\BaseEndpoint implements \cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Client\Endpoint
{
    use \cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * Delete product ads.
     *
     **Requires one of these permissions**:
     * ["advertiser_campaign_edit"]
     *
     * @param array $headerParameters {
     *
     * @var string $Amazon-Advertising-API-ClientId The identifier of a client associated with a "Login with Amazon" account
     * @var string $Amazon-Advertising-API-Scope The identifier of a profile associated with the advertiser account. Use GET method on Profiles resource to list
     *             profiles associated with the access token passed in the HTTP Authorization header.
     *             }
     *
     * @param array $accept Accept content header application/json|application/vnd.spProductAd.v3+json
     */
    public function __construct(\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDeleteSponsoredProductsProductAdsRequestContent $requestBody, array $headerParameters = [], array $accept = [])
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
        return '/sp/productAds/delete';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDeleteSponsoredProductsProductAdsRequestContent) {
            return [['Content-Type' => ['application/vnd.spProductAd.v3+json']], $this->body];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'application/vnd.spProductAd.v3+json']];
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
     * @return \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDeleteSponsoredProductsProductAdsResponseContent|null
     *
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\DeleteSponsoredProductsProductAdsBadRequestException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\DeleteSponsoredProductsProductAdsUnauthorizedException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\DeleteSponsoredProductsProductAdsInternalServerErrorException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\DeleteSponsoredProductsProductAdsForbiddenException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\DeleteSponsoredProductsProductAdsUnsupportedMediaTypeException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\DeleteSponsoredProductsProductAdsTooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\DeleteSponsoredProductsProductAdsBadRequestException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsProductAdMutationExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\DeleteSponsoredProductsProductAdsUnauthorizedException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsUnauthorizedExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\DeleteSponsoredProductsProductAdsInternalServerErrorException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsInternalServerExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\DeleteSponsoredProductsProductAdsForbiddenException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsAccessDeniedExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (415 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\DeleteSponsoredProductsProductAdsUnsupportedMediaTypeException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsUnsupportedMediaTypeExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (207 === $status && false !== mb_strpos($contentType, 'application/vnd.spProductAd.v3+json'))) {
            return $serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDeleteSponsoredProductsProductAdsResponseContent', 'json');
        }
        if (false === is_null($contentType) && (429 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\DeleteSponsoredProductsProductAdsTooManyRequestsException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsThrottlingExceptionResponseContent', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}
