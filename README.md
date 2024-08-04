# amzn-sponsored-products-api-php

An API client for the Amazon Sponsored Products API.

```shell
composer require cedricziel/amznsponsoredproductsapiphp
```

## Docs

### General

Instantiate a client, configure your secrets and continue to use:

```php
use CedricZiel\AmznSponsoredProductsApiPHP\Endpoint;
use CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsListSponsoredProductsCampaignsRequestContent;
use CedricZiel\AmznSponsoredProductsApiPHP\Header;
use CedricZiel\AmznSponsoredProductsApiPHP\SponsoredProductsApiClient;

// You need to obtain a token via the Amazon LwA workflow
$accessToken = '...';
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);

// execute the endpoint of choice, see below ...
$body = new SponsoredProductsListSponsoredProductsCampaignsRequestContent();
$res = $client->listSponsoredProductsCampaigns($body, [
    Header::AmazonAdvertisingApiClientId->value => '...',
    Header::AmazonAdvertisingApiScope->value => '...',
]);
```

### GetThemeBasedBidRecommendationForAdGroup_v1 - post /sp/targets/bid/recommendations

Get bid recommendations for ad groups
This API is currently available at marketplaces where SP is available. The API supports keyword, auto and product targets. The API will return a 422 response when an unsupported marketplace or target is provided. <h1> Version 4.0 </h1>  <h2> New Features </h2> Version 4.0 allows users to get theme-based bid recommendations for product targeting expressions, including PAT_ASIN, PAT_CATEGORY and PAT_CATEGORY_REFINEMENT. Version 4.0 supports keyword, auto and product targets in all marketplaces. Version 4.0 removes "impact metrics" when returning each bid suggestion. <br> Version 4.0 also allows users to get theme-based bid recommendations for keyword group targeting expressions with the type KEYWORD_GROUP. This new type is only available in US marketplace. <br>

**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->getThemeBasedBidRecommendationForAdGroupV1();
```

### getRankedKeywordRecommendation - post /sp/targets/keywords/recommendations

Get keyword recommendations
The <b> POST /sp/targets/keywords/recommendations </b> endpoint returns recommended keyword targets given either A) a list of ad ASINs or B) a campaign ID and ad group ID. Please use the recommendationType field to specify if you want to use option A or option B. This endpoint will also return recommended bids along with each recommendation keyword target.<br><br> <b> Ranking </b> <br> The keyword recommendations will be ranked in descending order of clicks or impressions, depending on the <b>sortDimension</b> field provided by the user. You may also input your own keyword targets to be ranked alongside the keyword recommendations by using the <b>targets</b> array. <br><br> <b> Localization </b> <br> Use the <b> locale </b> field to get keywords in your specified locale. Supported marketplace to locale mappings can be found at the <a href='https://advertising.amazon.com/API/docs/en-us/localization/#/Keyword%20Localization'>POST /keywords/localize</a> endpoint. <h1> Version 5.0 </h1>  <h2> New Features </h2> Version 5.0 utilizes the new theme-based bid recommendations, which can be retrieved at the endpoint <b>/sp/targets/bid/recommendations</b>, to return improved bid recommendations for each keyword. Theme-based bid recommendations provide \\\"themes\\\" and \\\"impact metrics\\\" along with each bid suggestion to help you choose the right bid for your keyword target.<br><br><b>Themes</b><br> We now may return multiple bid suggestions for each keyword target. Each suggestion will have a theme to express the business objective of the bid. Available themes are: <ul> <li> CONVERSION_OPPORTUNITIES - The default theme which aims to maximize number of conversions. </li> <li> SPECIAL_DAYS - A theme available during high sales events such as Prime Day, to anticipate an increase in sales and competition.</li></ul><b>Impact Metrics</b><br>We have added impact metrics which provide insight on the number of clicks and conversions you will receive for targeting a keyword at a certain bid. <br><br><b>Bidding Strategy</b><br> You may now specify your bidding strategy in the KEYWORDS_BY_ASINS request to get bid suggestions tailored to your bidding strategy. For KEYWORDS_BY_ADGROUP requests, you will not specify a bidding strategy, because the bidding strategy of the ad group is used. The three bidding strategies are: <ul> <li> LEGACY_FOR_SALES - Dynamic bids (down only) </li> <li> AUTO_FOR_SALES - Dynamic bids (up and down) </li> <li> MANUAL - Fixed bids </li> </ul> <h3> Availability </h3> Version 5.0 is only available in the following marketplaces: US, CA, UK, DE, FR, ES, IN, JP. <h1> Version 4.0 </h1> <h2> New features </h2> Version 4.0 allows users to retrieve recommended keyword targets which are sorted in descending order of clicks or conversions. The default sort dimension, if not specified, ranks recommendations by our interal ranking mechanism. We have also added search term metrics. <b> Search term impression share </b> indicates the percentage share of all ad-attributed impressions you received on that keyword in the last 30 days. This metric helps advertisers identify potential opportunities based on their share on relevant keywords. <b> Search term impression rank </b> indicates your ranking among all advertisers for the keyword by ad impressions in a marketplace. It tells an advertiser how many advertisers had higher share of ad impressions. <i> Search term information is only available for keywords the advertiser targeted with ad impressions. </i> <h3> Availability </h3> Version 4.0 is available in all marketplaces.

**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->getRankedKeywordRecommendation();
```

