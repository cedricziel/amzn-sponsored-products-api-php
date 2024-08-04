<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class GlobalBudgetRecommendationNewCampaignsError extends \ArrayObject
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
    protected $errorMessage;
    /**
     * @var string
     */
    protected $errorCode;
    /**
     * @var float
     */
    protected $errorId;
    /**
     * @var list<string>
     */
    protected $countries;

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    public function setErrorMessage(string $errorMessage): self
    {
        $this->initialized['errorMessage'] = true;
        $this->errorMessage = $errorMessage;

        return $this;
    }

    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    public function setErrorCode(string $errorCode): self
    {
        $this->initialized['errorCode'] = true;
        $this->errorCode = $errorCode;

        return $this;
    }

    public function getErrorId(): float
    {
        return $this->errorId;
    }

    public function setErrorId(float $errorId): self
    {
        $this->initialized['errorId'] = true;
        $this->errorId = $errorId;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getCountries(): array
    {
        return $this->countries;
    }

    /**
     * @param list<string> $countries
     */
    public function setCountries(array $countries): self
    {
        $this->initialized['countries'] = true;
        $this->countries = $countries;

        return $this;
    }
}
