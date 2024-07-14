<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Endpoint;

class GetRefinementsForCategory extends \cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Client\BaseEndpoint implements \cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Client\Endpoint
{
    use \cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Client\EndpointTrait;
    protected $categoryId;
    protected $accept;

    /**
     * Returns refinements according to category input.
     *
     **Requires one of these permissions**:
     * ["advertiser_campaign_edit","advertiser_campaign_view"]
     *
     * @param string $categoryId      The category ID. Please use the GetTargetableCategories API or the GetCategoriesForASINs API to retrieve categories IDs. This API does not check if the category is a valid category.
     * @param array  $queryParameters {
     *
     * @var string $locale The locale to which the caller wishes to translate the refinements to. For example, if the caller wishes to receive the refinements in Simplified Chinese, the locale parameter should be set to zh_CN. If no locale is provided, the refinements will be in the default language of the marketplace.
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Amazon-Advertising-API-ClientId The identifier of a client associated with a "Login with Amazon" account. This is a required header for advertisers and integrators using the Advertising API.
     * @var string $Amazon-Advertising-API-Scope The identifier of a profile associated with the advertiser account. Use `GET` method on Profiles resource to list profiles associated with the access token passed in the HTTP Authorization header. This is a required header for advertisers and integrators using the Advertising API.
     * @var string $Prefer Used to indicate the behavior preferred by the client but is not required for successful completion of the request. Supported values will be updated in the future.
     *             }
     *
     * @param array $accept Accept content header application/vnd.spproducttargetingresponse.v3+json|application/vnd.spproducttargetingresponse.v4+json|application/json
     */
    public function __construct(string $categoryId, array $queryParameters = [], array $headerParameters = [], array $accept = [])
    {
        $this->categoryId = $categoryId;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{categoryId}'], [$this->categoryId], '/sp/targets/category/{categoryId}/refinements');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/vnd.spproducttargetingresponse.v3+json', 'application/vnd.spproducttargetingresponse.v4+json', 'application/json']];
        }

        return $this->accept;
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['locale']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('locale', ['string']);

        return $optionsResolver;
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
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetRefinementsForCategoryBadRequestException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetRefinementsForCategoryUnprocessableEntityException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetRefinementsForCategoryUnauthorizedException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetRefinementsForCategoryInternalServerErrorException
     * @throws \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetRefinementsForCategoryTooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetRefinementsForCategoryBadRequestException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\BadRequestException', 'json'), $response);
        }
        if (false === is_null($contentType) && (422 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetRefinementsForCategoryUnprocessableEntityException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\UnprocessableEntityException', 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetRefinementsForCategoryUnauthorizedException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\UnauthorizedException', 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetRefinementsForCategoryInternalServerErrorException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\InternalServerException', 'json'), $response);
        }
        if (false === is_null($contentType) && (429 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \cedricziel\amznsponsoredproductsapiphp\Generated\Exception\GetRefinementsForCategoryTooManyRequestsException($serializer->deserialize($body, 'cedricziel\amznsponsoredproductsapiphp\Generated\Model\ThrottlingException', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
