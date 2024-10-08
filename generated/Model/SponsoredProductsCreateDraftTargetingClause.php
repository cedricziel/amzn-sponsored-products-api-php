<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsCreateDraftTargetingClause extends \ArrayObject
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
     * The targeting expression.
     *
     * @var list<SponsoredProductsTargetingExpressionPredicateWithoutOther>
     */
    protected $expression;
    /**
     * The identifier of the campaign to which this target is associated.
     *
     * @var string
     */
    protected $campaignId;
    /**
     * @var string
     */
    protected $expressionType;
    /**
     * The current resource state.
     * | State | Description |
     * | --- | --- |
     * | `ENABLED` | Enabled State |
     * | `PAUSED` | Paused State |
     * | `ARCHIVED` | ARCHIVED State |
     * | `ENABLING` | State for Draft Entity Only |
     * | `USER_DELETED` | State for Draft Entity Only |
     * | `OTHER` | Read Only |.
     *
     * @var string
     */
    protected $state;
    /**
     * The bid for ads sourced using the target. Targets that do not have bid values in listDraftTargetingClauses will inherit the defaultBid from the adGroup level. For more information about bid constraints by marketplace, see [bid limits](https://advertising.amazon.com/API/docs/en-us/concepts/limits#bid-constraints-by-marketplace).
     *
     * @var float
     */
    protected $bid;
    /**
     * The identifier of the ad group to which this target is associated.
     *
     * @var string
     */
    protected $adGroupId;

    /**
     * The targeting expression.
     *
     * @return list<SponsoredProductsTargetingExpressionPredicateWithoutOther>
     */
    public function getExpression(): array
    {
        return $this->expression;
    }

    /**
     * The targeting expression.
     *
     * @param list<SponsoredProductsTargetingExpressionPredicateWithoutOther> $expression
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

    public function getExpressionType(): string
    {
        return $this->expressionType;
    }

    public function setExpressionType(string $expressionType): self
    {
        $this->initialized['expressionType'] = true;
        $this->expressionType = $expressionType;

        return $this;
    }

    /**
     * The current resource state.
     * | State | Description |
     * | --- | --- |
     * | `ENABLED` | Enabled State |
     * | `PAUSED` | Paused State |
     * | `ARCHIVED` | ARCHIVED State |
     * | `ENABLING` | State for Draft Entity Only |
     * | `USER_DELETED` | State for Draft Entity Only |
     * | `OTHER` | Read Only |.
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * The current resource state.
     * | State | Description |
     * | --- | --- |
     * | `ENABLED` | Enabled State |
     * | `PAUSED` | Paused State |
     * | `ARCHIVED` | ARCHIVED State |
     * | `ENABLING` | State for Draft Entity Only |
     * | `USER_DELETED` | State for Draft Entity Only |
     * | `OTHER` | Read Only |.
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

        return $this;
    }

    /**
     * The bid for ads sourced using the target. Targets that do not have bid values in listDraftTargetingClauses will inherit the defaultBid from the adGroup level. For more information about bid constraints by marketplace, see [bid limits](https://advertising.amazon.com/API/docs/en-us/concepts/limits#bid-constraints-by-marketplace).
     */
    public function getBid(): float
    {
        return $this->bid;
    }

    /**
     * The bid for ads sourced using the target. Targets that do not have bid values in listDraftTargetingClauses will inherit the defaultBid from the adGroup level. For more information about bid constraints by marketplace, see [bid limits](https://advertising.amazon.com/API/docs/en-us/concepts/limits#bid-constraints-by-marketplace).
     */
    public function setBid(float $bid): self
    {
        $this->initialized['bid'] = true;
        $this->bid = $bid;

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
