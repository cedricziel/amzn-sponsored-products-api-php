<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsCreateGlobalNegativeTargetingClause extends \ArrayObject
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
     * @var list<SponsoredProductsGlobalTargetingExpressionPredicate>
     */
    protected $expression;
    /**
     * The identifier of the campaign to which this target is associated.
     *
     * @var string
     */
    protected $campaignId;
    /**
     * Name for the negative targeting clause.
     *
     * @var string
     */
    protected $name;
    /**
     * @var SponsoredProductsCreateOrUpdateGlobalEntityState
     */
    protected $state;
    /**
     * The identifier of the ad group to which this target is associated.
     *
     * @var string
     */
    protected $adGroupId;

    /**
     * The NegativeTargeting expression.
     *
     * @return list<SponsoredProductsGlobalTargetingExpressionPredicate>
     */
    public function getExpression(): array
    {
        return $this->expression;
    }

    /**
     * The NegativeTargeting expression.
     *
     * @param list<SponsoredProductsGlobalTargetingExpressionPredicate> $expression
     */
    public function setExpression(array $expression): self
    {
        $this->initialized['expression'] = true;
        $this->expression = $expression;

        return $this;
    }

    /**
     * The identifier of the campaign to which this target is associated.
     */
    public function getCampaignId(): string
    {
        return $this->campaignId;
    }

    /**
     * The identifier of the campaign to which this target is associated.
     */
    public function setCampaignId(string $campaignId): self
    {
        $this->initialized['campaignId'] = true;
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * Name for the negative targeting clause.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name for the negative targeting clause.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getState(): SponsoredProductsCreateOrUpdateGlobalEntityState
    {
        return $this->state;
    }

    public function setState(SponsoredProductsCreateOrUpdateGlobalEntityState $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

        return $this;
    }

    /**
     * The identifier of the ad group to which this target is associated.
     */
    public function getAdGroupId(): string
    {
        return $this->adGroupId;
    }

    /**
     * The identifier of the ad group to which this target is associated.
     */
    public function setAdGroupId(string $adGroupId): self
    {
        $this->initialized['adGroupId'] = true;
        $this->adGroupId = $adGroupId;

        return $this;
    }
}
