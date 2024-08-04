<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class GlobalRankedKeywordTargetsForAsinsRequest extends \ArrayObject
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
     * A list of countries with targets that need to be ranked or ASINs to generate recommended keywords. The 2-letter country code is the key, and an object with ASINs and targets is the value.
     *
     * @var array<string, CountryWithTargetsAndAsins>
     */
    protected $countryCodes;
    /**
     * The bid recommendations returned will depend on the bidding strategy. <br> LEGACY_FOR_SALES - Dynamic Bids (Down only) <br> AUTO_FOR_SALES - Dynamic Bids (Up or down) <br> MANUAL - Fixed Bids.
     *
     * @var string
     */
    protected $biddingStrategy = 'LEGACY_FOR_SALES';
    /**
     * The recommendationType to retrieve recommended keyword targets for a list of ASINs.
     *
     * @var string
     */
    protected $recommendationType;
    /**
     * Set this parameter to false if you do not want to retrieve bid suggestions for your keyword targets. Defaults to true.
     *
     * @var bool
     */
    protected $bidsEnabled = 'true';
    /**
     * The max size of recommended target. Set it to 0 if you only want to rank user-defined keywords.
     *
     * @var float
     */
    protected $maxRecommendations = '200';
    /**
     * The ranking metric value. Supported values: CLICKS, CONVERSIONS, DEFAULT. DEFAULT will be applied if no value passed in.
     *
     * @var string
     */
    protected $sortDimension;
    /**
     * Translations are for readability and do not affect the targeting of ads. Supported marketplace to locale mappings can be found at the <a href='https://advertising.amazon.com/API/docs/en-us/localization/#/Keyword%20Localization'>POST /keywords/localize</a> endpoint. Note: Translations will be null if locale is unsupported.
     *
     * @var string
     */
    protected $locale;

    /**
     * A list of countries with targets that need to be ranked or ASINs to generate recommended keywords. The 2-letter country code is the key, and an object with ASINs and targets is the value.
     *
     * @return array<string, CountryWithTargetsAndAsins>
     */
    public function getCountryCodes(): iterable
    {
        return $this->countryCodes;
    }

    /**
     * A list of countries with targets that need to be ranked or ASINs to generate recommended keywords. The 2-letter country code is the key, and an object with ASINs and targets is the value.
     *
     * @param array<string, CountryWithTargetsAndAsins> $countryCodes
     */
    public function setCountryCodes(iterable $countryCodes): self
    {
        $this->initialized['countryCodes'] = true;
        $this->countryCodes = $countryCodes;

        return $this;
    }

    /**
     * The bid recommendations returned will depend on the bidding strategy. <br> LEGACY_FOR_SALES - Dynamic Bids (Down only) <br> AUTO_FOR_SALES - Dynamic Bids (Up or down) <br> MANUAL - Fixed Bids.
     */
    public function getBiddingStrategy(): string
    {
        return $this->biddingStrategy;
    }

    /**
     * The bid recommendations returned will depend on the bidding strategy. <br> LEGACY_FOR_SALES - Dynamic Bids (Down only) <br> AUTO_FOR_SALES - Dynamic Bids (Up or down) <br> MANUAL - Fixed Bids.
     */
    public function setBiddingStrategy(string $biddingStrategy): self
    {
        $this->initialized['biddingStrategy'] = true;
        $this->biddingStrategy = $biddingStrategy;

        return $this;
    }

    /**
     * The recommendationType to retrieve recommended keyword targets for a list of ASINs.
     */
    public function getRecommendationType(): string
    {
        return $this->recommendationType;
    }

    /**
     * The recommendationType to retrieve recommended keyword targets for a list of ASINs.
     */
    public function setRecommendationType(string $recommendationType): self
    {
        $this->initialized['recommendationType'] = true;
        $this->recommendationType = $recommendationType;

        return $this;
    }

    /**
     * Set this parameter to false if you do not want to retrieve bid suggestions for your keyword targets. Defaults to true.
     */
    public function getBidsEnabled(): bool
    {
        return $this->bidsEnabled;
    }

    /**
     * Set this parameter to false if you do not want to retrieve bid suggestions for your keyword targets. Defaults to true.
     */
    public function setBidsEnabled(bool $bidsEnabled): self
    {
        $this->initialized['bidsEnabled'] = true;
        $this->bidsEnabled = $bidsEnabled;

        return $this;
    }

    /**
     * The max size of recommended target. Set it to 0 if you only want to rank user-defined keywords.
     */
    public function getMaxRecommendations(): float
    {
        return $this->maxRecommendations;
    }

    /**
     * The max size of recommended target. Set it to 0 if you only want to rank user-defined keywords.
     */
    public function setMaxRecommendations(float $maxRecommendations): self
    {
        $this->initialized['maxRecommendations'] = true;
        $this->maxRecommendations = $maxRecommendations;

        return $this;
    }

    /**
     * The ranking metric value. Supported values: CLICKS, CONVERSIONS, DEFAULT. DEFAULT will be applied if no value passed in.
     */
    public function getSortDimension(): string
    {
        return $this->sortDimension;
    }

    /**
     * The ranking metric value. Supported values: CLICKS, CONVERSIONS, DEFAULT. DEFAULT will be applied if no value passed in.
     */
    public function setSortDimension(string $sortDimension): self
    {
        $this->initialized['sortDimension'] = true;
        $this->sortDimension = $sortDimension;

        return $this;
    }

    /**
     * Translations are for readability and do not affect the targeting of ads. Supported marketplace to locale mappings can be found at the <a href='https://advertising.amazon.com/API/docs/en-us/localization/#/Keyword%20Localization'>POST /keywords/localize</a> endpoint. Note: Translations will be null if locale is unsupported.
     */
    public function getLocale(): string
    {
        return $this->locale;
    }

    /**
     * Translations are for readability and do not affect the targeting of ads. Supported marketplace to locale mappings can be found at the <a href='https://advertising.amazon.com/API/docs/en-us/localization/#/Keyword%20Localization'>POST /keywords/localize</a> endpoint. Note: Translations will be null if locale is unsupported.
     */
    public function setLocale(string $locale): self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;

        return $this;
    }
}
