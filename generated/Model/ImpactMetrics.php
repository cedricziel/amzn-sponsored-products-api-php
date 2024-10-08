<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class ImpactMetrics extends \ArrayObject
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
     * The impact metrics are given in the same order of suggested bids. <br> Note: This object is nullable.
     *
     * @var ImpactMetric|null
     */
    protected $clicks;
    /**
     * The impact metrics are given in the same order of suggested bids. <br> Note: This object is nullable.
     *
     * @var ImpactMetric|null
     */
    protected $orders;

    /**
     * The impact metrics are given in the same order of suggested bids. <br> Note: This object is nullable.
     */
    public function getClicks(): ?ImpactMetric
    {
        return $this->clicks;
    }

    /**
     * The impact metrics are given in the same order of suggested bids. <br> Note: This object is nullable.
     */
    public function setClicks(?ImpactMetric $clicks): self
    {
        $this->initialized['clicks'] = true;
        $this->clicks = $clicks;

        return $this;
    }

    /**
     * The impact metrics are given in the same order of suggested bids. <br> Note: This object is nullable.
     */
    public function getOrders(): ?ImpactMetric
    {
        return $this->orders;
    }

    /**
     * The impact metrics are given in the same order of suggested bids. <br> Note: This object is nullable.
     */
    public function setOrders(?ImpactMetric $orders): self
    {
        $this->initialized['orders'] = true;
        $this->orders = $orders;

        return $this;
    }
}
