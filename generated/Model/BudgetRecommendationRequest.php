<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class BudgetRecommendationRequest extends \ArrayObject
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
     * List of campaigns.
     *
     * @var list<string>
     */
    protected $campaignIds;

    /**
     * List of campaigns.
     *
     * @return list<string>
     */
    public function getCampaignIds(): array
    {
        return $this->campaignIds;
    }

    /**
     * List of campaigns.
     *
     * @param list<string> $campaignIds
     */
    public function setCampaignIds(array $campaignIds): self
    {
        $this->initialized['campaignIds'] = true;
        $this->campaignIds = $campaignIds;

        return $this;
    }
}
