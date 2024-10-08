<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsInternalErrorResponseContent extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Error codes.
     * | Error Code |  description |
     * |-----------|------------|
     * | `BAD_REQUEST` | Received malformed request. |
     * | `UNAUTHORIZED` | |
     * | `FORBIDDEN` | |
     * | `NOT_FOUND` | |
     * | `CONTENT_TOO_LARGE` | |
     * | `TOO_MANY_REQUESTS` | |
     * | `INTERNAL_ERROR` | |
     * | `BAD_GATEWAY` | |
     * | `SERVICE_UNAVAILABLE` | |
     * | `GATEWAY_TIMEOUT` | |.
     *
     * @var string
     */
    protected $code;
    /**
     * @var string
     */
    protected $message;
    /**
     * @var string
     */
    protected $httpStatusCode;

    /**
     * Error codes.
     * | Error Code |  description |
     * |-----------|------------|
     * | `BAD_REQUEST` | Received malformed request. |
     * | `UNAUTHORIZED` | |
     * | `FORBIDDEN` | |
     * | `NOT_FOUND` | |
     * | `CONTENT_TOO_LARGE` | |
     * | `TOO_MANY_REQUESTS` | |
     * | `INTERNAL_ERROR` | |
     * | `BAD_GATEWAY` | |
     * | `SERVICE_UNAVAILABLE` | |
     * | `GATEWAY_TIMEOUT` | |.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Error codes.
     * | Error Code |  description |
     * |-----------|------------|
     * | `BAD_REQUEST` | Received malformed request. |
     * | `UNAUTHORIZED` | |
     * | `FORBIDDEN` | |
     * | `NOT_FOUND` | |
     * | `CONTENT_TOO_LARGE` | |
     * | `TOO_MANY_REQUESTS` | |
     * | `INTERNAL_ERROR` | |
     * | `BAD_GATEWAY` | |
     * | `SERVICE_UNAVAILABLE` | |
     * | `GATEWAY_TIMEOUT` | |.
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }

    public function getHttpStatusCode(): string
    {
        return $this->httpStatusCode;
    }

    public function setHttpStatusCode(string $httpStatusCode): self
    {
        $this->initialized['httpStatusCode'] = true;
        $this->httpStatusCode = $httpStatusCode;

        return $this;
    }
}
