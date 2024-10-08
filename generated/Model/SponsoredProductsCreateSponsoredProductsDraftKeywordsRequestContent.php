<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsCreateSponsoredProductsDraftKeywordsRequestContent extends \ArrayObject
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
     * An array of draft keywords.
     *
     * @var list<SponsoredProductsCreateDraftKeyword>
     */
    protected $keywords;

    /**
     * An array of draft keywords.
     *
     * @return list<SponsoredProductsCreateDraftKeyword>
     */
    public function getKeywords(): array
    {
        return $this->keywords;
    }

    /**
     * An array of draft keywords.
     *
     * @param list<SponsoredProductsCreateDraftKeyword> $keywords
     */
    public function setKeywords(array $keywords): self
    {
        $this->initialized['keywords'] = true;
        $this->keywords = $keywords;

        return $this;
    }
}