### ListSponsoredProductsKeywords - post /sp/keywords/list


List keywords

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->listSponsoredProductsKeywords();
```

### DeleteSponsoredProductsNegativeKeywords - post /sp/negativeKeywords/delete


Delete negative keywords

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->deleteSponsoredProductsNegativeKeywords();
```

### getTargetableASINCounts - post /sp/targets/products/count

Get number of targetable asins based on refinements provided by the user.
Get number of targetable asins based on refinements provided by the user. Please use the GetTargetableCategories API or the GetCategoryRecommendationsForASINs API to retrieve the category ID. Please use the GetRefinementsByCategory API to retrieve refinements data for a category.

**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->getTargetableASINCounts();
```

### getTargetableCategories - get /sp/targets/categories

Returns all targetable categories.
Returns all targetable categories. This API returns a large JSON string containing a tree of category nodes. Each category node has the fields - category id, category name, and child categories.

**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->getTargetableCategories();
```

### CreateOptimizationRule - post /sp/rules/campaignOptimization

Creates a campaign optimization rule.


**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->createOptimizationRule();
```

### UpdateOptimizationRule - put /sp/rules/campaignOptimization

Updates a campaign optimization rule.


**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->updateOptimizationRule();
```

### CreateAssociatedBudgetRulesForSPCampaigns - post /sp/campaigns/{campaignId}/budgetRules

Associates one or more budget rules to a campaign specified by identifer.
A maximum of 250 rules can be associated to a campaign. Note that the name of each rule associated to a campaign is required to be unique.

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->createAssociatedBudgetRulesForSPCampaigns();
```

### ListAssociatedBudgetRulesForSPCampaigns - get /sp/campaigns/{campaignId}/budgetRules

Gets a list of budget rules associated to a campaign specified by identifier.


**Authorized resource type**:
Global Ad Account ID, Profile ID

**Parameter name**:
Amazon-Ads-AccountId

**Parameter in**:
header

**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->listAssociatedBudgetRulesForSPCampaigns();
```

### searchBrands - post /sp/negativeTargets/brands/search

Returns brands related to keyword input for negative targeting.
Returns up to 100 brands related to keyword input for negative targeting.

**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->searchBrands();
```

### getRefinementsForCategory - get /sp/targets/category/{categoryId}/refinements

Returns refinements according to category input.
Returns refinements according to category input.

**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->getRefinementsForCategory();
```

### GetRuleNotification - post /sp/rules/campaignOptimization/state

Gets campaign optimization rule state. Recommended refresh frequency is once a day.


**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->getRuleNotification();
```

### ListTargetPromotionGroups - post /sp/targetPromotionGroups/list


Returns the target promotion groups for an advertiser and / or adGroupId, and / or target
promotion group id.

**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->listTargetPromotionGroups();
```

### ListSponsoredProductsProductAds - post /sp/productAds/list


List product ads

