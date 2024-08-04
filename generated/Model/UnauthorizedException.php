<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class UnauthorizedException extends \ArrayObject
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
     * The HTTP status code of the response.
     *
     * @var string
     */
    protected $code;
    /**
     * A human-readable description of the response.
     *
     * @var string
     */
    protected $details;

    /**
     * The HTTP status code of the response.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * The HTTP status code of the response.
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * A human-readable description of the response.
     */
    public function getDetails(): string
    {
        return $this->details;
    }

    /**
     * A human-readable description of the response.
     */
    public function setDetails(string $details): self
    {
        $this->initialized['details'] = true;
        $this->details = $details;

        return $this;
    }
}
