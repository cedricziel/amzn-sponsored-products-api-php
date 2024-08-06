<?php

namespace CedricZiel\AmznSponsoredProductsApiPHP;

use CedricZiel\AmznSponsoredProductsApiPHP\Generated\Authentication\BearerAuthAuthentication;
use CedricZiel\AmznSponsoredProductsApiPHP\Generated\Client;
use Http\Client\Common\Plugin\AddHostPlugin;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use Nyholm\Psr7\Uri;

class SponsoredProductsApiClient extends Client
{
    public static function createFor(Endpoint $endpoint, string $accessToken, $client = null): SponsoredProductsApiClient
    {
        $plugins = [
            new AddHostPlugin(new Uri($endpoint->value)),
            new AuthenticationRegistry([new BearerAuthAuthentication($accessToken)]),
        ];

        return parent::create($client, $plugins);
    }
}
