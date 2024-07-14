<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsCreateSponsoredProductsGlobalTargetingClausesResponseContent extends \ArrayObject
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
     * @var SponsoredProductsBulkGlobalTargetingClauseOperationResponse
     */
    protected $targetingClauses;

    public function getTargetingClauses(): SponsoredProductsBulkGlobalTargetingClauseOperationResponse
    {
        return $this->targetingClauses;
    }

    public function setTargetingClauses(SponsoredProductsBulkGlobalTargetingClauseOperationResponse $targetingClauses): self
    {
        $this->initialized['targetingClauses'] = true;
        $this->targetingClauses = $targetingClauses;

        return $this;
    }
}
