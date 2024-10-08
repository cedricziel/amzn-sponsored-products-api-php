<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsGlobalAdGroup extends \ArrayObject
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
     * @var list<string>
     */
    protected $applicableMarketplaces;
    /**
     * The name of the ad group.
     *
     * @var string
     */
    protected $name;
    /**
     * @var SponsoredProductsGlobalEntityState
     */
    protected $state;
    /**
     * The identifier of the keyword.
     *
     * @var string
     */
    protected $adGroupId;
    /**
     * @var SponsoredProductsGlobalBid
     */
    protected $defaultBid;
    /**
     * @var SponsoredProductsGlobalAdGroupExtendedData
     */
    protected $extendedData;

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
     * @return list<string>
     */
    public function getApplicableMarketplaces(): array
    {
        return $this->applicableMarketplaces;
    }

    /**
     * @param list<string> $applicableMarketplaces
     */
    public function setApplicableMarketplaces(array $applicableMarketplaces): self
    {
        $this->initialized['applicableMarketplaces'] = true;
        $this->applicableMarketplaces = $applicableMarketplaces;

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

    public function getState(): SponsoredProductsGlobalEntityState
    {
        return $this->state;
    }

    public function setState(SponsoredProductsGlobalEntityState $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

        return $this;
    }

    /**
     * The identifier of the keyword.
     */
    public function getAdGroupId(): string
    {
        return $this->adGroupId;
    }

    /**
     * The identifier of the keyword.
     */
    public function setAdGroupId(string $adGroupId): self
    {
        $this->initialized['adGroupId'] = true;
        $this->adGroupId = $adGroupId;

        return $this;
    }

    public function getDefaultBid(): SponsoredProductsGlobalBid
    {
        return $this->defaultBid;
    }

    public function setDefaultBid(SponsoredProductsGlobalBid $defaultBid): self
    {
        $this->initialized['defaultBid'] = true;
        $this->defaultBid = $defaultBid;

        return $this;
    }

    public function getExtendedData(): SponsoredProductsGlobalAdGroupExtendedData
    {
        return $this->extendedData;
    }

    public function setExtendedData(SponsoredProductsGlobalAdGroupExtendedData $extendedData): self
    {
        $this->initialized['extendedData'] = true;
        $this->extendedData = $extendedData;

        return $this;
    }
}
