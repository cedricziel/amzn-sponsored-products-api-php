<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsDeleteSponsoredProductsGlobalKeywordsResponseContent extends \ArrayObject
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
     * @var SponsoredProductsBulkGlobalKeywordOperationResponse
     */
    protected $keywords;

    public function getKeywords(): SponsoredProductsBulkGlobalKeywordOperationResponse
    {
        return $this->keywords;
    }

    public function setKeywords(SponsoredProductsBulkGlobalKeywordOperationResponse $keywords): self
    {
        $this->initialized['keywords'] = true;
        $this->keywords = $keywords;

        return $this;
    }
}
