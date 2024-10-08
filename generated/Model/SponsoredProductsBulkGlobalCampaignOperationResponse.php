<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsBulkGlobalCampaignOperationResponse extends \ArrayObject
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
     * @var list<SponsoredProductsGlobalCampaignMutationSuccessResponseItem>
     */
    protected $success;
    /**
     * @var list<SponsoredProductsGlobalCampaignMutationFailureResponseItem>
     */
    protected $error;

    /**
     * @return list<SponsoredProductsGlobalCampaignMutationSuccessResponseItem>
     */
    public function getSuccess(): array
    {
        return $this->success;
    }

    /**
     * @param list<SponsoredProductsGlobalCampaignMutationSuccessResponseItem> $success
     */
    public function setSuccess(array $success): self
    {
        $this->initialized['success'] = true;
        $this->success = $success;

        return $this;
    }

    /**
     * @return list<SponsoredProductsGlobalCampaignMutationFailureResponseItem>
     */
    public function getError(): array
    {
        return $this->error;
    }

    /**
     * @param list<SponsoredProductsGlobalCampaignMutationFailureResponseItem> $error
     */
    public function setError(array $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;

        return $this;
    }
}
