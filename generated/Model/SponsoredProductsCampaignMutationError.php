<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsCampaignMutationError extends \ArrayObject
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
     * @var SponsoredProductsCampaignMutationErrorSelector
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

    public function getErrorValue(): SponsoredProductsCampaignMutationErrorSelector
    {
        return $this->errorValue;
    }

    public function setErrorValue(SponsoredProductsCampaignMutationErrorSelector $errorValue): self
    {
        $this->initialized['errorValue'] = true;
        $this->errorValue = $errorValue;

        return $this;
    }
}
