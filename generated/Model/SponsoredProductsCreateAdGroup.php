<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsCreateAdGroup extends \ArrayObject
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
     * The identifier of the campaign to which the keyword is associated.
     *
     * @var string
     */
    protected $campaignId;
    /**
     * The name of the ad group.
     *
     * @var string
     */
    protected $name;
    /**
     * Entity state for create or update operation.
     *
     * @var string
     */
    protected $state;
    /**
     * A bid value for use when no bid is specified for keywords in the ad group. For more information about bid constraints by marketplace, see [bid limits](https://advertising.amazon.com/API/docs/en-us/concepts/limits#bid-constraints-by-marketplace).
     *
     * @var float
     */
    protected $defaultBid;

    /**
     * The identifier of the campaign to which the keyword is associated.
     */
    public function getCampaignId(): string
    {
        return $this->campaignId;
    }

    /**
     * The identifier of the campaign to which the keyword is associated.
     */
    public function setCampaignId(string $campaignId): self
    {
        $this->initialized['campaignId'] = true;
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * The name of the ad group.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name of the ad group.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

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

    /**
     * A bid value for use when no bid is specified for keywords in the ad group. For more information about bid constraints by marketplace, see [bid limits](https://advertising.amazon.com/API/docs/en-us/concepts/limits#bid-constraints-by-marketplace).
     */
    public function getDefaultBid(): float
    {
        return $this->defaultBid;
    }

    /**
     * A bid value for use when no bid is specified for keywords in the ad group. For more information about bid constraints by marketplace, see [bid limits](https://advertising.amazon.com/API/docs/en-us/concepts/limits#bid-constraints-by-marketplace).
     */
    public function setDefaultBid(float $defaultBid): self
    {
        $this->initialized['defaultBid'] = true;
        $this->defaultBid = $defaultBid;

        return $this;
    }
}
