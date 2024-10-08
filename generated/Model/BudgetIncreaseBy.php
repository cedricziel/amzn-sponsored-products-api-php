<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class BudgetIncreaseBy extends \ArrayObject
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
     * The value by which to update the budget of the budget rule.
     *
     * @var string
     */
    protected $type;
    /**
     * The budget value.
     *
     * @var float
     */
    protected $value;

    /**
     * The value by which to update the budget of the budget rule.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The value by which to update the budget of the budget rule.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * The budget value.
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * The budget value.
     */
    public function setValue(float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
