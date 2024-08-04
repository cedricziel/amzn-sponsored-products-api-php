<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsGlobalKeywordSuccessResponseItem extends \ArrayObject
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
     * the keyword ID.
     *
     * @var string
     */
    protected $keywordId;
    /**
     * the index of the keyword in the array from the request body.
     *
     * @var int
     */
    protected $index;
    /**
     * @var SponsoredProductsGlobalKeyword
     */
    protected $keyword;

    /**
     * the keyword ID.
     */
    public function getKeywordId(): string
    {
        return $this->keywordId;
    }

    /**
     * the keyword ID.
     */
    public function setKeywordId(string $keywordId): self
    {
        $this->initialized['keywordId'] = true;
        $this->keywordId = $keywordId;

        return $this;
    }

    /**
     * the index of the keyword in the array from the request body.
     */
    public function getIndex(): int
    {
        return $this->index;
    }

    /**
     * the index of the keyword in the array from the request body.
     */
    public function setIndex(int $index): self
    {
        $this->initialized['index'] = true;
        $this->index = $index;

        return $this;
    }

    public function getKeyword(): SponsoredProductsGlobalKeyword
    {
        return $this->keyword;
    }

    public function setKeyword(SponsoredProductsGlobalKeyword $keyword): self
    {
        $this->initialized['keyword'] = true;
        $this->keyword = $keyword;

        return $this;
    }
}
