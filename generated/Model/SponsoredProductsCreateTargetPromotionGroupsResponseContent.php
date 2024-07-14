<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsCreateTargetPromotionGroupsResponseContent extends \ArrayObject
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
     * A Target Promotion Group that groups an Auto-Targeting Campaign/AdGroup with a Manual-Targeting Keyword Campaign/AdGroup, and a
     * Manual-Targeting Product Campaign/AdGroup.
     *
     * @var SponsoredProductsTargetPromotionGroup
     */
    protected $targetPromotionGroup;

    /**
     * A Target Promotion Group that groups an Auto-Targeting Campaign/AdGroup with a Manual-Targeting Keyword Campaign/AdGroup, and a
     * Manual-Targeting Product Campaign/AdGroup.
     */
    public function getTargetPromotionGroup(): SponsoredProductsTargetPromotionGroup
    {
        return $this->targetPromotionGroup;
    }

    /**
     * A Target Promotion Group that groups an Auto-Targeting Campaign/AdGroup with a Manual-Targeting Keyword Campaign/AdGroup, and a
     * Manual-Targeting Product Campaign/AdGroup.
     */
    public function setTargetPromotionGroup(SponsoredProductsTargetPromotionGroup $targetPromotionGroup): self
    {
        $this->initialized['targetPromotionGroup'] = true;
        $this->targetPromotionGroup = $targetPromotionGroup;

        return $this;
    }
}
