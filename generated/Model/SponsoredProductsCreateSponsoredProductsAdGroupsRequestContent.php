<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsCreateSponsoredProductsAdGroupsRequestContent extends \ArrayObject
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
     * An array of adGroups.
     *
     * @var list<SponsoredProductsCreateAdGroup>
     */
    protected $adGroups;

    /**
     * An array of adGroups.
     *
     * @return list<SponsoredProductsCreateAdGroup>
     */
    public function getAdGroups(): array
    {
        return $this->adGroups;
    }

    /**
     * An array of adGroups.
     *
     * @param list<SponsoredProductsCreateAdGroup> $adGroups
     */
    public function setAdGroups(array $adGroups): self
    {
        $this->initialized['adGroups'] = true;
        $this->adGroups = $adGroups;

        return $this;
    }
}
