<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsUpdateCampaignNegativeTargetingClause extends \ArrayObject
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
     * The NegativeTargeting expression.
     *
     * @var list<SponsoredProductsCreateOrUpdateNegativeTargetingExpressionPredicate>
     */
    protected $expression;
    /**
     * The target identifier.
     *
     * @var string
     */
    protected $targetId;
    /**
     * Entity state for create or update operation.
     *
     * @var string
     */
    protected $state;

    /**
     * The NegativeTargeting expression.
     *
     * @return list<SponsoredProductsCreateOrUpdateNegativeTargetingExpressionPredicate>
     */
    public function getExpression(): array
    {
        return $this->expression;
    }

    /**
     * The NegativeTargeting expression.
     *
     * @param list<SponsoredProductsCreateOrUpdateNegativeTargetingExpressionPredicate> $expression
     */
    public function setExpression(array $expression): self
    {
        $this->initialized['expression'] = true;
        $this->expression = $expression;

        return $this;
    }

    /**
     * The target identifier.
     */
    public function getTargetId(): string
    {
        return $this->targetId;
    }

    /**
     * The target identifier.
     */
    public function setTargetId(string $targetId): self
    {
        $this->initialized['targetId'] = true;
        $this->targetId = $targetId;

        return $this;
    }

    /**
     * Entity state for create or update operation.
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * Entity state for create or update operation.
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

        return $this;
    }
}
