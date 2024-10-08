<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsCreateSponsoredProductsNegativeKeywordsRequestContent extends \ArrayObject
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
     * @var list<SponsoredProductsCreateNegativeKeyword>
     */
    protected $negativeKeywords;

    /**
     * An array of negativeKeywords.
     *
     * @return list<SponsoredProductsCreateNegativeKeyword>
     */
    public function getNegativeKeywords(): array
    {
        return $this->negativeKeywords;
    }

    /**
     * An array of negativeKeywords.
     *
     * @param list<SponsoredProductsCreateNegativeKeyword> $negativeKeywords
     */
    public function setNegativeKeywords(array $negativeKeywords): self
    {
        $this->initialized['negativeKeywords'] = true;
        $this->negativeKeywords = $negativeKeywords;

        return $this;
    }
}
