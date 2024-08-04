<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsBulkGlobalNegativeKeywordOperationResponse extends \ArrayObject
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
     * @var list<SponsoredProductsGlobalNegativeKeywordSuccessResponseItem>
     */
    protected $success;
    /**
     * @var list<SponsoredProductsGlobalNegativeKeywordFailureResponseItem>
     */
    protected $error;

    /**
     * @return list<SponsoredProductsGlobalNegativeKeywordSuccessResponseItem>
     */
    public function getSuccess(): array
    {
        return $this->success;
    }

    /**
     * @param list<SponsoredProductsGlobalNegativeKeywordSuccessResponseItem> $success
     */
    public function setSuccess(array $success): self
    {
        $this->initialized['success'] = true;
        $this->success = $success;

        return $this;
    }

    /**
     * @return list<SponsoredProductsGlobalNegativeKeywordFailureResponseItem>
     */
    public function getError(): array
    {
        return $this->error;
    }

    /**
     * @param list<SponsoredProductsGlobalNegativeKeywordFailureResponseItem> $error
     */
    public function setError(array $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;

        return $this;
    }
}
