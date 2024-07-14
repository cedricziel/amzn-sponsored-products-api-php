<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsCreateSponsoredProductsGlobalKeywordsRequestContent extends \ArrayObject
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
     * An array of keywords.
     *
     * @var list<SponsoredProductsCreateGlobalKeyword>
     */
    protected $keywords;

    /**
     * An array of keywords.
     *
     * @return list<SponsoredProductsCreateGlobalKeyword>
     */
    public function getKeywords(): array
    {
        return $this->keywords;
    }

    /**
     * An array of keywords.
     *
     * @param list<SponsoredProductsCreateGlobalKeyword> $keywords
     */
    public function setKeywords(array $keywords): self
    {
        $this->initialized['keywords'] = true;
        $this->keywords = $keywords;

        return $this;
    }
}
