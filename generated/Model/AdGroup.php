<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class AdGroup extends \ArrayObject
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
     * The list of targeting expressions. Maximum of 100 per request.
     *
     * @var list<TargetingExpression>
     */
    protected $targetingExpressions;
    /**
     * The list of ad ASINs in the ad group.
     *
     * @var list<string>
     */
    protected $asins;
    /**
     * The ad group identifier.
     *
     * @var string
     */
    protected $adGroupId;

    /**
     * The list of targeting expressions. Maximum of 100 per request.
     *
     * @return list<TargetingExpression>
     */
    public function getTargetingExpressions(): array
    {
        return $this->targetingExpressions;
    }

    /**
     * The list of targeting expressions. Maximum of 100 per request.
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
     * The list of ad ASINs in the ad group.
     *
     * @return list<string>
     */
    public function getAsins(): array
    {
        return $this->asins;
    }

    /**
     * The list of ad ASINs in the ad group.
     *
     * @param list<string> $asins
     */
    public function setAsins(array $asins): self
    {
        $this->initialized['asins'] = true;
        $this->asins = $asins;

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
