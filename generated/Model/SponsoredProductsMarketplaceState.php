<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsMarketplaceState extends \ArrayObject
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
     * @var string
     */
    protected $marketplace;
    /**
     * The current resource state.
     * | State | Description |
     * | --- | --- |
     * | `ENABLED` | Enabled State |
     * | `PAUSED` | Paused State |
     * | `ARCHIVED` | ARCHIVED State |
     * | `ENABLING` | State for Draft Entity Only |
     * | `USER_DELETED` | State for Draft Entity Only |
     * | `OTHER` | Read Only |.
     *
     * @var string
     */
    protected $state;

    public function getMarketplace(): string
    {
        return $this->marketplace;
    }

    public function setMarketplace(string $marketplace): self
    {
        $this->initialized['marketplace'] = true;
        $this->marketplace = $marketplace;

        return $this;
    }

    /**
     * The current resource state.
     * | State | Description |
     * | --- | --- |
     * | `ENABLED` | Enabled State |
     * | `PAUSED` | Paused State |
     * | `ARCHIVED` | ARCHIVED State |
     * | `ENABLING` | State for Draft Entity Only |
     * | `USER_DELETED` | State for Draft Entity Only |
     * | `OTHER` | Read Only |.
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * The current resource state.
     * | State | Description |
     * | --- | --- |
     * | `ENABLED` | Enabled State |
     * | `PAUSED` | Paused State |
     * | `ARCHIVED` | ARCHIVED State |
     * | `ENABLING` | State for Draft Entity Only |
     * | `USER_DELETED` | State for Draft Entity Only |
     * | `OTHER` | Read Only |.
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

        return $this;
    }
}
