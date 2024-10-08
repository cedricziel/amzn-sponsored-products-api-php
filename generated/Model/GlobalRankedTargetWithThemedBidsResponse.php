<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class GlobalRankedTargetWithThemedBidsResponse extends \ArrayObject
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
     * @var array<string, RankedTargetWithThemedBidsResponseWithError>
     */
    protected $countryCodes;

    /**
     * @return array<string, RankedTargetWithThemedBidsResponseWithError>
     */
    public function getCountryCodes(): iterable
    {
        return $this->countryCodes;
    }

    /**
     * @param array<string, RankedTargetWithThemedBidsResponseWithError> $countryCodes
     */
    public function setCountryCodes(iterable $countryCodes): self
    {
        $this->initialized['countryCodes'] = true;
        $this->countryCodes = $countryCodes;

        return $this;
    }
}
