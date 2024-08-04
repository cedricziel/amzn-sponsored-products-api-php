<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsCreateDraftNegativeTargetingClause extends \ArrayObject
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
     * The DraftNegativeTargeting expression.
     *
     * @var list<SponsoredProductsCreateOrUpdateNegativeTargetingExpressionPredicate>
     */
    protected $expression;
    /**
     * The identifier of the campaign to which this target is associated.
     *
     * @var string
     */
    protected $campaignId;
    /**
     * The identifier of the ad group to which this target is associated.
     *
     * @var string
     */
    protected $adGroupId;

    /**
     * The DraftNegativeTargeting expression.
     *
     * @return list<SponsoredProductsCreateOrUpdateNegativeTargetingExpressionPredicate>
     */
    public function getExpression(): array
    {
        return $this->expression;
    }

    /**
     * The DraftNegativeTargeting expression.
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
