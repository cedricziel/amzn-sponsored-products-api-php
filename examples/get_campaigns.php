<?php

use CedricZiel\AmznSponsoredProductsApiPHP\Endpoint;
use CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsListSponsoredProductsCampaignsRequestContent;
use CedricZiel\AmznSponsoredProductsApiPHP\Header;
use CedricZiel\AmznSponsoredProductsApiPHP\SponsoredProductsApiClient;

require_once __DIR__.'/../vendor/autoload.php';

$accessToken = '...';
$client = SponsoredProductsApiClient::createFor(Endpoint::Europe, $accessToken);

$body = new SponsoredProductsListSponsoredProductsCampaignsRequestContent();
$res = $client->listSponsoredProductsCampaigns($body, [
    Header::AmazonAdvertisingApiClientId->value => '...',
    Header::AmazonAdvertisingApiScope->value => '...',
]);
