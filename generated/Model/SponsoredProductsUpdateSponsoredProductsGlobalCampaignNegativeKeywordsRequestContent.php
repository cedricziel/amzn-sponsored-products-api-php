<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsUpdateSponsoredProductsGlobalCampaignNegativeKeywordsRequestContent extends \ArrayObject
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
     * An array of campaignNegativeKeywords with updated values.
     *
     * @var list<SponsoredProductsUpdateGlobalCampaignNegativeKeyword>
     */
    protected $campaignNegativeKeywords;

    /**
     * An array of campaignNegativeKeywords with updated values.
     *
     * @return list<SponsoredProductsUpdateGlobalCampaignNegativeKeyword>
     */
    public function getCampaignNegativeKeywords(): array
    {
        return $this->campaignNegativeKeywords;
    }

    /**
     * An array of campaignNegativeKeywords with updated values.
     *
     * @param list<SponsoredProductsUpdateGlobalCampaignNegativeKeyword> $campaignNegativeKeywords
     */
    public function setCampaignNegativeKeywords(array $campaignNegativeKeywords): self
    {
        $this->initialized['campaignNegativeKeywords'] = true;
        $this->campaignNegativeKeywords = $campaignNegativeKeywords;

        return $this;
    }
}