**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->listSponsoredProductsProductAds();
```

### CreateOptimizationRules - post /sp/rules/optimization

Creates one or more optimization rules.



**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->createOptimizationRules();
```

### UpdateOptimizationRules - put /sp/rules/optimization

Updates one or more optimization rules.



**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->updateOptimizationRules();
```

### CreateTargetPromotionGroups - post /sp/targetPromotionGroups


Creates a target promotion group, by grouping the auto-targeting adGroupId
and manual-targeting adGroups, divided by keyword targeting adGroups, and product targeting adGroups.

**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->createTargetPromotionGroups();
```

### CreateTargetPromotionGroupTargets - post /sp/targetPromotionGroups/targets


Creates keyword and/or product targets in the manual adGroup that are part of the target promotion group

**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->createTargetPromotionGroupTargets();
```

### ListSponsoredProductsNegativeTargetingClauses - post /sp/negativeTargets/list


List negative targeting clauses

**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->listSponsoredProductsNegativeTargetingClauses();
```

### getKeywordGroupRecommendations - post /sp/targeting/recommendations/keywordGroups


This API (currently beta) recommends Keyword Group targets for a given list of Ad ASINs. Keyword Groups is a new control for Amazon Ads Sponsored Products keyword-based campaigns that enables advertisers to reach relevant audiences through a collection of keywords.

Once a Keyword Group specification is created, the performance of Keyword Groups will be available in the search terms report. Keyword Groups improves campaign performance by dynamically updating the keywords within a group through the campaign lifecycle and eliminates the need for advertisers to constantly curate new keywords. Additionally, Keyword Groups can be used alongside keywords within the same ad group.


```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->getKeywordGroupRecommendations();
```

### CreateSponsoredProductsProductAds - post /sp/productAds


Create product ads

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->createSponsoredProductsProductAds();
```

### UpdateSponsoredProductsProductAds - put /sp/productAds


Update product ads

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->updateSponsoredProductsProductAds();
```

### CreateBudgetRulesForSPCampaigns - post /sp/budgetRules

Creates one or more budget rules.


**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->createBudgetRulesForSPCampaigns();
```

### GetSPBudgetRulesForAdvertiser - get /sp/budgetRules

Get all budget rules created by an advertiser


```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->getSPBudgetRulesForAdvertiser();
```

### UpdateBudgetRulesForSPCampaigns - put /sp/budgetRules

Updates one or more budget rules.


**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->updateBudgetRulesForSPCampaigns();
```

### getCategoryRecommendationsForASINs - post /sp/targets/categories/recommendations

Returns a list of category recommendations for the input list of ASINs.
Returns a list of category recommendations for the input list of ASINs. Use this API to discover relevant categories to target. To find ASINs, either use the Product Metadata API or browse the Amazon Retail Website. <br> <ul><li>Response can be requested in different versions with the help of accept header. Please review the response mediaTypes for more information.</li><ul>

**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->getCategoryRecommendationsForASINs();
```

### GetTargetPromotionGroupsRecommendations - post /sp/targetPromotionGroups/recommendations


Retrieves keyword and product targets of an auto-targeting campaign as recommendations for promoting to a manual-targeting campaign. The recommendations are based on performance heuristics of the targets.

**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->getTargetPromotionGroupsRecommendations();
```

### getBudgetRecommendation - post /sp/campaigns/initialBudgetRecommendation


Creates daily budget recommendation along with benchmark metrics when creating a new campaign.

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->getBudgetRecommendation();
```

### DeleteSponsoredProductsCampaignNegativeTargetingClauses - post /sp/campaignNegativeTargets/delete


Delete campaign negative targeting clauses

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->deleteSponsoredProductsCampaignNegativeTargetingClauses();
```

### DeleteSponsoredProductsProductAds - post /sp/productAds/delete


Delete product ads

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->deleteSponsoredProductsProductAds();
```

### getNegativeBrands - get /sp/negativeTargets/brands/recommendations

Returns brands recommended for negative targeting.
Returns brands recommended for negative targeting. Only available for Sellers and Vendors. These recommendations include your own brands because targeting your own brands usually results in lower performance than targeting competitors' brands.

**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->getNegativeBrands();
```

