<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class Brand extends \ArrayObject
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
     * Name of brand. This field is OPTIONAL if the Brand object is being used as an input.
     *
     * @var string
     */
    protected $name;
    /**
     * Id of brand. This field is REQUIRED if the Brand object is being used as an input. Use the GetRefinementsForCategory to retrieve Brand Node IDs.
     *
     * @var string
     */
    protected $id;

    /**
     * Name of brand. This field is OPTIONAL if the Brand object is being used as an input.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name of brand. This field is OPTIONAL if the Brand object is being used as an input.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Id of brand. This field is REQUIRED if the Brand object is being used as an input. Use the GetRefinementsForCategory to retrieve Brand Node IDs.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Id of brand. This field is REQUIRED if the Brand object is being used as an input. Use the GetRefinementsForCategory to retrieve Brand Node IDs.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }
}
