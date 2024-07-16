<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Exception;

class GetKeywordGroupRecommendationsNotFoundException extends NotFoundException
{
    /**
     * @var \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SPKeywordGroupsException
     */
    private $sPKeywordGroupsException;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SPKeywordGroupsException $sPKeywordGroupsException, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found.');
        $this->sPKeywordGroupsException = $sPKeywordGroupsException;
        $this->response = $response;
    }

    public function getSPKeywordGroupsException(): \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SPKeywordGroupsException
    {
        return $this->sPKeywordGroupsException;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
