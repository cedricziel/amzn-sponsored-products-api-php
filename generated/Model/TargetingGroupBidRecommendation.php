<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class TargetingGroupBidRecommendation extends \ArrayObject
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
     * The suggested bid value associated with this targeting.
     *
     * @var float
     */
    protected $suggestedBid;
    /**
     * The target identifier.
     *
     * @var string
     */
    protected $targetId;
    /**
     * The type of targeting group expression.
     * | Value | Description |
     * | --- | --- |
     * | `LOOSE_MATCH` | This will show your ad to shoppers who use search terms loosely related to your products.|
     * | `CLOSE_MATCH` | This will show your ad to shoppers who use search terms closely related to your products.|
     * | `COMPLEMENTS` | This will show your ad to shoppers who view the detail pages of products that complement your product.|
     * | `SUBSTITUTES` | This will show your ad to shoppers who use detail pages of products similar to yours.|.
     *
     * @var string
     */
    protected $targetingGroupExpression;
    /**
     * Type of suggested action.
     *
     * @var string
     */
    protected $action;
    /**
     * The ad group identifier.
     *
     * @var string
     */
    protected $adGroupId;

    /**
     * The suggested bid value associated with this targeting.
     */
    public function getSuggestedBid(): float
    {
        return $this->suggestedBid;
    }

    /**
     * The suggested bid value associated with this targeting.
     */
    public function setSuggestedBid(float $suggestedBid): self
    {
        $this->initialized['suggestedBid'] = true;
        $this->suggestedBid = $suggestedBid;

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
     * The type of targeting group expression.
     * | Value | Description |
     * | --- | --- |
     * | `LOOSE_MATCH` | This will show your ad to shoppers who use search terms loosely related to your products.|
     * | `CLOSE_MATCH` | This will show your ad to shoppers who use search terms closely related to your products.|
     * | `COMPLEMENTS` | This will show your ad to shoppers who view the detail pages of products that complement your product.|
     * | `SUBSTITUTES` | This will show your ad to shoppers who use detail pages of products similar to yours.|.
     */
    public function getTargetingGroupExpression(): string
    {
        return $this->targetingGroupExpression;
    }

    /**
     * The type of targeting group expression.
     * | Value | Description |
     * | --- | --- |
     * | `LOOSE_MATCH` | This will show your ad to shoppers who use search terms loosely related to your products.|
     * | `CLOSE_MATCH` | This will show your ad to shoppers who use search terms closely related to your products.|
     * | `COMPLEMENTS` | This will show your ad to shoppers who view the detail pages of products that complement your product.|
     * | `SUBSTITUTES` | This will show your ad to shoppers who use detail pages of products similar to yours.|.
     */
    public function setTargetingGroupExpression(string $targetingGroupExpression): self
    {
        $this->initialized['targetingGroupExpression'] = true;
        $this->targetingGroupExpression = $targetingGroupExpression;

        return $this;
    }

    /**
     * Type of suggested action.
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * Type of suggested action.
     */
    public function setAction(string $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;

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
