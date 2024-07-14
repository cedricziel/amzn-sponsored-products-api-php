<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsProductAdAccessError extends \ArrayObject
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
     * The type of the error.
     *
     * @var string
     */
    protected $errorType;
    /**
     * @var SponsoredProductsProductAdAccessErrorSelector
     */
    protected $errorValue;

    /**
     * The type of the error.
     */
    public function getErrorType(): string
    {
        return $this->errorType;
    }

    /**
     * The type of the error.
     */
    public function setErrorType(string $errorType): self
    {
        $this->initialized['errorType'] = true;
        $this->errorType = $errorType;

        return $this;
    }

    public function getErrorValue(): SponsoredProductsProductAdAccessErrorSelector
    {
        return $this->errorValue;
    }

    public function setErrorValue(SponsoredProductsProductAdAccessErrorSelector $errorValue): self
    {
        $this->initialized['errorValue'] = true;
        $this->errorValue = $errorValue;

        return $this;
    }
}
