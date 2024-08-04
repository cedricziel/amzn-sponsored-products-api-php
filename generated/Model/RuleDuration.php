<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class RuleDuration extends \ArrayObject
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
     * Object representing event type rule duration.
     *
     * @var EventTypeRuleDuration
     */
    protected $eventTypeRuleDuration;
    /**
     * Object representing date range type rule duration.
     *
     * @var DateRangeTypeRuleDuration
     */
    protected $dateRangeTypeRuleDuration;

    /**
     * Object representing event type rule duration.
     */
    public function getEventTypeRuleDuration(): EventTypeRuleDuration
    {
        return $this->eventTypeRuleDuration;
    }

    /**
     * Object representing event type rule duration.
     */
    public function setEventTypeRuleDuration(EventTypeRuleDuration $eventTypeRuleDuration): self
    {
        $this->initialized['eventTypeRuleDuration'] = true;
        $this->eventTypeRuleDuration = $eventTypeRuleDuration;

        return $this;
    }

    /**
     * Object representing date range type rule duration.
     */
    public function getDateRangeTypeRuleDuration(): DateRangeTypeRuleDuration
    {
        return $this->dateRangeTypeRuleDuration;
    }

    /**
     * Object representing date range type rule duration.
     */
    public function setDateRangeTypeRuleDuration(DateRangeTypeRuleDuration $dateRangeTypeRuleDuration): self
    {
        $this->initialized['dateRangeTypeRuleDuration'] = true;
        $this->dateRangeTypeRuleDuration = $dateRangeTypeRuleDuration;

        return $this;
    }
}
