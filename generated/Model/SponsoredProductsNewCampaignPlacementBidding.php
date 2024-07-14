<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsNewCampaignPlacementBidding extends \ArrayObject
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
     * The bidding placement percentage.
     *
     * @var int
     */
    protected $percentage;
    /**
     * The bidding placement. One of PLACEMENT_TOP, PLACEMENT_PRODUCT_PAGE, PLACEMENT_REST_OF_SEARCH.
     *
     * @var string
     */
    protected $placement;

    /**
     * The bidding placement percentage.
     */
    public function getPercentage(): int
    {
        return $this->percentage;
    }

    /**
     * The bidding placement percentage.
     */
    public function setPercentage(int $percentage): self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * The bidding placement. One of PLACEMENT_TOP, PLACEMENT_PRODUCT_PAGE, PLACEMENT_REST_OF_SEARCH.
     */
    public function getPlacement(): string
    {
        return $this->placement;
    }

    /**
     * The bidding placement. One of PLACEMENT_TOP, PLACEMENT_PRODUCT_PAGE, PLACEMENT_REST_OF_SEARCH.
     */
    public function setPlacement(string $placement): self
    {
        $this->initialized['placement'] = true;
        $this->placement = $placement;

        return $this;
    }
}
