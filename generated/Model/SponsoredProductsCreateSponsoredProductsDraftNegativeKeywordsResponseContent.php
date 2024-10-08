<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsCreateSponsoredProductsDraftNegativeKeywordsResponseContent extends \ArrayObject
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
     * @var SponsoredProductsBulkDraftNegativeKeywordOperationResponse
     */
    protected $negativeKeywords;

    public function getNegativeKeywords(): SponsoredProductsBulkDraftNegativeKeywordOperationResponse
    {
        return $this->negativeKeywords;
    }

    public function setNegativeKeywords(SponsoredProductsBulkDraftNegativeKeywordOperationResponse $negativeKeywords): self
    {
        $this->initialized['negativeKeywords'] = true;
        $this->negativeKeywords = $negativeKeywords;

        return $this;
    }
}
