<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsTargetAccessErrorSelector extends \ArrayObject
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
     * @var SponsoredProductsEntityNotFoundError
     */
    protected $entityNotFoundError;
    /**
     * Error describing missing values in API payloads.
     *
     * @var SponsoredProductsMissingValueError
     */
    protected $missingValueError;
    /**
     * Errors being used to represent malformed values
     * e.g. containing not allowed characters, not following patters etc.
     *
     * @var SponsoredProductsMalformedValueError
     */
    protected $malformedValueError;
    /**
     * Error that represents non-retryable API service error. Sending the same request will result in another error.
     *
     * @var SponsoredProductsInternalServerError
     */
    protected $internalServerError;
    /**
     * Errors related to range constraints violations.
     *
     * @var SponsoredProductsRangeError
     */
    protected $rangeError;
    /**
     * Errors not related to any of the other error types.
     *
     * @var SponsoredProductsOtherError
     */
    protected $otherError;
    /**
     * Errors related to ad eligibility.
     *
     * @var SponsoredProductsInvalidInputError
     */
    protected $invalidInputError;
    /**
     * Error that represents failure due to API caller exceeding allowed service limits.
     *
     * @var SponsoredProductsThrottledError
     */
    protected $throttledError;

    public function getEntityNotFoundError(): SponsoredProductsEntityNotFoundError
    {
        return $this->entityNotFoundError;
    }

    public function setEntityNotFoundError(SponsoredProductsEntityNotFoundError $entityNotFoundError): self
    {
        $this->initialized['entityNotFoundError'] = true;
        $this->entityNotFoundError = $entityNotFoundError;

        return $this;
    }

    /**
     * Error describing missing values in API payloads.
     */
    public function getMissingValueError(): SponsoredProductsMissingValueError
    {
        return $this->missingValueError;
    }

    /**
     * Error describing missing values in API payloads.
     */
    public function setMissingValueError(SponsoredProductsMissingValueError $missingValueError): self
    {
        $this->initialized['missingValueError'] = true;
        $this->missingValueError = $missingValueError;

        return $this;
    }

    /**
     * Errors being used to represent malformed values
     * e.g. containing not allowed characters, not following patters etc.
     */
    public function getMalformedValueError(): SponsoredProductsMalformedValueError
    {
        return $this->malformedValueError;
    }

    /**
     * Errors being used to represent malformed values
     * e.g. containing not allowed characters, not following patters etc.
     */
    public function setMalformedValueError(SponsoredProductsMalformedValueError $malformedValueError): self
    {
        $this->initialized['malformedValueError'] = true;
        $this->malformedValueError = $malformedValueError;

        return $this;
    }

    /**
     * Error that represents non-retryable API service error. Sending the same request will result in another error.
     */
    public function getInternalServerError(): SponsoredProductsInternalServerError
    {
        return $this->internalServerError;
    }

    /**
     * Error that represents non-retryable API service error. Sending the same request will result in another error.
     */
    public function setInternalServerError(SponsoredProductsInternalServerError $internalServerError): self
    {
        $this->initialized['internalServerError'] = true;
        $this->internalServerError = $internalServerError;

        return $this;
    }

    /**
     * Errors related to range constraints violations.
     */
    public function getRangeError(): SponsoredProductsRangeError
    {
        return $this->rangeError;
    }

    /**
     * Errors related to range constraints violations.
     */
    public function setRangeError(SponsoredProductsRangeError $rangeError): self
    {
        $this->initialized['rangeError'] = true;
        $this->rangeError = $rangeError;

        return $this;
    }

    /**
     * Errors not related to any of the other error types.
     */
    public function getOtherError(): SponsoredProductsOtherError
    {
        return $this->otherError;
    }

    /**
     * Errors not related to any of the other error types.
     */
    public function setOtherError(SponsoredProductsOtherError $otherError): self
    {
        $this->initialized['otherError'] = true;
        $this->otherError = $otherError;

        return $this;
    }

    /**
     * Errors related to ad eligibility.
     */
    public function getInvalidInputError(): SponsoredProductsInvalidInputError
    {
        return $this->invalidInputError;
    }

    /**
     * Errors related to ad eligibility.
     */
    public function setInvalidInputError(SponsoredProductsInvalidInputError $invalidInputError): self
    {
        $this->initialized['invalidInputError'] = true;
        $this->invalidInputError = $invalidInputError;

        return $this;
    }

    /**
     * Error that represents failure due to API caller exceeding allowed service limits.
     */
    public function getThrottledError(): SponsoredProductsThrottledError
    {
        return $this->throttledError;
    }

    /**
     * Error that represents failure due to API caller exceeding allowed service limits.
     */
    public function setThrottledError(SponsoredProductsThrottledError $throttledError): self
    {
        $this->initialized['throttledError'] = true;
        $this->throttledError = $throttledError;

        return $this;
    }
}
