<?php

require_once __FILE__ . "../vendor/autoload.php";

use cedricziel\amznsponsoredproductsapiphp\Generated\Client;
use cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsListSponsoredProductsCampaignsRequestContent;

$client = Client::create(null);

$params = new SponsoredProductsListSponsoredProductsCampaignsRequestContent();
$res = $client->listSponsoredProductsCampaigns();