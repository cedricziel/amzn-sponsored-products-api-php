<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsSPAutoTargetDetails extends \ArrayObject
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
     * Entity State.
     * | Type |  description |
     * |-----------|------------|
     * | `SEARCH_LOOSE_MATCH` | Search terms loosely matching advertised product. |
     * | `SEARCH_CLOSE_MATCH` | Search terms closely matching advertised product. |
     * | `PRODUCT_SUBSTITUTES` | Products that can be substituted for advertised product. |
     * | `PRODUCT_COMPLEMENTS` | Products that complement advertised product. |
     * | `PRODUCT_SIMILAR` | Products similar to advertised product. |.
     *
     * @var string
     */
    protected $matchType;

    /**
     * Entity State.
     * | Type |  description |
     * |-----------|------------|
     * | `SEARCH_LOOSE_MATCH` | Search terms loosely matching advertised product. |
     * | `SEARCH_CLOSE_MATCH` | Search terms closely matching advertised product. |
     * | `PRODUCT_SUBSTITUTES` | Products that can be substituted for advertised product. |
     * | `PRODUCT_COMPLEMENTS` | Products that complement advertised product. |
     * | `PRODUCT_SIMILAR` | Products similar to advertised product. |.
     */
    public function getMatchType(): string
    {
        return $this->matchType;
    }

    /**
     * Entity State.
     * | Type |  description |
     * |-----------|------------|
     * | `SEARCH_LOOSE_MATCH` | Search terms loosely matching advertised product. |
     * | `SEARCH_CLOSE_MATCH` | Search terms closely matching advertised product. |
     * | `PRODUCT_SUBSTITUTES` | Products that can be substituted for advertised product. |
     * | `PRODUCT_COMPLEMENTS` | Products that complement advertised product. |
     * | `PRODUCT_SIMILAR` | Products similar to advertised product. |.
     */
    public function setMatchType(string $matchType): self
    {
        $this->initialized['matchType'] = true;
        $this->matchType = $matchType;

        return $this;
    }
}
