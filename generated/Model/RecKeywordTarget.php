<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class RecKeywordTarget extends \ArrayObject
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
     * The account-level ad-attributed impression share for the search-term/keyword. Provides percentage share of all ad impressions the advertiser has for the keyword in the last 30 days. This metric helps advertisers identify potential opportunities based on their share on relevant keywords. This information is only available for keywords the advertiser targeted with ad impressions.
     *
     * @var float
     */
    protected $searchTermImpressionShare;
    /**
     * The translation of keyword if a locale is passed in.
     *
     * @var string
     */
    protected $translation;
    /**
     * A list of keyword bid info.
     *
     * @var list<RecKeywordTargetBidInfoItem>
     */
    protected $bidInfo;
    /**
     * The account-level ad-attributed impression rank for the search-term/keyword. Provides [1:N] place the advertiser ranks among all advertisers for the keyword by ad impressions in a marketplace in the last 30 days. It tells an advertiser how many advertisers had higher share of ad impressions. This information is only available for keywords the advertiser targeted with ad impressions.
     *
     * @var float
     */
    protected $searchTermImpressionRank;
    /**
     * The keyword value.
     *
     * @var string
     */
    protected $keyword;
    /**
     * Flag that tells if keyword was selected by the user or was recommended by KRS.
     *
     * @var bool
     */
    protected $userSelectedKeyword;
    /**
     * The recommended keyword target id.
     *
     * @var string
     */
    protected $recId;

    /**
     * The account-level ad-attributed impression share for the search-term/keyword. Provides percentage share of all ad impressions the advertiser has for the keyword in the last 30 days. This metric helps advertisers identify potential opportunities based on their share on relevant keywords. This information is only available for keywords the advertiser targeted with ad impressions.
     */
    public function getSearchTermImpressionShare(): float
    {
        return $this->searchTermImpressionShare;
    }

    /**
     * The account-level ad-attributed impression share for the search-term/keyword. Provides percentage share of all ad impressions the advertiser has for the keyword in the last 30 days. This metric helps advertisers identify potential opportunities based on their share on relevant keywords. This information is only available for keywords the advertiser targeted with ad impressions.
     */
    public function setSearchTermImpressionShare(float $searchTermImpressionShare): self
    {
        $this->initialized['searchTermImpressionShare'] = true;
        $this->searchTermImpressionShare = $searchTermImpressionShare;

        return $this;
    }

    /**
     * The translation of keyword if a locale is passed in.
     */
    public function getTranslation(): string
    {
        return $this->translation;
    }

    /**
     * The translation of keyword if a locale is passed in.
     */
    public function setTranslation(string $translation): self
    {
        $this->initialized['translation'] = true;
        $this->translation = $translation;

        return $this;
    }

    /**
     * A list of keyword bid info.
     *
     * @return list<RecKeywordTargetBidInfoItem>
     */
    public function getBidInfo(): array
    {
        return $this->bidInfo;
    }

    /**
     * A list of keyword bid info.
     *
     * @param list<RecKeywordTargetBidInfoItem> $bidInfo
     */
    public function setBidInfo(array $bidInfo): self
    {
        $this->initialized['bidInfo'] = true;
        $this->bidInfo = $bidInfo;

        return $this;
    }

    /**
     * The account-level ad-attributed impression rank for the search-term/keyword. Provides [1:N] place the advertiser ranks among all advertisers for the keyword by ad impressions in a marketplace in the last 30 days. It tells an advertiser how many advertisers had higher share of ad impressions. This information is only available for keywords the advertiser targeted with ad impressions.
     */
    public function getSearchTermImpressionRank(): float
    {
        return $this->searchTermImpressionRank;
    }

    /**
     * The account-level ad-attributed impression rank for the search-term/keyword. Provides [1:N] place the advertiser ranks among all advertisers for the keyword by ad impressions in a marketplace in the last 30 days. It tells an advertiser how many advertisers had higher share of ad impressions. This information is only available for keywords the advertiser targeted with ad impressions.
     */
    public function setSearchTermImpressionRank(float $searchTermImpressionRank): self
    {
        $this->initialized['searchTermImpressionRank'] = true;
        $this->searchTermImpressionRank = $searchTermImpressionRank;

        return $this;
    }

    /**
     * The keyword value.
     */
    public function getKeyword(): string
    {
        return $this->keyword;
    }

    /**
     * The keyword value.
     */
    public function setKeyword(string $keyword): self
    {
        $this->initialized['keyword'] = true;
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Flag that tells if keyword was selected by the user or was recommended by KRS.
     */
    public function getUserSelectedKeyword(): bool
    {
        return $this->userSelectedKeyword;
    }

    /**
     * Flag that tells if keyword was selected by the user or was recommended by KRS.
     */
    public function setUserSelectedKeyword(bool $userSelectedKeyword): self
    {
        $this->initialized['userSelectedKeyword'] = true;
        $this->userSelectedKeyword = $userSelectedKeyword;

        return $this;
    }

    /**
     * The recommended keyword target id.
     */
    public function getRecId(): string
    {
        return $this->recId;
    }

    /**
     * The recommended keyword target id.
     */
    public function setRecId(string $recId): self
    {
        $this->initialized['recId'] = true;
        $this->recId = $recId;

        return $this;
    }
}
