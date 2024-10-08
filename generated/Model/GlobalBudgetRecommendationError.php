<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class GlobalBudgetRecommendationError extends \ArrayObject
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
     * @var list<string>
     */
    protected $countryCodes;
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
     * @return list<string>
     */
    public function getCountryCodes(): array
    {
        return $this->countryCodes;
    }

    /**
     * @param list<string> $countryCodes
     */
    public function setCountryCodes(array $countryCodes): self
    {
        $this->initialized['countryCodes'] = true;
        $this->countryCodes = $countryCodes;

        return $this;
    }

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
}
