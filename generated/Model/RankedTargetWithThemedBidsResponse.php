<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class RankedTargetWithThemedBidsResponse extends \ArrayObject
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
     * @var list<RankedTargetWithThemedBids>
     */
    protected $keywordTargetList;
    /**
     * A list of impact metrics which anticipates the number of clicks and orders you will receive if you target all targeting expressions using the low, medium, and high suggested bid.
     *
     * @var list<ImpactMetrics>
     */
    protected $impactMetrics;

    /**
     * @return list<RankedTargetWithThemedBids>
     */
    public function getKeywordTargetList(): array
    {
        return $this->keywordTargetList;
    }

    /**
     * @param list<RankedTargetWithThemedBids> $keywordTargetList
     */
    public function setKeywordTargetList(array $keywordTargetList): self
    {
        $this->initialized['keywordTargetList'] = true;
        $this->keywordTargetList = $keywordTargetList;

        return $this;
    }

    /**
     * A list of impact metrics which anticipates the number of clicks and orders you will receive if you target all targeting expressions using the low, medium, and high suggested bid.
     *
     * @return list<ImpactMetrics>
     */
    public function getImpactMetrics(): array
    {
        return $this->impactMetrics;
    }

    /**
     * A list of impact metrics which anticipates the number of clicks and orders you will receive if you target all targeting expressions using the low, medium, and high suggested bid.
     *
     * @param list<ImpactMetrics> $impactMetrics
     */
    public function setImpactMetrics(array $impactMetrics): self
    {
        $this->initialized['impactMetrics'] = true;
        $this->impactMetrics = $impactMetrics;

        return $this;
    }
}
