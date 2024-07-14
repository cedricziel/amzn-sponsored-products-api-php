<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsDeleteSponsoredProductsKeywordsResponseContent extends \ArrayObject
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
     * @var SponsoredProductsBulkKeywordOperationResponse
     */
    protected $keywords;

    public function getKeywords(): SponsoredProductsBulkKeywordOperationResponse
    {
        return $this->keywords;
    }

    public function setKeywords(SponsoredProductsBulkKeywordOperationResponse $keywords): self
    {
        $this->initialized['keywords'] = true;
        $this->keywords = $keywords;

        return $this;
    }
}
