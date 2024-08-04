<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsDeleteTargetPromotionGroupTargetsInternalRequestContent extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var SponsoredProductsApiGatewayContext
     */
    protected $apiGatewayContext;
    /**
     * @var list<SponsoredProductsDeleteTargetRequest>
     */
    protected $targetPromotionGroupTargets;

    public function getApiGatewayContext(): SponsoredProductsApiGatewayContext
    {
        return $this->apiGatewayContext;
    }

    public function setApiGatewayContext(SponsoredProductsApiGatewayContext $apiGatewayContext): self
    {
        $this->initialized['apiGatewayContext'] = true;
        $this->apiGatewayContext = $apiGatewayContext;

        return $this;
    }

    /**
     * @return list<SponsoredProductsDeleteTargetRequest>
     */
    public function getTargetPromotionGroupTargets(): array
    {
        return $this->targetPromotionGroupTargets;
    }

    /**
     * @param list<SponsoredProductsDeleteTargetRequest> $targetPromotionGroupTargets
     */
    public function setTargetPromotionGroupTargets(array $targetPromotionGroupTargets): self
    {
        $this->initialized['targetPromotionGroupTargets'] = true;
        $this->targetPromotionGroupTargets = $targetPromotionGroupTargets;

        return $this;
    }
}
