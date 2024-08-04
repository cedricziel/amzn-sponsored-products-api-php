<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class PerformanceMeasureCondition extends \ArrayObject
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
     * The advertising performance metric.
     *
     * @var string
     */
    protected $metricName;
    /**
     * The comparison operator.
     *
     * @var string
     */
    protected $comparisonOperator;
    /**
     * The performance threshold value.
     *
     * @var float
     */
    protected $threshold;

    /**
     * The advertising performance metric.
     */
    public function getMetricName(): string
    {
        return $this->metricName;
    }

    /**
     * The advertising performance metric.
     */
    public function setMetricName(string $metricName): self
    {
        $this->initialized['metricName'] = true;
        $this->metricName = $metricName;

        return $this;
    }

    /**
     * The comparison operator.
     */
    public function getComparisonOperator(): string
    {
        return $this->comparisonOperator;
    }

    /**
     * The comparison operator.
     */
    public function setComparisonOperator(string $comparisonOperator): self
    {
        $this->initialized['comparisonOperator'] = true;
        $this->comparisonOperator = $comparisonOperator;

        return $this;
    }

    /**
     * The performance threshold value.
     */
    public function getThreshold(): float
    {
        return $this->threshold;
    }

    /**
     * The performance threshold value.
     */
    public function setThreshold(float $threshold): self
    {
        $this->initialized['threshold'] = true;
        $this->threshold = $threshold;

        return $this;
    }
}
