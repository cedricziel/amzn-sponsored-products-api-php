<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Exception;

class GetTargetableCategoriesTooManyRequestsException extends TooManyRequestsException
{
    /**
     * @var \cedricziel\amznsponsoredproductsapiphp\Generated\Model\ThrottlingException
     */
    private $throttlingException;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\amznsponsoredproductsapiphp\Generated\Model\ThrottlingException $throttlingException, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Too Many Requests - Request was rate-limited. Retry later.');
        $this->throttlingException = $throttlingException;
        $this->response = $response;
    }

    public function getThrottlingException(): \cedricziel\amznsponsoredproductsapiphp\Generated\Model\ThrottlingException
    {
        return $this->throttlingException;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
