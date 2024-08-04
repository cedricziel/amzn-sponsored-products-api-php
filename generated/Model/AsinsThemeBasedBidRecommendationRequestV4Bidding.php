<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class AsinsThemeBasedBidRecommendationRequestV4Bidding extends \ArrayObject
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
     * Placement adjustment configuration for the campaign.
     *
     * @var list<PlacementAdjustment>
     */
    protected $adjustments;
    /**
     * The bidding strategy selected for the campaign. Use `LEGACY_FOR_SALES` to lower your bid in real time when your ad may be less likely to convert to a sale. Use `AUTO_FOR_SALES` to increase your bid in real time when your ad may be more likely to convert to a sale or lower your bid when less likely to convert to a sale. Use `MANUAL` to use your exact bid along with any manual adjustments.
     *
     * @var string
     */
    protected $strategy;

    /**
     * Placement adjustment configuration for the campaign.
     *
     * @return list<PlacementAdjustment>
     */
    public function getAdjustments(): array
    {
        return $this->adjustments;
    }

    /**
     * Placement adjustment configuration for the campaign.
     *
     * @param list<PlacementAdjustment> $adjustments
     */
    public function setAdjustments(array $adjustments): self
    {
        $this->initialized['adjustments'] = true;
        $this->adjustments = $adjustments;

        return $this;
    }

    /**
     * The bidding strategy selected for the campaign. Use `LEGACY_FOR_SALES` to lower your bid in real time when your ad may be less likely to convert to a sale. Use `AUTO_FOR_SALES` to increase your bid in real time when your ad may be more likely to convert to a sale or lower your bid when less likely to convert to a sale. Use `MANUAL` to use your exact bid along with any manual adjustments.
     */
    public function getStrategy(): string
    {
        return $this->strategy;
    }

    /**
     * The bidding strategy selected for the campaign. Use `LEGACY_FOR_SALES` to lower your bid in real time when your ad may be less likely to convert to a sale. Use `AUTO_FOR_SALES` to increase your bid in real time when your ad may be more likely to convert to a sale or lower your bid when less likely to convert to a sale. Use `MANUAL` to use your exact bid along with any manual adjustments.
     */
    public function setStrategy(string $strategy): self
    {
        $this->initialized['strategy'] = true;
        $this->strategy = $strategy;

        return $this;
    }
}
