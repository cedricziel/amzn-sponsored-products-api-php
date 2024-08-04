<?php

require_once __DIR__.'/vendor/autoload.php';

function underscoreToCamelCase($string, $capitalizeFirstCharacter = false)
{
    $str = str_replace(' ', '', ucwords(str_replace('_', ' ', $string)));

    if (!$capitalizeFirstCharacter) {
        $str[0] = strtolower($str[0]);
    }

    return $str;
}

$readme = file_get_contents('./.github/README.template.md');
$json = json_decode(file_get_contents('openapi.json'), true);

$doc = '';

foreach ($json['paths'] as $pathName => $path) {
    foreach ($path as $httpMethod => $method) {
        $methodName = underscoreToCamelCase($method['operationId']);

        $doc .= '### '.$method['operationId'].' - '."$httpMethod $pathName\n";
        $doc .= "\n";
        $doc .= $method['summary'] ?? '';
        $doc .= "\n";
        $doc .= $method['description'] ?? '';
        $doc .= "\n\n";
        $doc .= '```php'."\n";
        $doc .= "// see above how to create a client\n";
        $doc .= '$client = \\CedricZiel\\\AmznSponsoredProductsApiPHP\Generated\\Client::create();'."\n";
        $doc .= '$client->'."{$methodName}();\n";
        $doc .= '```'."\n";
        $doc .= "\n";
        echo $method['operationId']."\n";
    }
}

file_put_contents('README.md', str_replace('### docs ###', $doc, $readme));
