<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsSPKeywordTargetDetails extends \ArrayObject
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
     * The unlocalized keyword text in the preferred locale of the advertiser.
     *
     * @var string
     */
    protected $nativeLanguageKeyword;
    /**
     * The locale preference of the advertiser. For example, if the advertiser’s preferred language is Simplified Chinese, set the locale to zh_CN. Supported locales include: Simplified Chinese (locale: zh_CN) for US, UK and CA. English (locale: en_GB) for DE, FR, IT and ES.
     *
     * @var string
     */
    protected $nativeLanguageLocale;
    /**
     * @var string
     */
    protected $matchType;
    /**
     * The keyword text to target.
     *
     * @var string
     */
    protected $keyword;

    /**
     * The unlocalized keyword text in the preferred locale of the advertiser.
     */
    public function getNativeLanguageKeyword(): string
    {
        return $this->nativeLanguageKeyword;
    }

    /**
     * The unlocalized keyword text in the preferred locale of the advertiser.
     */
    public function setNativeLanguageKeyword(string $nativeLanguageKeyword): self
    {
        $this->initialized['nativeLanguageKeyword'] = true;
        $this->nativeLanguageKeyword = $nativeLanguageKeyword;

        return $this;
    }

    /**
     * The locale preference of the advertiser. For example, if the advertiser’s preferred language is Simplified Chinese, set the locale to zh_CN. Supported locales include: Simplified Chinese (locale: zh_CN) for US, UK and CA. English (locale: en_GB) for DE, FR, IT and ES.
     */
    public function getNativeLanguageLocale(): string
    {
        return $this->nativeLanguageLocale;
    }

    /**
     * The locale preference of the advertiser. For example, if the advertiser’s preferred language is Simplified Chinese, set the locale to zh_CN. Supported locales include: Simplified Chinese (locale: zh_CN) for US, UK and CA. English (locale: en_GB) for DE, FR, IT and ES.
     */
    public function setNativeLanguageLocale(string $nativeLanguageLocale): self
    {
        $this->initialized['nativeLanguageLocale'] = true;
        $this->nativeLanguageLocale = $nativeLanguageLocale;

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
     * The keyword text to target.
     */
    public function getKeyword(): string
    {
        return $this->keyword;
    }

    /**
     * The keyword text to target.
     */
    public function setKeyword(string $keyword): self
    {
        $this->initialized['keyword'] = true;
        $this->keyword = $keyword;

        return $this;
    }
}
