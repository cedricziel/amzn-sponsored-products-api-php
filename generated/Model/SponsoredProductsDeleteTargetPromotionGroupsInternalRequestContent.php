<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsDeleteTargetPromotionGroupsInternalRequestContent extends \ArrayObject
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
     * @var list<SponsoredProductsTargetPromotionGroup>
     */
    protected $targetPromotionGroups;

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
     * @return list<SponsoredProductsTargetPromotionGroup>
     */
    public function getTargetPromotionGroups(): array
    {
        return $this->targetPromotionGroups;
    }

    /**
     * @param list<SponsoredProductsTargetPromotionGroup> $targetPromotionGroups
     */
    public function setTargetPromotionGroups(array $targetPromotionGroups): self
    {
        $this->initialized['targetPromotionGroups'] = true;
        $this->targetPromotionGroups = $targetPromotionGroups;

        return $this;
    }
}
