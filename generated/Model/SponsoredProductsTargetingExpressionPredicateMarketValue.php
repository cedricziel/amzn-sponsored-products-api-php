<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsTargetingExpressionPredicateMarketValue extends \ArrayObject
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
     * The expression value.
     *
     * @var string
     */
    protected $value;

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
     * The expression value.
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * The expression value.
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
