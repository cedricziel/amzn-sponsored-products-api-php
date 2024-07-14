<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsDraftCampaignMutationErrorSelector extends \ArrayObject
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
     * entity state update errors.
     *
     * @var SponsoredProductsEntityStateError
     */
    protected $entityStateError;
    /**
     * Error describing missing values in API payloads.
     *
     * @var SponsoredProductsMissingValueError
     */
    protected $missingValueError;
    /**
     * @var SponsoredProductsDateError
     */
    protected $dateError;
    /**
     * Errors related to bids.
     *
     * @var SponsoredProductsBiddingError
     */
    protected $biddingError;
    /**
     * @var SponsoredProductsDuplicateValueError
     */
    protected $duplicateValueError;
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
     * Error that represents failure due to API caller exceeding allowed service limits.
     *
     * @var SponsoredProductsThrottledError
     */
    protected $throttledError;
    /**
     * @var SponsoredProductsEntityNotFoundError
     */
    protected $entityNotFoundError;
    /**
     * Errors being used to represent malformed values
     * e.g. containing not allowed characters, not following patters etc.
     *
     * @var SponsoredProductsMalformedValueError
     */
    protected $malformedValueError;
    /**
     * @var SponsoredProductsBudgetError
     */
    protected $budgetError;
    /**
     * Errors related to bids.
     *
     * @var SponsoredProductsBillingError
     */
    protected $billingError;
    /**
     * Errors related to exceeding quota in campaign management service.
     *
     * @var SponsoredProductsEntityQuotaError
     */
    protected $entityQuotaError;
    /**
     * Error that represents non-retryable API service error. Sending the same request will result in another error.
     *
     * @var SponsoredProductsInternalServerError
     */
    protected $internalServerError;

    /**
     * entity state update errors.
     */
    public function getEntityStateError(): SponsoredProductsEntityStateError
    {
        return $this->entityStateError;
    }

    /**
     * entity state update errors.
     */
    public function setEntityStateError(SponsoredProductsEntityStateError $entityStateError): self
    {
        $this->initialized['entityStateError'] = true;
        $this->entityStateError = $entityStateError;

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

    public function getDateError(): SponsoredProductsDateError
    {
        return $this->dateError;
    }

    public function setDateError(SponsoredProductsDateError $dateError): self
    {
        $this->initialized['dateError'] = true;
        $this->dateError = $dateError;

        return $this;
    }

    /**
     * Errors related to bids.
     */
    public function getBiddingError(): SponsoredProductsBiddingError
    {
        return $this->biddingError;
    }

    /**
     * Errors related to bids.
     */
    public function setBiddingError(SponsoredProductsBiddingError $biddingError): self
    {
        $this->initialized['biddingError'] = true;
        $this->biddingError = $biddingError;

        return $this;
    }

    public function getDuplicateValueError(): SponsoredProductsDuplicateValueError
    {
        return $this->duplicateValueError;
    }

    public function setDuplicateValueError(SponsoredProductsDuplicateValueError $duplicateValueError): self
    {
        $this->initialized['duplicateValueError'] = true;
        $this->duplicateValueError = $duplicateValueError;

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

    public function getBudgetError(): SponsoredProductsBudgetError
    {
        return $this->budgetError;
    }

    public function setBudgetError(SponsoredProductsBudgetError $budgetError): self
    {
        $this->initialized['budgetError'] = true;
        $this->budgetError = $budgetError;

        return $this;
    }

    /**
     * Errors related to bids.
     */
    public function getBillingError(): SponsoredProductsBillingError
    {
        return $this->billingError;
    }

    /**
     * Errors related to bids.
     */
    public function setBillingError(SponsoredProductsBillingError $billingError): self
    {
        $this->initialized['billingError'] = true;
        $this->billingError = $billingError;

        return $this;
    }

    /**
     * Errors related to exceeding quota in campaign management service.
     */
    public function getEntityQuotaError(): SponsoredProductsEntityQuotaError
    {
        return $this->entityQuotaError;
    }

    /**
     * Errors related to exceeding quota in campaign management service.
     */
    public function setEntityQuotaError(SponsoredProductsEntityQuotaError $entityQuotaError): self
    {
        $this->initialized['entityQuotaError'] = true;
        $this->entityQuotaError = $entityQuotaError;

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
}
