<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsCreateAllSPTargetsRequestContent extends \ArrayObject
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
     * An array of targets.
     *
     * @var list<SponsoredProductsCreateAllTargets>
     */
    protected $targets;

    /**
     * An array of targets.
     *
     * @return list<SponsoredProductsCreateAllTargets>
     */
    public function getTargets(): array
    {
        return $this->targets;
    }

    /**
     * An array of targets.
     *
     * @param list<SponsoredProductsCreateAllTargets> $targets
     */
    public function setTargets(array $targets): self
    {
        $this->initialized['targets'] = true;
        $this->targets = $targets;

        return $this;
    }
}
