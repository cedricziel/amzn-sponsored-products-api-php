<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsUpdateSponsoredProductsGlobalNegativeTargetingClausesResponseContent extends \ArrayObject
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
     * @var SponsoredProductsBulkGlobalNegativeTargetingClauseOperationResponse
     */
    protected $negativeTargetingClauses;

    public function getNegativeTargetingClauses(): SponsoredProductsBulkGlobalNegativeTargetingClauseOperationResponse
    {
        return $this->negativeTargetingClauses;
    }

    public function setNegativeTargetingClauses(SponsoredProductsBulkGlobalNegativeTargetingClauseOperationResponse $negativeTargetingClauses): self
    {
        $this->initialized['negativeTargetingClauses'] = true;
        $this->negativeTargetingClauses = $negativeTargetingClauses;

        return $this;
    }
}
