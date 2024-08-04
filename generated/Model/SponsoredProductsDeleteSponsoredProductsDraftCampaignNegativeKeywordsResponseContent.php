<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsDeleteSponsoredProductsDraftCampaignNegativeKeywordsResponseContent extends \ArrayObject
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
     * @var SponsoredProductsBulkDraftCampaignNegativeKeywordOperationResponse
     */
    protected $campaignNegativeKeywords;

    public function getCampaignNegativeKeywords(): SponsoredProductsBulkDraftCampaignNegativeKeywordOperationResponse
    {
        return $this->campaignNegativeKeywords;
    }

    public function setCampaignNegativeKeywords(SponsoredProductsBulkDraftCampaignNegativeKeywordOperationResponse $campaignNegativeKeywords): self
    {
        $this->initialized['campaignNegativeKeywords'] = true;
        $this->campaignNegativeKeywords = $campaignNegativeKeywords;

        return $this;
    }
}
