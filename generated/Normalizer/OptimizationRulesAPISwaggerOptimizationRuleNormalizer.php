<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Normalizer;

use CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Normalizer\CheckArray;
use CedricZiel\AmznSponsoredProductsApiPHP\Generated\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class OptimizationRulesAPISwaggerOptimizationRuleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerOptimizationRule::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerOptimizationRule::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerOptimizationRule();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('recurrence', $data)) {
                $object->setRecurrence($this->denormalizer->denormalize($data['recurrence'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerRuleRecurrence::class, 'json', $context));
                unset($data['recurrence']);
            }
            if (\array_key_exists('ruleCategory', $data)) {
                $object->setRuleCategory($data['ruleCategory']);
                unset($data['ruleCategory']);
            }
            if (\array_key_exists('ruleSubCategory', $data)) {
                $object->setRuleSubCategory($data['ruleSubCategory']);
                unset($data['ruleSubCategory']);
            }
            if (\array_key_exists('ruleName', $data)) {
                $object->setRuleName($data['ruleName']);
                unset($data['ruleName']);
            }
            if (\array_key_exists('action', $data)) {
                $object->setAction($this->denormalizer->denormalize($data['action'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerRuleAction::class, 'json', $context));
                unset($data['action']);
            }
            if (\array_key_exists('conditions', $data)) {
                $values = [];
                foreach ($data['conditions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerRuleCondition::class, 'json', $context);
                }
                $object->setConditions($values);
                unset($data['conditions']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('optimizationRuleId', $data)) {
                $object->setOptimizationRuleId($data['optimizationRuleId']);
                unset($data['optimizationRuleId']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['recurrence'] = $this->normalizer->normalize($object->getRecurrence(), 'json', $context);
            $data['ruleCategory'] = $object->getRuleCategory();
            $data['ruleSubCategory'] = $object->getRuleSubCategory();
            if ($object->isInitialized('ruleName') && null !== $object->getRuleName()) {
                $data['ruleName'] = $object->getRuleName();
            }
            $data['action'] = $this->normalizer->normalize($object->getAction(), 'json', $context);
            if ($object->isInitialized('conditions') && null !== $object->getConditions()) {
                $values = [];
                foreach ($object->getConditions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['conditions'] = $values;
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('optimizationRuleId') && null !== $object->getOptimizationRuleId()) {
                $data['optimizationRuleId'] = $object->getOptimizationRuleId();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerOptimizationRule::class => false];
        }
    }
} else {
    class OptimizationRulesAPISwaggerOptimizationRuleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerOptimizationRule::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerOptimizationRule::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerOptimizationRule();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('recurrence', $data)) {
                $object->setRecurrence($this->denormalizer->denormalize($data['recurrence'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerRuleRecurrence::class, 'json', $context));
                unset($data['recurrence']);
            }
            if (\array_key_exists('ruleCategory', $data)) {
                $object->setRuleCategory($data['ruleCategory']);
                unset($data['ruleCategory']);
            }
            if (\array_key_exists('ruleSubCategory', $data)) {
                $object->setRuleSubCategory($data['ruleSubCategory']);
                unset($data['ruleSubCategory']);
            }
            if (\array_key_exists('ruleName', $data)) {
                $object->setRuleName($data['ruleName']);
                unset($data['ruleName']);
            }
            if (\array_key_exists('action', $data)) {
                $object->setAction($this->denormalizer->denormalize($data['action'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerRuleAction::class, 'json', $context));
                unset($data['action']);
            }
            if (\array_key_exists('conditions', $data)) {
                $values = [];
                foreach ($data['conditions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerRuleCondition::class, 'json', $context);
                }
                $object->setConditions($values);
                unset($data['conditions']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('optimizationRuleId', $data)) {
                $object->setOptimizationRuleId($data['optimizationRuleId']);
                unset($data['optimizationRuleId']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['recurrence'] = $this->normalizer->normalize($object->getRecurrence(), 'json', $context);
            $data['ruleCategory'] = $object->getRuleCategory();
            $data['ruleSubCategory'] = $object->getRuleSubCategory();
            if ($object->isInitialized('ruleName') && null !== $object->getRuleName()) {
                $data['ruleName'] = $object->getRuleName();
            }
            $data['action'] = $this->normalizer->normalize($object->getAction(), 'json', $context);
            if ($object->isInitialized('conditions') && null !== $object->getConditions()) {
                $values = [];
                foreach ($object->getConditions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['conditions'] = $values;
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('optimizationRuleId') && null !== $object->getOptimizationRuleId()) {
                $data['optimizationRuleId'] = $object->getOptimizationRuleId();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerOptimizationRule::class => false];
        }
    }
}
