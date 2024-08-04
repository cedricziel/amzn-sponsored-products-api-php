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
    class SBBudgetRuleDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SBBudgetRuleDetails::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SBBudgetRuleDetails::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SBBudgetRuleDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('duration', $data)) {
                $object->setDuration($this->denormalizer->denormalize($data['duration'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\RuleDuration::class, 'json', $context));
                unset($data['duration']);
            }
            if (\array_key_exists('recurrence', $data)) {
                $object->setRecurrence($this->denormalizer->denormalize($data['recurrence'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\Recurrence::class, 'json', $context));
                unset($data['recurrence']);
            }
            if (\array_key_exists('ruleType', $data)) {
                $object->setRuleType($data['ruleType']);
                unset($data['ruleType']);
            }
            if (\array_key_exists('budgetIncreaseBy', $data)) {
                $object->setBudgetIncreaseBy($this->denormalizer->denormalize($data['budgetIncreaseBy'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BudgetIncreaseBy::class, 'json', $context));
                unset($data['budgetIncreaseBy']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('performanceMeasureCondition', $data)) {
                $object->setPerformanceMeasureCondition($this->denormalizer->denormalize($data['performanceMeasureCondition'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\PerformanceMeasureConditionForSB::class, 'json', $context));
                unset($data['performanceMeasureCondition']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('duration') && null !== $object->getDuration()) {
                $data['duration'] = $this->normalizer->normalize($object->getDuration(), 'json', $context);
            }
            if ($object->isInitialized('recurrence') && null !== $object->getRecurrence()) {
                $data['recurrence'] = $this->normalizer->normalize($object->getRecurrence(), 'json', $context);
            }
            if ($object->isInitialized('ruleType') && null !== $object->getRuleType()) {
                $data['ruleType'] = $object->getRuleType();
            }
            if ($object->isInitialized('budgetIncreaseBy') && null !== $object->getBudgetIncreaseBy()) {
                $data['budgetIncreaseBy'] = $this->normalizer->normalize($object->getBudgetIncreaseBy(), 'json', $context);
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('performanceMeasureCondition') && null !== $object->getPerformanceMeasureCondition()) {
                $data['performanceMeasureCondition'] = $this->normalizer->normalize($object->getPerformanceMeasureCondition(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SBBudgetRuleDetails::class => false];
        }
    }
} else {
    class SBBudgetRuleDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SBBudgetRuleDetails::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SBBudgetRuleDetails::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SBBudgetRuleDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('duration', $data)) {
                $object->setDuration($this->denormalizer->denormalize($data['duration'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\RuleDuration::class, 'json', $context));
                unset($data['duration']);
            }
            if (\array_key_exists('recurrence', $data)) {
                $object->setRecurrence($this->denormalizer->denormalize($data['recurrence'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\Recurrence::class, 'json', $context));
                unset($data['recurrence']);
            }
            if (\array_key_exists('ruleType', $data)) {
                $object->setRuleType($data['ruleType']);
                unset($data['ruleType']);
            }
            if (\array_key_exists('budgetIncreaseBy', $data)) {
                $object->setBudgetIncreaseBy($this->denormalizer->denormalize($data['budgetIncreaseBy'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\BudgetIncreaseBy::class, 'json', $context));
                unset($data['budgetIncreaseBy']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('performanceMeasureCondition', $data)) {
                $object->setPerformanceMeasureCondition($this->denormalizer->denormalize($data['performanceMeasureCondition'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\PerformanceMeasureConditionForSB::class, 'json', $context));
                unset($data['performanceMeasureCondition']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('duration') && null !== $object->getDuration()) {
                $data['duration'] = $this->normalizer->normalize($object->getDuration(), 'json', $context);
            }
            if ($object->isInitialized('recurrence') && null !== $object->getRecurrence()) {
                $data['recurrence'] = $this->normalizer->normalize($object->getRecurrence(), 'json', $context);
            }
            if ($object->isInitialized('ruleType') && null !== $object->getRuleType()) {
                $data['ruleType'] = $object->getRuleType();
            }
            if ($object->isInitialized('budgetIncreaseBy') && null !== $object->getBudgetIncreaseBy()) {
                $data['budgetIncreaseBy'] = $this->normalizer->normalize($object->getBudgetIncreaseBy(), 'json', $context);
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('performanceMeasureCondition') && null !== $object->getPerformanceMeasureCondition()) {
                $data['performanceMeasureCondition'] = $this->normalizer->normalize($object->getPerformanceMeasureCondition(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SBBudgetRuleDetails::class => false];
        }
    }
}
