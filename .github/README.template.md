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

### docs ###

## License

Apache 2.0
