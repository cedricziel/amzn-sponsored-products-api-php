<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class RecommendationOptions extends \ArrayObject
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
