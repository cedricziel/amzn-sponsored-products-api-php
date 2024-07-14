<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Model;

class SponsoredProductsCreateSponsoredProductsDraftNegativeKeywordsRequestContent extends \ArrayObject
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
     * An array of negativeKeywords.
     *
     * @var list<SponsoredProductsCreateDraftNegativeKeyword>
     */
    protected $negativeKeywords;

    /**
     * An array of negativeKeywords.
     *
     * @return list<SponsoredProductsCreateDraftNegativeKeyword>
     */
    public function getNegativeKeywords(): array
    {
        return $this->negativeKeywords;
    }

    /**
     * An array of negativeKeywords.
     *
     * @param list<SponsoredProductsCreateDraftNegativeKeyword> $negativeKeywords
     */
    public function setNegativeKeywords(array $negativeKeywords): self
    {
        $this->initialized['negativeKeywords'] = true;
        $this->negativeKeywords = $negativeKeywords;

        return $this;
    }
}
