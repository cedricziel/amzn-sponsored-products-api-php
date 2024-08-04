<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsDeleteTargetRequest extends \ArrayObject
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
     * Entity object identifier.
     *
     * @var string
     */
    protected $targetPromotionGroupId;
    /**
     * Entity object identifier.
     *
     * @var string
     */
    protected $targetId;
    /**
     * Entity object identifier.
     *
     * @var string
     */
    protected $manualTargetingAdGroupId;
    /**
     * Entity object identifier.
     *
     * @var string
     */
    protected $autoTargetingCampaignAdGroupId;

    /**
     * Entity object identifier.
     */
    public function getTargetPromotionGroupId(): string
    {
        return $this->targetPromotionGroupId;
    }

    /**
     * Entity object identifier.
     */
    public function setTargetPromotionGroupId(string $targetPromotionGroupId): self
    {
        $this->initialized['targetPromotionGroupId'] = true;
        $this->targetPromotionGroupId = $targetPromotionGroupId;

        return $this;
    }

    /**
     * Entity object identifier.
     */
    public function getTargetId(): string
    {
        return $this->targetId;
    }

    /**
     * Entity object identifier.
     */
    public function setTargetId(string $targetId): self
    {
        $this->initialized['targetId'] = true;
        $this->targetId = $targetId;

        return $this;
    }

    /**
     * Entity object identifier.
     */
    public function getManualTargetingAdGroupId(): string
    {
        return $this->manualTargetingAdGroupId;
    }

    /**
     * Entity object identifier.
     */
    public function setManualTargetingAdGroupId(string $manualTargetingAdGroupId): self
    {
        $this->initialized['manualTargetingAdGroupId'] = true;
        $this->manualTargetingAdGroupId = $manualTargetingAdGroupId;

        return $this;
    }

    /**
     * Entity object identifier.
     */
    public function getAutoTargetingCampaignAdGroupId(): string
    {
        return $this->autoTargetingCampaignAdGroupId;
    }

    /**
     * Entity object identifier.
     */
    public function setAutoTargetingCampaignAdGroupId(string $autoTargetingCampaignAdGroupId): self
    {
        $this->initialized['autoTargetingCampaignAdGroupId'] = true;
        $this->autoTargetingCampaignAdGroupId = $autoTargetingCampaignAdGroupId;

        return $this;
    }
}
