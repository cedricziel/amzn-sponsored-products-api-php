<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsDraftTargetingClauseSuccessResponseItem extends \ArrayObject
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
     * @var SponsoredProductsDraftTargetingClause
     */
    protected $targetingClause;
    /**
     * the draftTargetingClause ID.
     *
     * @var string
     */
    protected $targetId;
    /**
     * the index of the draftTargetingClause in the array from the request body.
     *
     * @var int
     */
    protected $index;

    public function getTargetingClause(): SponsoredProductsDraftTargetingClause
    {
        return $this->targetingClause;
    }

    public function setTargetingClause(SponsoredProductsDraftTargetingClause $targetingClause): self
    {
        $this->initialized['targetingClause'] = true;
        $this->targetingClause = $targetingClause;

        return $this;
    }

    /**
     * the draftTargetingClause ID.
     */
    public function getTargetId(): string
    {
        return $this->targetId;
    }

    /**
     * the draftTargetingClause ID.
     */
    public function setTargetId(string $targetId): self
    {
        $this->initialized['targetId'] = true;
        $this->targetId = $targetId;

        return $this;
    }

    /**
     * the index of the draftTargetingClause in the array from the request body.
     */
    public function getIndex(): int
    {
        return $this->index;
    }

    /**
     * the index of the draftTargetingClause in the array from the request body.
     */
    public function setIndex(int $index): self
    {
        $this->initialized['index'] = true;
        $this->index = $index;

        return $this;
    }
}
