<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class GlobalTargetingExpression extends \ArrayObject
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
     * The targeting expression value for each country.
     *
     * @var array<string, string>
     */
    protected $countryValues;
    /**
     * The bid value for each country.
     *
     * @var array<string, float>
     */
    protected $countryBids;
    /**
     * The targeting expression. The type property specifies the targeting option. Use CLOSE_MATCH to match your auto targeting ads closely to the specified value. Use LOOSE_MATCH to match your auto targeting ads broadly to the specified value. Use SUBSTITUTES to display your auto targeting ads along with substitutable products. Use COMPLEMENTS to display your auto targeting ads along with affiliated products. Use KEYWORD_BROAD_MATCH to broadly match your keyword targeting ads with search queries. Use KEYWORD_EXACT_MATCH to exactly match your keyword targeting ads with search queries. Use KEYWORD_PHRASE_MATCH to match your keyword targeting ads with search phrases. Use PAT_ASIN to target an ASIN that is the same as the ASIN expressed. Use PAT_CATEGORY to target the same category as the category expressed. Use PAT_CATEGORY_REFINEMENT to target all of the category refinements. These refinements allows users to specify a brand, price, rating, age range, genre and prime shipping eligibility.
     *
     * @var string
     */
    protected $type;

    /**
     * The targeting expression value for each country.
     *
     * @return array<string, string>
     */
    public function getCountryValues(): iterable
    {
        return $this->countryValues;
    }

    /**
     * The targeting expression value for each country.
     *
     * @param array<string, string> $countryValues
     */
    public function setCountryValues(iterable $countryValues): self
    {
        $this->initialized['countryValues'] = true;
        $this->countryValues = $countryValues;

        return $this;
    }

    /**
     * The bid value for each country.
     *
     * @return array<string, float>
     */
    public function getCountryBids(): iterable
    {
        return $this->countryBids;
    }

    /**
     * The bid value for each country.
     *
     * @param array<string, float> $countryBids
     */
    public function setCountryBids(iterable $countryBids): self
    {
        $this->initialized['countryBids'] = true;
        $this->countryBids = $countryBids;

        return $this;
    }

    /**
     * The targeting expression. The type property specifies the targeting option. Use CLOSE_MATCH to match your auto targeting ads closely to the specified value. Use LOOSE_MATCH to match your auto targeting ads broadly to the specified value. Use SUBSTITUTES to display your auto targeting ads along with substitutable products. Use COMPLEMENTS to display your auto targeting ads along with affiliated products. Use KEYWORD_BROAD_MATCH to broadly match your keyword targeting ads with search queries. Use KEYWORD_EXACT_MATCH to exactly match your keyword targeting ads with search queries. Use KEYWORD_PHRASE_MATCH to match your keyword targeting ads with search phrases. Use PAT_ASIN to target an ASIN that is the same as the ASIN expressed. Use PAT_CATEGORY to target the same category as the category expressed. Use PAT_CATEGORY_REFINEMENT to target all of the category refinements. These refinements allows users to specify a brand, price, rating, age range, genre and prime shipping eligibility.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The targeting expression. The type property specifies the targeting option. Use CLOSE_MATCH to match your auto targeting ads closely to the specified value. Use LOOSE_MATCH to match your auto targeting ads broadly to the specified value. Use SUBSTITUTES to display your auto targeting ads along with substitutable products. Use COMPLEMENTS to display your auto targeting ads along with affiliated products. Use KEYWORD_BROAD_MATCH to broadly match your keyword targeting ads with search queries. Use KEYWORD_EXACT_MATCH to exactly match your keyword targeting ads with search queries. Use KEYWORD_PHRASE_MATCH to match your keyword targeting ads with search phrases. Use PAT_ASIN to target an ASIN that is the same as the ASIN expressed. Use PAT_CATEGORY to target the same category as the category expressed. Use PAT_CATEGORY_REFINEMENT to target all of the category refinements. These refinements allows users to specify a brand, price, rating, age range, genre and prime shipping eligibility.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
