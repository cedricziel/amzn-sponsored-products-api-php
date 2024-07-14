<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsCreateSponsoredProductsDraftCampaignsRequestContent extends \ArrayObject
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
     * An array of drafts.
     *
     * @var list<SponsoredProductsCreateDraftCampaign>
     */
    protected $campaigns;

    /**
     * An array of drafts.
     *
     * @return list<SponsoredProductsCreateDraftCampaign>
     */
    public function getCampaigns(): array
    {
        return $this->campaigns;
    }

    /**
     * An array of drafts.
     *
     * @param list<SponsoredProductsCreateDraftCampaign> $campaigns
     */
    public function setCampaigns(array $campaigns): self
    {
        $this->initialized['campaigns'] = true;
        $this->campaigns = $campaigns;

        return $this;
    }
}
