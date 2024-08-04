<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsCreateSponsoredProductsAdGroupsResponseContent extends \ArrayObject
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
     * @var SponsoredProductsBulkAdGroupOperationResponse
     */
    protected $adGroups;

    public function getAdGroups(): SponsoredProductsBulkAdGroupOperationResponse
    {
        return $this->adGroups;
    }

    public function setAdGroups(SponsoredProductsBulkAdGroupOperationResponse $adGroups): self
    {
        $this->initialized['adGroups'] = true;
        $this->adGroups = $adGroups;

        return $this;
    }
}
