<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class Benchmark extends \ArrayObject
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
     * Specifies the processing status of the benchmark. Success - If all fields in values property (impressions, clicks, conversions) have all non-null values. Failed - If all fields in values property have all null values. Partial - If some of the fields (impressions, clicks, or conversions) in values property have null values.
     *
     * @var string
     */
    protected $benchmarkStatus;
    /**
     * Metrics benchmark values.
     *
     * @var Values
     */
    protected $values;

    /**
     * Specifies the processing status of the benchmark. Success - If all fields in values property (impressions, clicks, conversions) have all non-null values. Failed - If all fields in values property have all null values. Partial - If some of the fields (impressions, clicks, or conversions) in values property have null values.
     */
    public function getBenchmarkStatus(): string
    {
        return $this->benchmarkStatus;
    }

    /**
     * Specifies the processing status of the benchmark. Success - If all fields in values property (impressions, clicks, conversions) have all non-null values. Failed - If all fields in values property have all null values. Partial - If some of the fields (impressions, clicks, or conversions) in values property have null values.
     */
    public function setBenchmarkStatus(string $benchmarkStatus): self
    {
        $this->initialized['benchmarkStatus'] = true;
        $this->benchmarkStatus = $benchmarkStatus;

        return $this;
    }

    /**
     * Metrics benchmark values.
     */
    public function getValues(): Values
    {
        return $this->values;
    }

    /**
     * Metrics benchmark values.
     */
    public function setValues(Values $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;

        return $this;
    }
}
