<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsUpdateSponsoredProductsCampaignNegativeKeywordsResponseContent extends \ArrayObject
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
     * @var SponsoredProductsBulkCampaignNegativeKeywordOperationResponse
     */
    protected $campaignNegativeKeywords;

    public function getCampaignNegativeKeywords(): SponsoredProductsBulkCampaignNegativeKeywordOperationResponse
    {
        return $this->campaignNegativeKeywords;
    }

    public function setCampaignNegativeKeywords(SponsoredProductsBulkCampaignNegativeKeywordOperationResponse $campaignNegativeKeywords): self
    {
        $this->initialized['campaignNegativeKeywords'] = true;
        $this->campaignNegativeKeywords = $campaignNegativeKeywords;

        return $this;
    }
}
