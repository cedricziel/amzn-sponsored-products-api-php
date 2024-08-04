<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class CategoryRecommendationsWithAsinCounts extends \ArrayObject
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
     * List of category recommendations.
     *
     * @var list<CategoryItemWithAsinCounts>
     */
    protected $categories;

    /**
     * List of category recommendations.
     *
     * @return list<CategoryItemWithAsinCounts>
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * List of category recommendations.
     *
     * @param list<CategoryItemWithAsinCounts> $categories
     */
    public function setCategories(array $categories): self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;

        return $this;
    }
}
