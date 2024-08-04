<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsGlobalNegativeKeywordExtendedData extends \ArrayObject
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
     * @var SponsoredProductsGlobalKeywordServingStatus
     */
    protected $servingStatus;

    public function getServingStatus(): SponsoredProductsGlobalKeywordServingStatus
    {
        return $this->servingStatus;
    }

    public function setServingStatus(SponsoredProductsGlobalKeywordServingStatus $servingStatus): self
    {
        $this->initialized['servingStatus'] = true;
        $this->servingStatus = $servingStatus;

        return $this;
    }
}
