<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsCreateTargetPromotionGroupTargetsInternalRequestContent extends \ArrayObject
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
     * Entity object identifier.
     *
     * @var string
     */
    protected $targetPromotionGroupId;
    /**
     * @var SponsoredProductsApiGatewayContext
     */
    protected $apiGatewayContext;
    /**
     * @var list<SponsoredProductsCreateTargetRequest>
     */
    protected $targets;

    /**
     * Entity object identifier.
     */
    public function getTargetPromotionGroupId(): string
    {
        return $this->targetPromotionGroupId;
    }

    /**
     * Entity object identifier.
     */
    public function setTargetPromotionGroupId(string $targetPromotionGroupId): self
    {
        $this->initialized['targetPromotionGroupId'] = true;
        $this->targetPromotionGroupId = $targetPromotionGroupId;

        return $this;
    }

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
     * @return list<SponsoredProductsCreateTargetRequest>
     */
    public function getTargets(): array
    {
        return $this->targets;
    }

    /**
     * @param list<SponsoredProductsCreateTargetRequest> $targets
     */
    public function setTargets(array $targets): self
    {
        $this->initialized['targets'] = true;
        $this->targets = $targets;

        return $this;
    }
}
