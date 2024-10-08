<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsTargetingExpressionPredicate extends \ArrayObject
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
     * The type of targeting expression. You can specify values for the following predicates:
     * | Predicate | Description |
     * | --- | --- |
     * | `QUERY_BROAD_REL_MATCHES` | Auto Targeting - cannot be manually created - corresponds to the `Loose match` target type in the UI, this will show your ad to shoppers who use search terms loosely related to your products.|
     * | `QUERY_HIGH_REL_MATCHES` | Auto Targeting - cannot be manually created - corresponds to the `Close match` target type in the UI, this will show your ad to shoppers who use search terms closely related to your products.|
     * | `ASIN_ACCESSORY_RELATED` | Auto Targeting - cannot be manually created - corresponds to the `Complements` target type in the UI, this will show your ad to shoppers who view the detail pages of products that complement your product.|
     * | `ASIN_SUBSTITUTE_RELATED` | Auto Targeting - cannot be manually created - corresponds to the `Substitutes` target type in the UI, this will show your ad to shoppers who use detail pages of products similar to yours.|
     * | `ASIN_CATEGORY_SAME_AS` | Target the category that is the same as the category expressed |
     * | `ASIN_BRAND_SAME_AS` | Target the brand that is the same as the brand expressed. |
     * | `ASIN_PRICE_LESS_THAN` | Target a price that is less than the price expressed. |
     * | `ASIN_PRICE_BETWEEN` | Target a price that is between the prices expressed. |
     * | `ASIN_PRICE_GREATER_THAN` | Target a price that is greater than the price expressed. |
     * | `ASIN_REVIEW_RATING_LESS_THAN` | Target a review rating less than the review rating that is expressed. |
     * | `ASIN_REVIEW_RATING_BETWEEN` | Target a review rating that is between the review ratings expressed. |
     * | `ASIN_REVIEW_RATING_GREATER_THAN` | Target a review rating that is greater than the review rating expressed. |
     * | `ASIN_SAME_AS` | Target an ASIN that is the same as the ASIN expressed. |
     * | `ASIN_IS_PRIME_SHIPPING_ELIGIBLE` | Target products that are Prime Shipping Eligible. This refinement can be applied at a category or brand level only. |
     * | `ASIN_AGE_RANGE_SAME_AS` | Target an age range that is in the expressed range. This refinement can be applied for toys and games categories only. |
     * | `ASIN_GENRE_SAME_AS` | Target products related to the expressed genre. This refinement can be applied for Books and eBooks categories only.   |
     * | `ASIN_EXPANDED_FROM` | Target products similar in performance to the ASIN expressed.   |
     * | `KEYWORD_GROUP_SAME_AS` | Target the keyword group that is the same as the keyword group expressed (Beta coming soon). |
     * | `OTHER` | Other Type.   |
     *
     * @var string
     */
    protected $type;
    /**
     * The expression value.
     *
     * @var string
     */
    protected $value;

    /**
     * The type of targeting expression. You can specify values for the following predicates:
     * | Predicate | Description |
     * | --- | --- |
     * | `QUERY_BROAD_REL_MATCHES` | Auto Targeting - cannot be manually created - corresponds to the `Loose match` target type in the UI, this will show your ad to shoppers who use search terms loosely related to your products.|
     * | `QUERY_HIGH_REL_MATCHES` | Auto Targeting - cannot be manually created - corresponds to the `Close match` target type in the UI, this will show your ad to shoppers who use search terms closely related to your products.|
     * | `ASIN_ACCESSORY_RELATED` | Auto Targeting - cannot be manually created - corresponds to the `Complements` target type in the UI, this will show your ad to shoppers who view the detail pages of products that complement your product.|
     * | `ASIN_SUBSTITUTE_RELATED` | Auto Targeting - cannot be manually created - corresponds to the `Substitutes` target type in the UI, this will show your ad to shoppers who use detail pages of products similar to yours.|
     * | `ASIN_CATEGORY_SAME_AS` | Target the category that is the same as the category expressed |
     * | `ASIN_BRAND_SAME_AS` | Target the brand that is the same as the brand expressed. |
     * | `ASIN_PRICE_LESS_THAN` | Target a price that is less than the price expressed. |
     * | `ASIN_PRICE_BETWEEN` | Target a price that is between the prices expressed. |
     * | `ASIN_PRICE_GREATER_THAN` | Target a price that is greater than the price expressed. |
     * | `ASIN_REVIEW_RATING_LESS_THAN` | Target a review rating less than the review rating that is expressed. |
     * | `ASIN_REVIEW_RATING_BETWEEN` | Target a review rating that is between the review ratings expressed. |
     * | `ASIN_REVIEW_RATING_GREATER_THAN` | Target a review rating that is greater than the review rating expressed. |
     * | `ASIN_SAME_AS` | Target an ASIN that is the same as the ASIN expressed. |
     * | `ASIN_IS_PRIME_SHIPPING_ELIGIBLE` | Target products that are Prime Shipping Eligible. This refinement can be applied at a category or brand level only. |
     * | `ASIN_AGE_RANGE_SAME_AS` | Target an age range that is in the expressed range. This refinement can be applied for toys and games categories only. |
     * | `ASIN_GENRE_SAME_AS` | Target products related to the expressed genre. This refinement can be applied for Books and eBooks categories only.   |
     * | `ASIN_EXPANDED_FROM` | Target products similar in performance to the ASIN expressed.   |
     * | `KEYWORD_GROUP_SAME_AS` | Target the keyword group that is the same as the keyword group expressed (Beta coming soon). |
     * | `OTHER` | Other Type.   |
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The type of targeting expression. You can specify values for the following predicates:
     * | Predicate | Description |
     * | --- | --- |
     * | `QUERY_BROAD_REL_MATCHES` | Auto Targeting - cannot be manually created - corresponds to the `Loose match` target type in the UI, this will show your ad to shoppers who use search terms loosely related to your products.|
     * | `QUERY_HIGH_REL_MATCHES` | Auto Targeting - cannot be manually created - corresponds to the `Close match` target type in the UI, this will show your ad to shoppers who use search terms closely related to your products.|
     * | `ASIN_ACCESSORY_RELATED` | Auto Targeting - cannot be manually created - corresponds to the `Complements` target type in the UI, this will show your ad to shoppers who view the detail pages of products that complement your product.|
     * | `ASIN_SUBSTITUTE_RELATED` | Auto Targeting - cannot be manually created - corresponds to the `Substitutes` target type in the UI, this will show your ad to shoppers who use detail pages of products similar to yours.|
     * | `ASIN_CATEGORY_SAME_AS` | Target the category that is the same as the category expressed |
     * | `ASIN_BRAND_SAME_AS` | Target the brand that is the same as the brand expressed. |
     * | `ASIN_PRICE_LESS_THAN` | Target a price that is less than the price expressed. |
     * | `ASIN_PRICE_BETWEEN` | Target a price that is between the prices expressed. |
     * | `ASIN_PRICE_GREATER_THAN` | Target a price that is greater than the price expressed. |
     * | `ASIN_REVIEW_RATING_LESS_THAN` | Target a review rating less than the review rating that is expressed. |
     * | `ASIN_REVIEW_RATING_BETWEEN` | Target a review rating that is between the review ratings expressed. |
     * | `ASIN_REVIEW_RATING_GREATER_THAN` | Target a review rating that is greater than the review rating expressed. |
     * | `ASIN_SAME_AS` | Target an ASIN that is the same as the ASIN expressed. |
     * | `ASIN_IS_PRIME_SHIPPING_ELIGIBLE` | Target products that are Prime Shipping Eligible. This refinement can be applied at a category or brand level only. |
     * | `ASIN_AGE_RANGE_SAME_AS` | Target an age range that is in the expressed range. This refinement can be applied for toys and games categories only. |
     * | `ASIN_GENRE_SAME_AS` | Target products related to the expressed genre. This refinement can be applied for Books and eBooks categories only.   |
     * | `ASIN_EXPANDED_FROM` | Target products similar in performance to the ASIN expressed.   |
     * | `KEYWORD_GROUP_SAME_AS` | Target the keyword group that is the same as the keyword group expressed (Beta coming soon). |
     * | `OTHER` | Other Type.   |
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * The expression value.
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * The expression value.
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
