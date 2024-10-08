<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class RankedTargetResponse extends \ArrayObject
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
     * A list of ranked keyword targets.
     *
     * @var list<RankedTargetResponseKeywordTargetListItem>
     */
    protected $keywordTargetList;

    /**
     * A list of ranked keyword targets.
     *
     * @return list<RankedTargetResponseKeywordTargetListItem>
     */
    public function getKeywordTargetList(): array
    {
        return $this->keywordTargetList;
    }

    /**
     * A list of ranked keyword targets.
     *
     * @param list<RankedTargetResponseKeywordTargetListItem> $keywordTargetList
     */
    public function setKeywordTargetList(array $keywordTargetList): self
    {
        $this->initialized['keywordTargetList'] = true;
        $this->keywordTargetList = $keywordTargetList;

        return $this;
    }
}
