<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsDraftAdGroupExtendedData extends \ArrayObject
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
     * Last updated date in ISO 8601.
     *
     * @var \DateTime
     */
    protected $lastUpdateDateTime;
    /**
     * @var string
     */
    protected $servingStatus;
    /**
     * Creation date in ISO 8601.
     *
     * @var \DateTime
     */
    protected $creationDateTime;

    /**
     * Last updated date in ISO 8601.
     */
    public function getLastUpdateDateTime(): \DateTime
    {
        return $this->lastUpdateDateTime;
    }

    /**
     * Last updated date in ISO 8601.
     */
    public function setLastUpdateDateTime(\DateTime $lastUpdateDateTime): self
    {
        $this->initialized['lastUpdateDateTime'] = true;
        $this->lastUpdateDateTime = $lastUpdateDateTime;

        return $this;
    }

    public function getServingStatus(): string
    {
        return $this->servingStatus;
    }

    public function setServingStatus(string $servingStatus): self
    {
        $this->initialized['servingStatus'] = true;
        $this->servingStatus = $servingStatus;

        return $this;
    }

    /**
     * Creation date in ISO 8601.
     */
    public function getCreationDateTime(): \DateTime
    {
        return $this->creationDateTime;
    }

    /**
     * Creation date in ISO 8601.
     */
    public function setCreationDateTime(\DateTime $creationDateTime): self
    {
        $this->initialized['creationDateTime'] = true;
        $this->creationDateTime = $creationDateTime;

        return $this;
    }
}
