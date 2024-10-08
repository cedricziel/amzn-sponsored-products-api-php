<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsErrorCause extends \ArrayObject
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
     * Error location, JSON Path expression specifying element of API payload causing error.
     *
     * @var string
     */
    protected $location;
    /**
     * optional value causing error.
     *
     * @var string
     */
    protected $trigger;

    /**
     * Error location, JSON Path expression specifying element of API payload causing error.
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * Error location, JSON Path expression specifying element of API payload causing error.
     */
    public function setLocation(string $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;

        return $this;
    }

    /**
     * optional value causing error.
     */
    public function getTrigger(): string
    {
        return $this->trigger;
    }

    /**
     * optional value causing error.
     */
    public function setTrigger(string $trigger): self
    {
        $this->initialized['trigger'] = true;
        $this->trigger = $trigger;

        return $this;
    }
}
