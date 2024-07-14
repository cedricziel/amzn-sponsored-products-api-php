<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsCopySponsoredProductsCampaignsResponseContent extends \ArrayObject
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
     * @var list<SponsoredProductsCopyCampaignResponse>
     */
    protected $copyCampaignResponses;

    /**
     * @return list<SponsoredProductsCopyCampaignResponse>
     */
    public function getCopyCampaignResponses(): array
    {
        return $this->copyCampaignResponses;
    }

    /**
     * @param list<SponsoredProductsCopyCampaignResponse> $copyCampaignResponses
     */
    public function setCopyCampaignResponses(array $copyCampaignResponses): self
    {
        $this->initialized['copyCampaignResponses'] = true;
        $this->copyCampaignResponses = $copyCampaignResponses;

        return $this;
    }
}
