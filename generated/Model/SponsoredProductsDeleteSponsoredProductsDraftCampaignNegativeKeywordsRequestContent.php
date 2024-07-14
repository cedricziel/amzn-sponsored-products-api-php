<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsDeleteSponsoredProductsDraftCampaignNegativeKeywordsRequestContent extends \ArrayObject
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
     * Filter entities by the list of objectIds.
     *
     * @var SponsoredProductsObjectIdFilter
     */
    protected $campaignNegativeKeywordIdFilter;

    /**
     * Filter entities by the list of objectIds.
     */
    public function getCampaignNegativeKeywordIdFilter(): SponsoredProductsObjectIdFilter
    {
        return $this->campaignNegativeKeywordIdFilter;
    }

    /**
     * Filter entities by the list of objectIds.
     */
    public function setCampaignNegativeKeywordIdFilter(SponsoredProductsObjectIdFilter $campaignNegativeKeywordIdFilter): self
    {
        $this->initialized['campaignNegativeKeywordIdFilter'] = true;
        $this->campaignNegativeKeywordIdFilter = $campaignNegativeKeywordIdFilter;

        return $this;
    }
}
