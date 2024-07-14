<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Exception;

class GetNegativeBrandsBadRequestException extends BadRequestException
{
    /**
     * @var \cedricziel\amznsponsoredproductsapiphp\Generated\Model\BadRequestException
     */
    private $badRequestException;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\amznsponsoredproductsapiphp\Generated\Model\BadRequestException $badRequestException, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request - The input fails to satisfy the constraints of the API.');
        $this->badRequestException = $badRequestException;
        $this->response = $response;
    }

    public function getBadRequestException(): \cedricziel\amznsponsoredproductsapiphp\Generated\Model\BadRequestException
    {
        return $this->badRequestException;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