### getBudgetRecommendations - post /sp/campaigns/budgetRecommendations

Get recommended daily budget and estimated missed opportunities for campaigns.
Given a list of campaigns as input, this API provides the following metrics -  <br> <b>1. Recommended daily budget - </b> Estimated daily budget needed to keep the campaign in budget for the full 24-hour period in a day. Consider this daily budget to minimize your campaign's chances of running out of budget. <br> <b>2. Percent time in budget </b> - Actual average percentage of time the campaign was in budget between the start and end date specified in the response. Note: value -1 means we don’t have enough information to compute the campaign’s percent time in budget. <br> <b>3. Estimated missed impressions, clicks and sales </b> - These are the estimated range of additional impressions, clicks and sales the campaign might have generated between the start and end date specified in the response had it been in budget 100% of the time. These are estimates based on historical traffic and the campaign's past performance (e.g. impressions & clicks generated) but not guaranteed.

**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->getBudgetRecommendations();
```

### CreateSponsoredProductsNegativeTargetingClauses - post /sp/negativeTargets


Create negative targeting clauses

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->createSponsoredProductsNegativeTargetingClauses();
```

### UpdateSponsoredProductsNegativeTargetingClauses - put /sp/negativeTargets


Update negative targeting clauses

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->updateSponsoredProductsNegativeTargetingClauses();
```

### CreateSponsoredProductsTargetingClauses - post /sp/targets


Create targeting clauses

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->createSponsoredProductsTargetingClauses();
```

### UpdateSponsoredProductsTargetingClauses - put /sp/targets


Update targeting clauses

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->updateSponsoredProductsTargetingClauses();
```

### SPGetBudgetRulesRecommendation - post /sp/campaigns/budgetRules/recommendations

Gets a list of special events with suggested date range and suggested budget increase for a campaign specified by identifier.
A rule enables an automatic budget increase for a specified date range or for a special event. The response also includes a suggested budget increase for each special event.

**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->sPGetBudgetRulesRecommendation();
```

### CreateSponsoredProductsCampaignNegativeTargetingClauses - post /sp/campaignNegativeTargets


Create campaign negative targeting clauses

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->createSponsoredProductsCampaignNegativeTargetingClauses();
```

### UpdateSponsoredProductsCampaignNegativeTargetingClauses - put /sp/campaignNegativeTargets


Update campaign negative targeting clauses

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->updateSponsoredProductsCampaignNegativeTargetingClauses();
```

### CreateSponsoredProductsKeywords - post /sp/keywords


Create keywords

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->createSponsoredProductsKeywords();
```

### UpdateSponsoredProductsKeywords - put /sp/keywords


Update keywords

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->updateSponsoredProductsKeywords();
```

### ListSponsoredProductsCampaignNegativeTargetingClauses - post /sp/campaignNegativeTargets/list


List campaign negative targeting clauses

**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->listSponsoredProductsCampaignNegativeTargetingClauses();
```

### DeleteSponsoredProductsTargetingClauses - post /sp/targets/delete


Delete targeting clauses

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->deleteSponsoredProductsTargetingClauses();
```

### SearchOptimizationRules - post /sp/rules/optimization/search

Searches optimization rules based on optional filters.



**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->searchOptimizationRules();
```

### CreateSponsoredProductsCampaigns - post /sp/campaigns


Create campaigns

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->createSponsoredProductsCampaigns();
```

### UpdateSponsoredProductsCampaigns - put /sp/campaigns


Update campaigns

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->updateSponsoredProductsCampaigns();
```

### ListSponsoredProductsAdGroups - post /sp/adGroups/list


List ad groups

**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->listSponsoredProductsAdGroups();
```

### DeleteSponsoredProductsAdGroups - post /sp/adGroups/delete


Delete ad groups

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->deleteSponsoredProductsAdGroups();
```

### getCampaignRecommendations - get /sp/campaign/recommendations


Gets the top consolidated recommendations across bid, budget, targeting for SP campaigns given an advertiser profile id. The recommendations are refreshed everyday.

**Requires one of these permissions**:
["advertiser_campaign_view","advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->getCampaignRecommendations();
```

