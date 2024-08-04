<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsEntityQuotaError extends \ArrayObject
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
     * @var string
     */
    protected $quotaScope;
    /**
     * @var string
     */
    protected $entityType;
    /**
     * optional current quota.
     *
     * @var string
     */
    protected $quota;
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

    public function getQuotaScope(): string
    {
        return $this->quotaScope;
    }

    public function setQuotaScope(string $quotaScope): self
    {
        $this->initialized['quotaScope'] = true;
        $this->quotaScope = $quotaScope;

        return $this;
    }

    public function getEntityType(): string
    {
        return $this->entityType;
    }

    public function setEntityType(string $entityType): self
    {
        $this->initialized['entityType'] = true;
        $this->entityType = $entityType;

        return $this;
    }

    /**
     * optional current quota.
     */
    public function getQuota(): string
    {
        return $this->quota;
    }

    /**
     * optional current quota.
     */
    public function setQuota(string $quota): self
    {
        $this->initialized['quota'] = true;
        $this->quota = $quota;

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
