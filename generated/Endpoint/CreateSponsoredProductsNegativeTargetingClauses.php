<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Endpoint;

class CreateSponsoredProductsNegativeTargetingClauses extends \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * Create negative targeting clauses.
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
     * @param array $accept Accept content header application/json|application/vnd.spNegativeTargetingClause.v3+json
     */
    public function __construct(\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsCreateSponsoredProductsNegativeTargetingClausesRequestContent $requestBody, array $headerParameters = [], array $accept = [])
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
        return '/sp/negativeTargets';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsCreateSponsoredProductsNegativeTargetingClausesRequestContent) {
            return [['Content-Type' => ['application/vnd.spNegativeTargetingClause.v3+json']], $this->body];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'application/vnd.spNegativeTargetingClause.v3+json']];
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
     * @return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsCreateSponsoredProductsNegativeTargetingClausesResponseContent|null
     *
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\CreateSponsoredProductsNegativeTargetingClausesBadRequestException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\CreateSponsoredProductsNegativeTargetingClausesUnauthorizedException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\CreateSponsoredProductsNegativeTargetingClausesInternalServerErrorException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\CreateSponsoredProductsNegativeTargetingClausesForbiddenException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\CreateSponsoredProductsNegativeTargetingClausesUnsupportedMediaTypeException
     * @throws \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\CreateSponsoredProductsNegativeTargetingClausesTooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\CreateSponsoredProductsNegativeTargetingClausesBadRequestException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsNegativeTargetMutationExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\CreateSponsoredProductsNegativeTargetingClausesUnauthorizedException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsUnauthorizedExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\CreateSponsoredProductsNegativeTargetingClausesInternalServerErrorException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsInternalServerExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\CreateSponsoredProductsNegativeTargetingClausesForbiddenException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsAccessDeniedExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (415 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\CreateSponsoredProductsNegativeTargetingClausesUnsupportedMediaTypeException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsUnsupportedMediaTypeExceptionResponseContent', 'json'), $response);
        }
        if (false === is_null($contentType) && (207 === $status && false !== mb_strpos($contentType, 'application/vnd.spNegativeTargetingClause.v3+json'))) {
            return $serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsCreateSponsoredProductsNegativeTargetingClausesResponseContent', 'json');
        }
        if (false === is_null($contentType) && (429 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception\CreateSponsoredProductsNegativeTargetingClausesTooManyRequestsException($serializer->deserialize($body, 'CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsThrottlingExceptionResponseContent', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}
