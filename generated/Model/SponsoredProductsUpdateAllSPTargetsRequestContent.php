<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsUpdateAllSPTargetsRequestContent extends \ArrayObject
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
     * @var list<SponsoredProductsUpdateAllTargets>
     */
    protected $targets;

    /**
     * An array of targets.
     *
     * @return list<SponsoredProductsUpdateAllTargets>
     */
    public function getTargets(): array
    {
        return $this->targets;
    }

    /**
     * An array of targets.
     *
     * @param list<SponsoredProductsUpdateAllTargets> $targets
     */
    public function setTargets(array $targets): self
    {
        $this->initialized['targets'] = true;
        $this->targets = $targets;

        return $this;
    }
}
