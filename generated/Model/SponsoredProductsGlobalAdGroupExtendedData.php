<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsGlobalAdGroupExtendedData extends \ArrayObject
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
     * @var SponsoredProductsGlobalAdGroupServingStatus
     */
    protected $servingStatus;

    public function getServingStatus(): SponsoredProductsGlobalAdGroupServingStatus
    {
        return $this->servingStatus;
    }

    public function setServingStatus(SponsoredProductsGlobalAdGroupServingStatus $servingStatus): self
    {
        $this->initialized['servingStatus'] = true;
        $this->servingStatus = $servingStatus;

        return $this;
    }
}
