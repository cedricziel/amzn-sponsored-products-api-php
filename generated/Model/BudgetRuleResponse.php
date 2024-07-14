<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class BudgetRuleResponse extends \ArrayObject
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
     * An enumerated success or error code for machine use.
     *
     * @var string
     */
    protected $code;
    /**
     * A human-readable description of the error, if unsuccessful.
     *
     * @var string
     */
    protected $details;
    /**
     * The rule identifier.
     *
     * @var string
     */
    protected $ruleId;
    /**
     * @var list<string>
     */
    protected $associatedCampaignIds;

    /**
     * An enumerated success or error code for machine use.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * An enumerated success or error code for machine use.
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * A human-readable description of the error, if unsuccessful.
     */
    public function getDetails(): string
    {
        return $this->details;
    }

    /**
     * A human-readable description of the error, if unsuccessful.
     */
    public function setDetails(string $details): self
    {
        $this->initialized['details'] = true;
        $this->details = $details;

        return $this;
    }

    /**
     * The rule identifier.
     */
    public function getRuleId(): string
    {
        return $this->ruleId;
    }

    /**
     * The rule identifier.
     */
    public function setRuleId(string $ruleId): self
    {
        $this->initialized['ruleId'] = true;
        $this->ruleId = $ruleId;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getAssociatedCampaignIds(): array
    {
        return $this->associatedCampaignIds;
    }

    /**
     * @param list<string> $associatedCampaignIds
     */
    public function setAssociatedCampaignIds(array $associatedCampaignIds): self
    {
        $this->initialized['associatedCampaignIds'] = true;
        $this->associatedCampaignIds = $associatedCampaignIds;

        return $this;
    }
}
