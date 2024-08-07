<?php

namespace CedricZiel\AmznSponsoredProductsApiPHP;

use CedricZiel\AmznSponsoredProductsApiPHP\Generated\Authentication\BearerAuthAuthentication;
use CedricZiel\AmznSponsoredProductsApiPHP\Generated\Client;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\PluginClient;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use Nyholm\Psr7\Uri;

class SponsoredProductsApiClient extends Client
{
    public static function createFor(Endpoint $endpoint, string $accessToken, $httpClient = null): SponsoredProductsApiClient
    {
        $plugins = [
            new AddHostPlugin(new Uri($endpoint->value)),
            new AuthenticationRegistry([new BearerAuthAuthentication($accessToken)]),
        ];

        if (null !== $httpClient) {
            return parent::create(new PluginClient($httpClient, $plugins));
        }

        return parent::create($httpClient, $plugins);
    }
}
