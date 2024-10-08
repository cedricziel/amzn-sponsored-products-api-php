<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Exception;

class GetKeywordGroupRecommendationsNotFoundException extends NotFoundException
{
    /**
     * @var \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPKeywordGroupsException
     */
    private $sPKeywordGroupsException;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPKeywordGroupsException $sPKeywordGroupsException, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found.');
        $this->sPKeywordGroupsException = $sPKeywordGroupsException;
        $this->response = $response;
    }

    public function getSPKeywordGroupsException(): \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SPKeywordGroupsException
    {
        return $this->sPKeywordGroupsException;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
