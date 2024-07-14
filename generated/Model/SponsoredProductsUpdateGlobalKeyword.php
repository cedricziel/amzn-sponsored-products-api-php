<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsUpdateGlobalKeyword extends \ArrayObject
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
     * The identifier of the keyword.
     *
     * @var string
     */
    protected $keywordId;
    /**
     * Name for the Keyword.
     *
     * @var string
     */
    protected $name;
    /**
     * @var SponsoredProductsCreateOrUpdateGlobalEntityState
     */
    protected $state;
    /**
     * @var SponsoredProductsGlobalBid
     */
    protected $bid;
    /**
     * @var SponsoredProductsGlobalKeywordText
     */
    protected $keywordText;

    /**
     * The identifier of the keyword.
     */
    public function getKeywordId(): string
    {
        return $this->keywordId;
    }

    /**
     * The identifier of the keyword.
     */
    public function setKeywordId(string $keywordId): self
    {
        $this->initialized['keywordId'] = true;
        $this->keywordId = $keywordId;

        return $this;
    }

    /**
     * Name for the Keyword.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name for the Keyword.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getState(): SponsoredProductsCreateOrUpdateGlobalEntityState
    {
        return $this->state;
    }

    public function setState(SponsoredProductsCreateOrUpdateGlobalEntityState $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

        return $this;
    }

    public function getBid(): SponsoredProductsGlobalBid
    {
        return $this->bid;
    }

    public function setBid(SponsoredProductsGlobalBid $bid): self
    {
        $this->initialized['bid'] = true;
        $this->bid = $bid;

        return $this;
    }

    public function getKeywordText(): SponsoredProductsGlobalKeywordText
    {
        return $this->keywordText;
    }

    public function setKeywordText(SponsoredProductsGlobalKeywordText $keywordText): self
    {
        $this->initialized['keywordText'] = true;
        $this->keywordText = $keywordText;

        return $this;
    }
}
