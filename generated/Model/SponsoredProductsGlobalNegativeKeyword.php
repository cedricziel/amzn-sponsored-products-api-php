<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsGlobalNegativeKeyword extends \ArrayObject
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
     * The identifier of the campaign to which the keyword is associated.
     *
     * @var string
     */
    protected $campaignId;
    /**
     * @var string
     */
    protected $matchType;
    /**
     * Name for the keyword.
     *
     * @var string
     */
    protected $name;
    /**
     * @var SponsoredProductsGlobalEntityState
     */
    protected $state;
    /**
     * The identifier of the ad group to which this keyword is associated.
     *
     * @var string
     */
    protected $adGroupId;
    /**
     * @var SponsoredProductsGlobalNegativeKeywordText
     */
    protected $keywordText;
    /**
     * @var SponsoredProductsGlobalNegativeKeywordExtendedData
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
     * The identifier of the campaign to which the keyword is associated.
     */
    public function getCampaignId(): string
    {
        return $this->campaignId;
    }

    /**
     * The identifier of the campaign to which the keyword is associated.
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
     * Name for the keyword.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name for the keyword.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getState(): SponsoredProductsGlobalEntityState
    {
        return $this->state;
    }

    public function setState(SponsoredProductsGlobalEntityState $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

        return $this;
    }

    /**
     * The identifier of the ad group to which this keyword is associated.
     */
    public function getAdGroupId(): string
    {
        return $this->adGroupId;
    }

    /**
     * The identifier of the ad group to which this keyword is associated.
     */
    public function setAdGroupId(string $adGroupId): self
    {
        $this->initialized['adGroupId'] = true;
        $this->adGroupId = $adGroupId;

        return $this;
    }

    public function getKeywordText(): SponsoredProductsGlobalNegativeKeywordText
    {
        return $this->keywordText;
    }

    public function setKeywordText(SponsoredProductsGlobalNegativeKeywordText $keywordText): self
    {
        $this->initialized['keywordText'] = true;
        $this->keywordText = $keywordText;

        return $this;
    }

    public function getExtendedData(): SponsoredProductsGlobalNegativeKeywordExtendedData
    {
        return $this->extendedData;
    }

    public function setExtendedData(SponsoredProductsGlobalNegativeKeywordExtendedData $extendedData): self
    {
        $this->initialized['extendedData'] = true;
        $this->extendedData = $extendedData;

        return $this;
    }
}
