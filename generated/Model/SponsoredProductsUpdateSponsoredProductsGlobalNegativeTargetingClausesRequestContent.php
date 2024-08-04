<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsUpdateSponsoredProductsGlobalNegativeTargetingClausesRequestContent extends \ArrayObject
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
     * An array of negativeTargeting with updated values.
     *
     * @var list<SponsoredProductsUpdateGlobalNegativeTargetingClause>
     */
    protected $negativeTargetingClauses;

    /**
     * An array of negativeTargeting with updated values.
     *
     * @return list<SponsoredProductsUpdateGlobalNegativeTargetingClause>
     */
    public function getNegativeTargetingClauses(): array
    {
        return $this->negativeTargetingClauses;
    }

    /**
     * An array of negativeTargeting with updated values.
     *
     * @param list<SponsoredProductsUpdateGlobalNegativeTargetingClause> $negativeTargetingClauses
     */
    public function setNegativeTargetingClauses(array $negativeTargetingClauses): self
    {
        $this->initialized['negativeTargetingClauses'] = true;
        $this->negativeTargetingClauses = $negativeTargetingClauses;

        return $this;
    }
}
