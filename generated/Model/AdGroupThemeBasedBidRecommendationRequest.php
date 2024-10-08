<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class AdGroupThemeBasedBidRecommendationRequest extends \ArrayObject
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
     * The list of targeting expressions. Maximum of 100 per request, use pagination for more if needed.
     *
     * @var list<TargetingExpression>
     */
    protected $targetingExpressions;
    /**
     * The campaign identifier.
     *
     * @var string
     */
    protected $campaignId;
    /**
     * The bid recommendation type.
     *
     * @var string
     */
    protected $recommendationType;
    /**
     * The ad group identifier.
     *
     * @var string
     */
    protected $adGroupId;

    /**
     * The list of targeting expressions. Maximum of 100 per request, use pagination for more if needed.
     *
     * @return list<TargetingExpression>
     */
    public function getTargetingExpressions(): array
    {
        return $this->targetingExpressions;
    }

    /**
     * The list of targeting expressions. Maximum of 100 per request, use pagination for more if needed.
     *
     * @param list<TargetingExpression> $targetingExpressions
     */
    public function setTargetingExpressions(array $targetingExpressions): self
    {
        $this->initialized['targetingExpressions'] = true;
        $this->targetingExpressions = $targetingExpressions;

        return $this;
    }

    /**
     * The campaign identifier.
     */
    public function getCampaignId(): string
    {
        return $this->campaignId;
    }

    /**
     * The campaign identifier.
     */
    public function setCampaignId(string $campaignId): self
    {
        $this->initialized['campaignId'] = true;
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * The bid recommendation type.
     */
    public function getRecommendationType(): string
    {
        return $this->recommendationType;
    }

    /**
     * The bid recommendation type.
     */
    public function setRecommendationType(string $recommendationType): self
    {
        $this->initialized['recommendationType'] = true;
        $this->recommendationType = $recommendationType;

        return $this;
    }

    /**
     * The ad group identifier.
     */
    public function getAdGroupId(): string
    {
        return $this->adGroupId;
    }

    /**
     * The ad group identifier.
     */
    public function setAdGroupId(string $adGroupId): self
    {
        $this->initialized['adGroupId'] = true;
        $this->adGroupId = $adGroupId;

        return $this;
    }
}
