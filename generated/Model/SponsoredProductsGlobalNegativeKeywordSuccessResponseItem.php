<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsGlobalNegativeKeywordSuccessResponseItem extends \ArrayObject
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
     * the index of the negativeKeyword in the array from the request body.
     *
     * @var int
     */
    protected $index;
    /**
     * @var SponsoredProductsGlobalNegativeKeyword
     */
    protected $negativeKeyword;
    /**
     * the negativeKeyword ID.
     *
     * @var string
     */
    protected $negativeKeywordId;

    /**
     * the index of the negativeKeyword in the array from the request body.
     */
    public function getIndex(): int
    {
        return $this->index;
    }

    /**
     * the index of the negativeKeyword in the array from the request body.
     */
    public function setIndex(int $index): self
    {
        $this->initialized['index'] = true;
        $this->index = $index;

        return $this;
    }

    public function getNegativeKeyword(): SponsoredProductsGlobalNegativeKeyword
    {
        return $this->negativeKeyword;
    }

    public function setNegativeKeyword(SponsoredProductsGlobalNegativeKeyword $negativeKeyword): self
    {
        $this->initialized['negativeKeyword'] = true;
        $this->negativeKeyword = $negativeKeyword;

        return $this;
    }

    /**
     * the negativeKeyword ID.
     */
    public function getNegativeKeywordId(): string
    {
        return $this->negativeKeywordId;
    }

    /**
     * the negativeKeyword ID.
     */
    public function setNegativeKeywordId(string $negativeKeywordId): self
    {
        $this->initialized['negativeKeywordId'] = true;
        $this->negativeKeywordId = $negativeKeywordId;

        return $this;
    }
}
