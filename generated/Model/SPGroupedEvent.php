<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SPGroupedEvent extends \ArrayObject
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
     * The grouped event identifier.
     *
     * @var string
     */
    protected $groupedEventId;
    /**
     * The grouped event name.
     *
     * @var string
     */
    protected $groupedEventName;
    /**
     * The end date in ISO-8601 format.
     *
     * @var \DateTime
     */
    protected $endDate;
    /**
     * The start date in ISO-8601 format.
     *
     * @var \DateTime
     */
    protected $startDate;

    /**
     * The grouped event identifier.
     */
    public function getGroupedEventId(): string
    {
        return $this->groupedEventId;
    }

    /**
     * The grouped event identifier.
     */
    public function setGroupedEventId(string $groupedEventId): self
    {
        $this->initialized['groupedEventId'] = true;
        $this->groupedEventId = $groupedEventId;

        return $this;
    }

    /**
     * The grouped event name.
     */
    public function getGroupedEventName(): string
    {
        return $this->groupedEventName;
    }

    /**
     * The grouped event name.
     */
    public function setGroupedEventName(string $groupedEventName): self
    {
        $this->initialized['groupedEventName'] = true;
        $this->groupedEventName = $groupedEventName;

        return $this;
    }

    /**
     * The end date in ISO-8601 format.
     */
    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    /**
     * The end date in ISO-8601 format.
     */
    public function setEndDate(\DateTime $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * The start date in ISO-8601 format.
     */
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    /**
     * The start date in ISO-8601 format.
     */
    public function setStartDate(\DateTime $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;

        return $this;
    }
}
