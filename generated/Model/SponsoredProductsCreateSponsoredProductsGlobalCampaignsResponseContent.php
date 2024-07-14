<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsCreateSponsoredProductsGlobalCampaignsResponseContent extends \ArrayObject
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
     * @var SponsoredProductsBulkGlobalCampaignOperationResponse
     */
    protected $campaigns;

    public function getCampaigns(): SponsoredProductsBulkGlobalCampaignOperationResponse
    {
        return $this->campaigns;
    }

    public function setCampaigns(SponsoredProductsBulkGlobalCampaignOperationResponse $campaigns): self
    {
        $this->initialized['campaigns'] = true;
        $this->campaigns = $campaigns;

        return $this;
    }
}
