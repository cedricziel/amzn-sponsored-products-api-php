<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsCreateTargetPromotionGroupTargetsSuccessResponseItem extends \ArrayObject
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
     * The expression type of the target that was requested to be created.
     *
     * @var string
     */
    protected $expressionType;
    /**
     * Target created in the target promotion group.
     *
     * @var SponsoredProductsCreateTarget
     */
    protected $targetDetails;
    /**
     * The target that was requested to be created.
     *
     * @var string
     */
    protected $target;

    /**
     * The expression type of the target that was requested to be created.
     */
    public function getExpressionType(): string
    {
        return $this->expressionType;
    }

    /**
     * The expression type of the target that was requested to be created.
     */
    public function setExpressionType(string $expressionType): self
    {
        $this->initialized['expressionType'] = true;
        $this->expressionType = $expressionType;

        return $this;
    }

    /**
     * Target created in the target promotion group.
     */
    public function getTargetDetails(): SponsoredProductsCreateTarget
    {
        return $this->targetDetails;
    }

    /**
     * Target created in the target promotion group.
     */
    public function setTargetDetails(SponsoredProductsCreateTarget $targetDetails): self
    {
        $this->initialized['targetDetails'] = true;
        $this->targetDetails = $targetDetails;

        return $this;
    }

    /**
     * The target that was requested to be created.
     */
    public function getTarget(): string
    {
        return $this->target;
    }

    /**
     * The target that was requested to be created.
     */
    public function setTarget(string $target): self
    {
        $this->initialized['target'] = true;
        $this->target = $target;

        return $this;
    }
}
