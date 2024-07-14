<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsBulkNegativeKeywordOperationResponse extends \ArrayObject
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
     * @var list<SponsoredProductsNegativeKeywordSuccessResponseItem>
     */
    protected $success;
    /**
     * @var list<SponsoredProductsNegativeKeywordFailureResponseItem>
     */
    protected $error;

    /**
     * @return list<SponsoredProductsNegativeKeywordSuccessResponseItem>
     */
    public function getSuccess(): array
    {
        return $this->success;
    }

    /**
     * @param list<SponsoredProductsNegativeKeywordSuccessResponseItem> $success
     */
    public function setSuccess(array $success): self
    {
        $this->initialized['success'] = true;
        $this->success = $success;

        return $this;
    }

    /**
     * @return list<SponsoredProductsNegativeKeywordFailureResponseItem>
     */
    public function getError(): array
    {
        return $this->error;
    }

    /**
     * @param list<SponsoredProductsNegativeKeywordFailureResponseItem> $error
     */
    public function setError(array $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;

        return $this;
    }
}
