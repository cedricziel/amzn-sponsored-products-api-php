<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsInvalidInputError extends \ArrayObject
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
    protected $reason;
    /**
     * Structure describing error cause - location in the payload and data causing error.
     *
     * @var SponsoredProductsErrorCause
     */
    protected $cause;
    /**
     * Human readable error message.
     *
     * @var string
     */
    protected $message;

    public function getReason(): string
    {
        return $this->reason;
    }

    public function setReason(string $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;

        return $this;
    }

    /**
     * Structure describing error cause - location in the payload and data causing error.
     */
    public function getCause(): SponsoredProductsErrorCause
    {
        return $this->cause;
    }

    /**
     * Structure describing error cause - location in the payload and data causing error.
     */
    public function setCause(SponsoredProductsErrorCause $cause): self
    {
        $this->initialized['cause'] = true;
        $this->cause = $cause;

        return $this;
    }

    /**
     * Human readable error message.
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Human readable error message.
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }
}