### DeleteSponsoredProductsCampaignNegativeKeywords - post /sp/campaignNegativeKeywords/delete


Delete campaign negative keywords

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->deleteSponsoredProductsCampaignNegativeKeywords();
```

### AssociateOptimizationRulesToCampaign - post /sp/campaigns/{campaignId}/optimizationRules

Associates one or multiple optimization rules with a campaign.



**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->associateOptimizationRulesToCampaign();
```

### ListSponsoredProductsCampaignNegativeKeywords - post /sp/campaignNegativeKeywords/list


List campaign negative keywords

**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->listSponsoredProductsCampaignNegativeKeywords();
```

### DeleteSponsoredProductsCampaigns - post /sp/campaigns/delete


Delete campaigns

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->deleteSponsoredProductsCampaigns();
```

### ListSponsoredProductsCampaigns - post /sp/campaigns/list


List campaigns

**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->listSponsoredProductsCampaigns();
```

### GetCampaignsAssociatedWithSPBudgetRule - get /sp/budgetRules/{budgetRuleId}/campaigns

Gets all the campaigns associated with a budget rule


```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->getCampaignsAssociatedWithSPBudgetRule();
```

### DisassociateAssociatedBudgetRuleForSPCampaigns - delete /sp/campaigns/{campaignId}/budgetRules/{budgetRuleId}

Disassociates a budget rule specified by identifier from a campaign specified by identifier.


**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->disassociateAssociatedBudgetRuleForSPCampaigns();
```

### CreateSponsoredProductsAdGroups - post /sp/adGroups


Create ad groups

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->createSponsoredProductsAdGroups();
```

### UpdateSponsoredProductsAdGroups - put /sp/adGroups


Update ad groups

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->updateSponsoredProductsAdGroups();
```

### getProductRecommendations - post /sp/targets/products/recommendations

Suggested target ASINs for your advertised product
Given an advertised ASIN as input, this API returns suggested ASINs to target in a product targeting campaign. We use various methods to generate these suggestions. These include using historical performance of your ad, items that shoppers they frequently view and purchase together, etc. The suggested targets can be retrieved either as a single list, or grouped by ‘theme' – i.e. an accompanying context for why we recommend the items. You can pick the desired format using the Accepts header, please see the response mediaTypes for more information. </br>
<h4>Pagination Behavior</h4> The API supports cursor based pagination using encoded cursor values to return next set of records or previously served records. The <b>count</b> parameter in the request body will be used to determine the size of results when requesting the previous page or next page. If no value for <b>count</b> is passed in the request, a default value is assumed. Please refer the range and defaults for these values in the request schema under GetProductRecommendationsRequest. </br> <i><b>Note:</b> The clients should never cache pagination cursor values locally as these values will expire after a certain time period. However a cursor value can be reused to perform retries in case of failures as long as the value has not expired.
</br></br> <h4>Themes </h4> Themes provide additional context for why we are recommending a product as a target. See below for an overall list of themes currently available –  </br><b>- Top converting targets</b> – These ASINs generated conversions for the input ASIN in the past 30 days (e.g. your product appeared as an ad on the detail page of these items, and a shopper clicked and purchased your item). The suggested ASINs under this theme are sorted in decreasing order of sales generated for your promoted item. </br><b>- Similar items (frequently viewed together)</b> – Items that shoppers frequently view and click along with your advertised item during a shopping session.
</br><b>- Complements</b> – Items that are frequently purchased together as complements. For example, if you are promoting a tennis racquet, you may see tennis balls recommended under this theme.
</br><b>- Similar items with low ratings and reviews</b> – Subset of the ‘similar items’ theme containing items that are rated lower than 3 stars and/or with fewer than 5 reviews.
</br><b>- Other books read by your readers</b> – Items that shoppers frequently view and click along with your advertised item during a shopping session. </br></br><i><b>Note:</b> Availability of themes differs by input ASIN - some ASINs may not have all above themes available</i>


```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->getProductRecommendations();
```

### DeleteSponsoredProductsNegativeTargetingClauses - post /sp/negativeTargets/delete


