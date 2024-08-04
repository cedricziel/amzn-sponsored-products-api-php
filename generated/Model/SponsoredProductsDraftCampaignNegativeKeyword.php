<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsDraftCampaignNegativeKeyword extends \ArrayObject
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
     * The identifier of the keyword.
     *
     * @var string
     */
    protected $keywordId;
    /**
     * The identifier of the draft to which the keyword is associated.
     *
     * @var string
     */
    protected $campaignId;
    /**
     * @var string
     */
    protected $matchType;
    /**
     * The keyword text.
     *
     * @var string
     */
    protected $keywordText;
    /**
     * @var SponsoredProductsDraftCampaignNegativeKeywordExtendedData
     */
    protected $extendedData;

    /**
     * The identifier of the keyword.
     */
    public function getKeywordId(): string
    {
        return $this->keywordId;
    }

    /**
     * The identifier of the keyword.
     */
    public function setKeywordId(string $keywordId): self
    {
        $this->initialized['keywordId'] = true;
        $this->keywordId = $keywordId;

        return $this;
    }

    /**
     * The identifier of the draft to which the keyword is associated.
     */
    public function getCampaignId(): string
    {
        return $this->campaignId;
    }

    /**
     * The identifier of the draft to which the keyword is associated.
     */
    public function setCampaignId(string $campaignId): self
    {
        $this->initialized['campaignId'] = true;
        $this->campaignId = $campaignId;

        return $this;
    }

    public function getMatchType(): string
    {
        return $this->matchType;
    }

    public function setMatchType(string $matchType): self
    {
        $this->initialized['matchType'] = true;
        $this->matchType = $matchType;

        return $this;
    }

    /**
     * The keyword text.
     */
    public function getKeywordText(): string
    {
        return $this->keywordText;
    }

    /**
     * The keyword text.
     */
    public function setKeywordText(string $keywordText): self
    {
        $this->initialized['keywordText'] = true;
        $this->keywordText = $keywordText;

        return $this;
    }

    public function getExtendedData(): SponsoredProductsDraftCampaignNegativeKeywordExtendedData
    {
        return $this->extendedData;
    }

    public function setExtendedData(SponsoredProductsDraftCampaignNegativeKeywordExtendedData $extendedData): self
    {
        $this->initialized['extendedData'] = true;
        $this->extendedData = $extendedData;

        return $this;
    }
}
