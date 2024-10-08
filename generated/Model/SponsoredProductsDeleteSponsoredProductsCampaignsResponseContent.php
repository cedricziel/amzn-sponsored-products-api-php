<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsDeleteSponsoredProductsCampaignsResponseContent extends \ArrayObject
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
     * @var SponsoredProductsBulkCampaignOperationResponse
     */
    protected $campaigns;

    public function getCampaigns(): SponsoredProductsBulkCampaignOperationResponse
    {
        return $this->campaigns;
    }

    public function setCampaigns(SponsoredProductsBulkCampaignOperationResponse $campaigns): self
    {
        $this->initialized['campaigns'] = true;
        $this->campaigns = $campaigns;

        return $this;
    }
}
