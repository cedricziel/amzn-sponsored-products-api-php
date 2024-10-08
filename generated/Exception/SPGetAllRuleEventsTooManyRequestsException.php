<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception;

class SPGetAllRuleEventsTooManyRequestsException extends TooManyRequestsException
{
    /**
     * @var \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPGetRuleEventError
     */
    private $sPGetRuleEventError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPGetRuleEventError $sPGetRuleEventError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Too Many Requests. Request was rate-limited. Retry later.');
        $this->sPGetRuleEventError = $sPGetRuleEventError;
        $this->response = $response;
    }

    public function getSPGetRuleEventError(): \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPGetRuleEventError
    {
        return $this->sPGetRuleEventError;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
