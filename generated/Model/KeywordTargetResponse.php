<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class KeywordTargetResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    protected $suggestedBid;
    /**
     * The translation of keyword if a locale is passed in.
     *
     * @var string
     */
    protected $translation;
    /**
     * The keyword target rank.
     *
     * @var float
     */
    protected $rank;
    /**
     * Keyword match type. The default value will be BROAD.
     *
     * @var string
     */
    protected $matchType;
    /**
     * The keyword value.
     *
     * @var string
     */
    protected $keyword;
    /**
     * The bid value for the keyword, in minor currency units (example: cents). The default value will be the suggested bid.
     *
     * @var float
     */
    protected $bid;
    /**
     * Flag that tells if keyword was selected by the user or was recommended by KRS.
     *
     * @var bool
     */
    protected $userSelectedKeyword;

    public function getSuggestedBid()
    {
        return $this->suggestedBid;
    }

    public function setSuggestedBid($suggestedBid): self
    {
        $this->initialized['suggestedBid'] = true;
        $this->suggestedBid = $suggestedBid;

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
     * The keyword target rank.
     */
    public function getRank(): float
    {
        return $this->rank;
    }

    /**
     * The keyword target rank.
     */
    public function setRank(float $rank): self
    {
        $this->initialized['rank'] = true;
        $this->rank = $rank;

        return $this;
    }

    /**
     * Keyword match type. The default value will be BROAD.
     */
    public function getMatchType(): string
    {
        return $this->matchType;
    }

    /**
     * Keyword match type. The default value will be BROAD.
     */
    public function setMatchType(string $matchType): self
    {
        $this->initialized['matchType'] = true;
        $this->matchType = $matchType;

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
     * The bid value for the keyword, in minor currency units (example: cents). The default value will be the suggested bid.
     */
    public function getBid(): float
    {
        return $this->bid;
    }

    /**
     * The bid value for the keyword, in minor currency units (example: cents). The default value will be the suggested bid.
     */
    public function setBid(float $bid): self
    {
        $this->initialized['bid'] = true;
        $this->bid = $bid;

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
}
