<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsCreateOrUpdateTargetDetails extends \ArrayObject
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
     * @var SponsoredProductsSPKeywordTargetDetails
     */
    protected $keywordTarget;
    /**
     * @var SponsoredProductsSPProductCategoryTargetDetails
     */
    protected $productCategoryTarget;
    /**
     * @var SponsoredProductsSPProductTargetDetails
     */
    protected $productTarget;

    public function getKeywordTarget(): SponsoredProductsSPKeywordTargetDetails
    {
        return $this->keywordTarget;
    }

    public function setKeywordTarget(SponsoredProductsSPKeywordTargetDetails $keywordTarget): self
    {
        $this->initialized['keywordTarget'] = true;
        $this->keywordTarget = $keywordTarget;

        return $this;
    }

    public function getProductCategoryTarget(): SponsoredProductsSPProductCategoryTargetDetails
    {
        return $this->productCategoryTarget;
    }

    public function setProductCategoryTarget(SponsoredProductsSPProductCategoryTargetDetails $productCategoryTarget): self
    {
        $this->initialized['productCategoryTarget'] = true;
        $this->productCategoryTarget = $productCategoryTarget;

        return $this;
    }

    public function getProductTarget(): SponsoredProductsSPProductTargetDetails
    {
        return $this->productTarget;
    }

    public function setProductTarget(SponsoredProductsSPProductTargetDetails $productTarget): self
    {
        $this->initialized['productTarget'] = true;
        $this->productTarget = $productTarget;

        return $this;
    }
}
