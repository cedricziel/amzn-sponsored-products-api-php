<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\amznsponsoredproductsapiphp\Generated\Normalizer;

use cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Normalizer\CheckArray;
use cedricziel\amznsponsoredproductsapiphp\Generated\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class CreateSPCampaignOptimizationRulesRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\amznsponsoredproductsapiphp\Generated\Model\CreateSPCampaignOptimizationRulesRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && cedricziel\amznsponsoredproductsapiphp\Generated\Model\CreateSPCampaignOptimizationRulesRequest::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\CreateSPCampaignOptimizationRulesRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('recurrence', $data)) {
                $object->setRecurrence($data['recurrence']);
                unset($data['recurrence']);
            }
            if (\array_key_exists('ruleAction', $data)) {
                $object->setRuleAction($data['ruleAction']);
                unset($data['ruleAction']);
            }
            if (\array_key_exists('ruleCondition', $data)) {
                $values = [];
                foreach ($data['ruleCondition'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \cedricziel\amznsponsoredproductsapiphp\Generated\Model\RuleCondition::class, 'json', $context);
                }
                $object->setRuleCondition($values);
                unset($data['ruleCondition']);
            }
            if (\array_key_exists('ruleType', $data)) {
                $object->setRuleType($data['ruleType']);
                unset($data['ruleType']);
            }
            if (\array_key_exists('ruleName', $data)) {
                $object->setRuleName($data['ruleName']);
                unset($data['ruleName']);
            }
            if (\array_key_exists('campaignIds', $data)) {
                $values_1 = [];
                foreach ($data['campaignIds'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setCampaignIds($values_1);
                unset($data['campaignIds']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['recurrence'] = $object->getRecurrence();
            $data['ruleAction'] = $object->getRuleAction();
            $values = [];
            foreach ($object->getRuleCondition() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['ruleCondition'] = $values;
            $data['ruleType'] = $object->getRuleType();
            if ($object->isInitialized('ruleName') && null !== $object->getRuleName()) {
                $data['ruleName'] = $object->getRuleName();
            }
            $values_1 = [];
            foreach ($object->getCampaignIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['campaignIds'] = $values_1;
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\CreateSPCampaignOptimizationRulesRequest::class => false];
        }
    }
} else {
    class CreateSPCampaignOptimizationRulesRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\amznsponsoredproductsapiphp\Generated\Model\CreateSPCampaignOptimizationRulesRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && cedricziel\amznsponsoredproductsapiphp\Generated\Model\CreateSPCampaignOptimizationRulesRequest::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\CreateSPCampaignOptimizationRulesRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('recurrence', $data)) {
                $object->setRecurrence($data['recurrence']);
                unset($data['recurrence']);
            }
            if (\array_key_exists('ruleAction', $data)) {
                $object->setRuleAction($data['ruleAction']);
                unset($data['ruleAction']);
            }
            if (\array_key_exists('ruleCondition', $data)) {
                $values = [];
                foreach ($data['ruleCondition'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \cedricziel\amznsponsoredproductsapiphp\Generated\Model\RuleCondition::class, 'json', $context);
                }
                $object->setRuleCondition($values);
                unset($data['ruleCondition']);
            }
            if (\array_key_exists('ruleType', $data)) {
                $object->setRuleType($data['ruleType']);
                unset($data['ruleType']);
            }
            if (\array_key_exists('ruleName', $data)) {
                $object->setRuleName($data['ruleName']);
                unset($data['ruleName']);
            }
            if (\array_key_exists('campaignIds', $data)) {
                $values_1 = [];
                foreach ($data['campaignIds'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setCampaignIds($values_1);
                unset($data['campaignIds']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            $data['recurrence'] = $object->getRecurrence();
            $data['ruleAction'] = $object->getRuleAction();
            $values = [];
            foreach ($object->getRuleCondition() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['ruleCondition'] = $values;
            $data['ruleType'] = $object->getRuleType();
            if ($object->isInitialized('ruleName') && null !== $object->getRuleName()) {
                $data['ruleName'] = $object->getRuleName();
            }
            $values_1 = [];
            foreach ($object->getCampaignIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['campaignIds'] = $values_1;
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\CreateSPCampaignOptimizationRulesRequest::class => false];
        }
    }
}
