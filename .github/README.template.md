# amzn-sponsored-products-api-php

An API client for the Amazon Sponsored Products API.

```shell
composer require cedricziel/amznsponsoredproductsapiphp
```

## Docs

### General

Instantiate a client, configure your secrets and continue to use:

```php
// You need to obtain a token via the Amazon LwA workflow
$token = '..';

$client = \CedricZiel\AmznSponsoredProductsApiPHP\Client::create(
    null, // or provide your own client
    [
        // set the API endpoint to use, see the Amazon documentation
        new AddHostPlugin(new Uri('https://advertising-api-eu.amazon.com'));
        new BearerAuthAuthentication($token),
    ]
);

// execute the endpoint of choice, see below ...
$client->listSponsoredProductsCampaigns();
```

### docs ###

## License

Apache 2.0