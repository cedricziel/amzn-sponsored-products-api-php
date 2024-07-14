<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsUpdateSponsoredProductsAdGroupsRequestContent extends \ArrayObject
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
     * An array of adGroups with updated values.
     *
     * @var list<SponsoredProductsUpdateAdGroup>
     */
    protected $adGroups;

    /**
     * An array of adGroups with updated values.
     *
     * @return list<SponsoredProductsUpdateAdGroup>
     */
    public function getAdGroups(): array
    {
        return $this->adGroups;
    }

    /**
     * An array of adGroups with updated values.
     *
     * @param list<SponsoredProductsUpdateAdGroup> $adGroups
     */
    public function setAdGroups(array $adGroups): self
    {
        $this->initialized['adGroups'] = true;
        $this->adGroups = $adGroups;

        return $this;
    }
}
