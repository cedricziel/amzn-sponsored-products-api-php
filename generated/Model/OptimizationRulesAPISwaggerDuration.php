<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class OptimizationRulesAPISwaggerDuration extends \ArrayObject
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
     * Time of optimization rule creation in ISO 8061.
     *
     * @var string
     */
    protected $startTime;
    /**
     * Time of optimization rule creation in ISO 8061.
     *
     * @var string
     */
    protected $endTime;

    /**
     * Time of optimization rule creation in ISO 8061.
     */
    public function getStartTime(): string
    {
        return $this->startTime;
    }

    /**
     * Time of optimization rule creation in ISO 8061.
     */
    public function setStartTime(string $startTime): self
    {
        $this->initialized['startTime'] = true;
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Time of optimization rule creation in ISO 8061.
     */
    public function getEndTime(): string
    {
        return $this->endTime;
    }

    /**
     * Time of optimization rule creation in ISO 8061.
     */
    public function setEndTime(string $endTime): self
    {
        $this->initialized['endTime'] = true;
        $this->endTime = $endTime;

        return $this;
    }
}
