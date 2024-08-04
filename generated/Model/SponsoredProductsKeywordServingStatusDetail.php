<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsKeywordServingStatusDetail extends \ArrayObject
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
    protected $name;
    /**
     * A URL with additional information about the status identifier.
     *
     * @var string
     */
    protected $helpUrl;
    /**
     * A human-readable description of the status identifier specified in the name field.
     *
     * @var string
     */
    protected $message;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * A URL with additional information about the status identifier.
     */
    public function getHelpUrl(): string
    {
        return $this->helpUrl;
    }

    /**
     * A URL with additional information about the status identifier.
     */
    public function setHelpUrl(string $helpUrl): self
    {
        $this->initialized['helpUrl'] = true;
        $this->helpUrl = $helpUrl;

        return $this;
    }

    /**
     * A human-readable description of the status identifier specified in the name field.
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * A human-readable description of the status identifier specified in the name field.
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }
}
