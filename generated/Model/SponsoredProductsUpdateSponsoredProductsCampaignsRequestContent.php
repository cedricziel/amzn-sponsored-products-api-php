<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsUpdateSponsoredProductsCampaignsRequestContent extends \ArrayObject
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
     * An array of campaigns with updated values. Note: targetingType cannot be updated.
     *
     * @var list<SponsoredProductsUpdateCampaign>
     */
    protected $campaigns;

    /**
     * An array of campaigns with updated values. Note: targetingType cannot be updated.
     *
     * @return list<SponsoredProductsUpdateCampaign>
     */
    public function getCampaigns(): array
    {
        return $this->campaigns;
    }

    /**
     * An array of campaigns with updated values. Note: targetingType cannot be updated.
     *
     * @param list<SponsoredProductsUpdateCampaign> $campaigns
     */
    public function setCampaigns(array $campaigns): self
    {
        $this->initialized['campaigns'] = true;
        $this->campaigns = $campaigns;

        return $this;
    }
}
