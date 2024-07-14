<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsPlacementBidding extends \ArrayObject
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
     * @var int
     */
    protected $percentage;
    /**
     * You can enable controls to adjust your bid based on the placement location. Specify a location where you want to use bid controls. The percentage value set is the percentage of the original bid for which you want to have your bid adjustment increased. For example, a 50% adjustment on a $1.00 bid would increase the bid to $1.50 for the opportunity to win a specified placement.
     * | Predicate |  Placement |
     * |-----------|------------|
     * | `PLACEMENT_TOP` | Top of search (first page) |
     * | `PLACEMENT_PRODUCT_PAGE` | Product pages |
     * | `PLACEMENT_REST_OF_SEARCH` | Rest of the search |
     * | `SITE_AMAZON_BUSINESS` | Site Amazon Business [COMING LATER] |.
     *
     * @var string
     */
    protected $placement;

    public function getPercentage(): int
    {
        return $this->percentage;
    }

    public function setPercentage(int $percentage): self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * You can enable controls to adjust your bid based on the placement location. Specify a location where you want to use bid controls. The percentage value set is the percentage of the original bid for which you want to have your bid adjustment increased. For example, a 50% adjustment on a $1.00 bid would increase the bid to $1.50 for the opportunity to win a specified placement.
     * | Predicate |  Placement |
     * |-----------|------------|
     * | `PLACEMENT_TOP` | Top of search (first page) |
     * | `PLACEMENT_PRODUCT_PAGE` | Product pages |
     * | `PLACEMENT_REST_OF_SEARCH` | Rest of the search |
     * | `SITE_AMAZON_BUSINESS` | Site Amazon Business [COMING LATER] |.
     */
    public function getPlacement(): string
    {
        return $this->placement;
    }

    /**
     * You can enable controls to adjust your bid based on the placement location. Specify a location where you want to use bid controls. The percentage value set is the percentage of the original bid for which you want to have your bid adjustment increased. For example, a 50% adjustment on a $1.00 bid would increase the bid to $1.50 for the opportunity to win a specified placement.
     * | Predicate |  Placement |
     * |-----------|------------|
     * | `PLACEMENT_TOP` | Top of search (first page) |
     * | `PLACEMENT_PRODUCT_PAGE` | Product pages |
     * | `PLACEMENT_REST_OF_SEARCH` | Rest of the search |
     * | `SITE_AMAZON_BUSINESS` | Site Amazon Business [COMING LATER] |.
     */
    public function setPlacement(string $placement): self
    {
        $this->initialized['placement'] = true;
        $this->placement = $placement;

        return $this;
    }
}
