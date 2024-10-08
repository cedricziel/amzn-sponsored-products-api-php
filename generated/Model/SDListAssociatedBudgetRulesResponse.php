<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SDListAssociatedBudgetRulesResponse extends \ArrayObject
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
     * A list of associated budget rules.
     *
     * @var list<SDBudgetRule>
     */
    protected $associatedRules;

    /**
     * A list of associated budget rules.
     *
     * @return list<SDBudgetRule>
     */
    public function getAssociatedRules(): array
    {
        return $this->associatedRules;
    }

    /**
     * A list of associated budget rules.
     *
     * @param list<SDBudgetRule> $associatedRules
     */
    public function setAssociatedRules(array $associatedRules): self
    {
        $this->initialized['associatedRules'] = true;
        $this->associatedRules = $associatedRules;

        return $this;
    }
}
