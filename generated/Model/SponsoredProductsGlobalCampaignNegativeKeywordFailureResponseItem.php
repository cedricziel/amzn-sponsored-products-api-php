<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsGlobalCampaignNegativeKeywordFailureResponseItem extends \ArrayObject
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
     * the index of the campaign in the array from the request body.
     *
     * @var int
     */
    protected $index;
    /**
     * A list of validation errors.
     *
     * @var list<SponsoredProductsCampaignNegativeKeywordMutationError>
     */
    protected $errors;

    /**
     * the index of the campaign in the array from the request body.
     */
    public function getIndex(): int
    {
        return $this->index;
    }

    /**
     * the index of the campaign in the array from the request body.
     */
    public function setIndex(int $index): self
    {
        $this->initialized['index'] = true;
        $this->index = $index;

        return $this;
    }

    /**
     * A list of validation errors.
     *
     * @return list<SponsoredProductsCampaignNegativeKeywordMutationError>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * A list of validation errors.
     *
     * @param list<SponsoredProductsCampaignNegativeKeywordMutationError> $errors
     */
    public function setErrors(array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }
}
