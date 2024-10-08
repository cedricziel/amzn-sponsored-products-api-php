<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class ProductRecommendation extends \ArrayObject
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
     * List of themes associated with this recommended ASIN.
     *
     * @var list<string>
     */
    protected $themes;
    /**
     * Recommended ASIN.
     *
     * @var string
     */
    protected $recommendedAsin;

    /**
     * List of themes associated with this recommended ASIN.
     *
     * @return list<string>
     */
    public function getThemes(): array
    {
        return $this->themes;
    }

    /**
     * List of themes associated with this recommended ASIN.
     *
     * @param list<string> $themes
     */
    public function setThemes(array $themes): self
    {
        $this->initialized['themes'] = true;
        $this->themes = $themes;

        return $this;
    }

    /**
     * Recommended ASIN.
     */
    public function getRecommendedAsin(): string
    {
        return $this->recommendedAsin;
    }

    /**
     * Recommended ASIN.
     */
    public function setRecommendedAsin(string $recommendedAsin): self
    {
        $this->initialized['recommendedAsin'] = true;
        $this->recommendedAsin = $recommendedAsin;

        return $this;
    }
}