Delete negative targeting clauses

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->deleteSponsoredProductsNegativeTargetingClauses();
```

### DeleteSponsoredProductsKeywords - post /sp/keywords/delete


Delete keywords

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->deleteSponsoredProductsKeywords();
```

### GetOptimizationRuleEligibility - post /sp/rules/campaignOptimization/eligibility

Gets a campaign optimization rule recommendation for SP campaigns.


**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->getOptimizationRuleEligibility();
```

### GetBudgetRuleByRuleIdForSPCampaigns - get /sp/budgetRules/{budgetRuleId}

Gets a budget rule specified by identifier.


**Authorized resource type**:
Global Ad Account ID, Profile ID

**Parameter name**:
Amazon-Ads-AccountId

**Parameter in**:
header

**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->getBudgetRuleByRuleIdForSPCampaigns();
```

### GetCampaignOptimizationRule - get /sp/rules/campaignOptimization/{campaignOptimizationId}

Gets a campaign optimization rule specified by identifier.


**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->getCampaignOptimizationRule();
```

### DeleteCampaignOptimizationRule - delete /sp/rules/campaignOptimization/{campaignOptimizationId}

Deletes a campaign optimization rule specified by identifier.


**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->deleteCampaignOptimizationRule();
```

### CreateSponsoredProductsCampaignNegativeKeywords - post /sp/campaignNegativeKeywords


Create campaign negative keywords

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->createSponsoredProductsCampaignNegativeKeywords();
```

### UpdateSponsoredProductsCampaignNegativeKeywords - put /sp/campaignNegativeKeywords


Update campaign negative keywords

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->updateSponsoredProductsCampaignNegativeKeywords();
```

### ListTargetPromotionGroupTargets - post /sp/targetPromotionGroups/targets/list


Returns the targets created through target promotion groups for an advertiser and / or given target promotion group.

**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->listTargetPromotionGroupTargets();
```

### ListSponsoredProductsTargetingClauses - post /sp/targets/list


List targeting clauses

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->listSponsoredProductsTargetingClauses();
```

### ListSponsoredProductsNegativeKeywords - post /sp/negativeKeywords/list


List negative keywords

**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->listSponsoredProductsNegativeKeywords();
```

### getGlobalRankedKeywordRecommendation - post /sp/global/targets/keywords/recommendations/list

Get global keyword recommendations
The <b> POST /sp/global/targets/keywords/recommendations/list </b> endpoint returns recommended keyword targets for a list of countries given either A) a list of ad ASINs per target country or B) a global campaign ID and ad group ID. Please use the recommendationType field to specify if you want to use option A or option B. This endpoint will also return recommended bids along with each recommendation keyword target.<br><br> <b> CountryCodes</b> <br>Global API endpoint accepts <b>countryCodes</b> dictionary. Key is the 2-letter country code. Value is an object with two arrays <b>asins</b> and <b>targets</b>. Each country will be processed in parallel according to rules of <a href="https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Keyword-Targets:~:text=keywords/localize%20endpoint.-,Version%205.0,-New%20Features">version 5</a> recommendation API.<h3> Availability </h3> Global keyword recommendation API is available in all the marketplaces.

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->getGlobalRankedKeywordRecommendation();
```

### CreateSponsoredProductsNegativeKeywords - post /sp/negativeKeywords


Create negative keywords

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->createSponsoredProductsNegativeKeywords();
```

### UpdateSponsoredProductsNegativeKeywords - put /sp/negativeKeywords


Update negative keywords

**Requires one of these permissions**:
["advertiser_campaign_edit"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->updateSponsoredProductsNegativeKeywords();
```

### spCampaignsBudgetUsage - post /sp/campaigns/budget/usage

Budget usage API for SP campaigns


**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->spCampaignsBudgetUsage();
```

### SPGetAllRuleEvents - post /sp/v1/events

Gets all special individual and grouped events with suggested date range in advertiser's marketplace.
A rule enables an automatic budget increase for a specified date range or for a special event. The response includes the suggested date range for each special event.

**Requires one of these permissions**:
["advertiser_campaign_edit","advertiser_campaign_view"]

```php
// see above how to create a client
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);
$client->sPGetAllRuleEvents();
```



## License

Apache 2.0
