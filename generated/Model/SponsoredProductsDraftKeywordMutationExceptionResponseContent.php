<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class SponsoredProductsDraftKeywordMutationExceptionResponseContent extends \ArrayObject
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
     * @var string
     */
    protected $code;
    /**
     * Human readable error message.
     *
     * @var string
     */
    protected $message;
    /**
     * @var list<SponsoredProductsDraftKeywordMutationError>
     */
    protected $errors;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * Human readable error message.
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Human readable error message.
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }

    /**
     * @return list<SponsoredProductsDraftKeywordMutationError>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param list<SponsoredProductsDraftKeywordMutationError> $errors
     */
    public function setErrors(array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }
}
