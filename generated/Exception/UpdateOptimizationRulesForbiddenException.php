<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Exception;

class UpdateOptimizationRulesForbiddenException extends ForbiddenException
{
    /**
     * @var \cedricziel\amznsponsoredproductsapiphp\Generated\Model\OptimizationRulesAPISwaggerOptimizationRulesError
     */
    private $optimizationRulesAPISwaggerOptimizationRulesError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\cedricziel\amznsponsoredproductsapiphp\Generated\Model\OptimizationRulesAPISwaggerOptimizationRulesError $optimizationRulesAPISwaggerOptimizationRulesError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden. Request failed because user does not have access to a specified resource.
');
        $this->optimizationRulesAPISwaggerOptimizationRulesError = $optimizationRulesAPISwaggerOptimizationRulesError;
        $this->response = $response;
    }

    public function getOptimizationRulesAPISwaggerOptimizationRulesError(): \cedricziel\amznsponsoredproductsapiphp\Generated\Model\OptimizationRulesAPISwaggerOptimizationRulesError
    {
        return $this->optimizationRulesAPISwaggerOptimizationRulesError;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
