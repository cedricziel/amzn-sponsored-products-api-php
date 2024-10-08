<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class Adjustment extends \ArrayObject
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
     * Specifies bid adjustments based on the placement location. Use `PLACEMENT_TOP` for the top of the search page. Use `PLACEMENT_REST_OF_SEARCH` for the rest of the search page. Use `PLACEMENT_PRODUCT_PAGE` for a product page.
     *
     * @var PlacementAdjustment
     */
    protected $placementAdjustment;

    /**
     * Specifies bid adjustments based on the placement location. Use `PLACEMENT_TOP` for the top of the search page. Use `PLACEMENT_REST_OF_SEARCH` for the rest of the search page. Use `PLACEMENT_PRODUCT_PAGE` for a product page.
     */
    public function getPlacementAdjustment(): PlacementAdjustment
    {
        return $this->placementAdjustment;
    }

    /**
     * Specifies bid adjustments based on the placement location. Use `PLACEMENT_TOP` for the top of the search page. Use `PLACEMENT_REST_OF_SEARCH` for the rest of the search page. Use `PLACEMENT_PRODUCT_PAGE` for a product page.
     */
    public function setPlacementAdjustment(PlacementAdjustment $placementAdjustment): self
    {
        $this->initialized['placementAdjustment'] = true;
        $this->placementAdjustment = $placementAdjustment;

        return $this;
    }
}
