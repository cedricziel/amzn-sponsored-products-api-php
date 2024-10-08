<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsDraftCampaignNegativeKeywordSuccessResponseItem extends \ArrayObject
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
     * @var SponsoredProductsDraftCampaignNegativeKeyword
     */
    protected $campaignNegativeKeyword;
    /**
     * the negativeKeyword ID.
     *
     * @var string
     */
    protected $campaignNegativeKeywordId;
    /**
     * the index of the draft in the array from the request body.
     *
     * @var int
     */
    protected $index;

    public function getCampaignNegativeKeyword(): SponsoredProductsDraftCampaignNegativeKeyword
    {
        return $this->campaignNegativeKeyword;
    }

    public function setCampaignNegativeKeyword(SponsoredProductsDraftCampaignNegativeKeyword $campaignNegativeKeyword): self
    {
        $this->initialized['campaignNegativeKeyword'] = true;
        $this->campaignNegativeKeyword = $campaignNegativeKeyword;

        return $this;
    }

    /**
     * the negativeKeyword ID.
     */
    public function getCampaignNegativeKeywordId(): string
    {
        return $this->campaignNegativeKeywordId;
    }

    /**
     * the negativeKeyword ID.
     */
    public function setCampaignNegativeKeywordId(string $campaignNegativeKeywordId): self
    {
        $this->initialized['campaignNegativeKeywordId'] = true;
        $this->campaignNegativeKeywordId = $campaignNegativeKeywordId;

        return $this;
    }

    /**
     * the index of the draft in the array from the request body.
     */
    public function getIndex(): int
    {
        return $this->index;
    }

    /**
     * the index of the draft in the array from the request body.
     */
    public function setIndex(int $index): self
    {
        $this->initialized['index'] = true;
        $this->index = $index;

        return $this;
    }
}
