<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Endpoint;

class CreateSponsoredProductsTargetingClauses extends \cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Client\BaseEndpoint implements \cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Client\Endpoint
{
    use \cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * Create targeting clauses.
     *
     **Requires one of these permissions**:
     * ["advertiser_campaign_edit"]
     *
     * @param array $headerParameters {
     *
     * @var string $Amazon-Advertising-API-ClientId The identifier of a client associated with a "Login with Amazon" account
     * @var string $Amazon-Advertising-API-Scope The identifier of a profile associated with the advertiser account. Use GET method on Profiles resource to list
     *             profiles associated with the access token passed in the HTTP Authorization header.
     * @var string $Prefer The "Prefer" header, as defined in [RFC7240], allows clients to request certain behavior from the service.
     *             The service ignores preference values that are either not supported or not known by the service.
     *             Either multiple Prefer headers are passed or single one with comma separated values, both forms are equivalent
     *             Supported preferences:
     *             return=representation - return the full object when doing create/update/delete operations instead of ids.
     *             Please note that the extendedData field will be part of the full object for /list endpoints only.
     *             }
     *
     * @param array $accept Accept content header application/json|application/vnd.spTargetingClause.v3+json
     */
    public function __construct(\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCreateSponsoredProductsTargetingClausesRequestContent $requestBody, array $headerParameters = [], array $accept = [])
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
        return '/sp/targets';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCreateSponsoredProductsTargetingClausesRequestContent) {
            return [['Content-Type' => ['application/vnd.spTargetingClause.v3+json']], $this->body];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'application/vnd.spTargetingClause.v3+json']];
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
     * @return \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCreateSponsoredProductsTargetingClausesResponseContent|null
     *
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateSponsoredProductsTargetingClausesBadRequestException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateSponsoredProductsTargetingClausesUnauthorizedException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateSponsoredProductsTargetingClausesInternalServerErrorException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateSponsoredProductsTargetingClausesForbiddenException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateSponsoredProductsTargetingClausesUnsupportedMediaTypeException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateSponsoredProductsTargetingClausesTooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateSponsoredProductsTargetingClausesBadRequestException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsTargetMutationExceptionResponseContent', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateSponsoredProductsTargetingClausesUnauthorizedException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsUnauthorizedExceptionResponseContent', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateSponsoredProductsTargetingClausesInternalServerErrorException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsInternalServerExceptionResponseContent', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateSponsoredProductsTargetingClausesForbiddenException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsAccessDeniedExceptionResponseContent', 'json'), $response);
        }
        if (is_null($contentType) === false && (415 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateSponsoredProductsTargetingClausesUnsupportedMediaTypeException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsUnsupportedMediaTypeExceptionResponseContent', 'json'), $response);
        }
        if (is_null($contentType) === false && (207 === $status && mb_strpos($contentType, 'application/vnd.spTargetingClause.v3+json') !== false)) {
            return $serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCreateSponsoredProductsTargetingClausesResponseContent', 'json');
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\CreateSponsoredProductsTargetingClausesTooManyRequestsException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsThrottlingExceptionResponseContent', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
