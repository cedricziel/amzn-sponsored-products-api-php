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
    class SDBudgetRuleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SDBudgetRule::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SDBudgetRule::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SDBudgetRule();
            if (\array_key_exists('lastUpdatedDate', $data) && \is_int($data['lastUpdatedDate'])) {
                $data['lastUpdatedDate'] = (float) $data['lastUpdatedDate'];
            }
            if (\array_key_exists('createdDate', $data) && \is_int($data['createdDate'])) {
                $data['createdDate'] = (float) $data['createdDate'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ruleState', $data)) {
                $object->setRuleState($data['ruleState']);
                unset($data['ruleState']);
            }
            if (\array_key_exists('lastUpdatedDate', $data)) {
                $object->setLastUpdatedDate($data['lastUpdatedDate']);
                unset($data['lastUpdatedDate']);
            }
            if (\array_key_exists('createdDate', $data)) {
                $object->setCreatedDate($data['createdDate']);
                unset($data['createdDate']);
            }
            if (\array_key_exists('ruleDetails', $data)) {
                $object->setRuleDetails($this->denormalizer->denormalize($data['ruleDetails'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SDBudgetRuleDetails::class, 'json', $context));
                unset($data['ruleDetails']);
            }
            if (\array_key_exists('ruleId', $data)) {
                $object->setRuleId($data['ruleId']);
                unset($data['ruleId']);
            }
            if (\array_key_exists('ruleStatus', $data)) {
                $object->setRuleStatus($data['ruleStatus']);
                unset($data['ruleStatus']);
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
            if ($object->isInitialized('ruleState') && null !== $object->getRuleState()) {
                $data['ruleState'] = $object->getRuleState();
            }
            if ($object->isInitialized('lastUpdatedDate') && null !== $object->getLastUpdatedDate()) {
                $data['lastUpdatedDate'] = $object->getLastUpdatedDate();
            }
            if ($object->isInitialized('createdDate') && null !== $object->getCreatedDate()) {
                $data['createdDate'] = $object->getCreatedDate();
            }
            if ($object->isInitialized('ruleDetails') && null !== $object->getRuleDetails()) {
                $data['ruleDetails'] = $this->normalizer->normalize($object->getRuleDetails(), 'json', $context);
            }
            $data['ruleId'] = $object->getRuleId();
            if ($object->isInitialized('ruleStatus') && null !== $object->getRuleStatus()) {
                $data['ruleStatus'] = $object->getRuleStatus();
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
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SDBudgetRule::class => false];
        }
    }
} else {
    class SDBudgetRuleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SDBudgetRule::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SDBudgetRule::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SDBudgetRule();
            if (\array_key_exists('lastUpdatedDate', $data) && \is_int($data['lastUpdatedDate'])) {
                $data['lastUpdatedDate'] = (float) $data['lastUpdatedDate'];
            }
            if (\array_key_exists('createdDate', $data) && \is_int($data['createdDate'])) {
                $data['createdDate'] = (float) $data['createdDate'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ruleState', $data)) {
                $object->setRuleState($data['ruleState']);
                unset($data['ruleState']);
            }
            if (\array_key_exists('lastUpdatedDate', $data)) {
                $object->setLastUpdatedDate($data['lastUpdatedDate']);
                unset($data['lastUpdatedDate']);
            }
            if (\array_key_exists('createdDate', $data)) {
                $object->setCreatedDate($data['createdDate']);
                unset($data['createdDate']);
            }
            if (\array_key_exists('ruleDetails', $data)) {
                $object->setRuleDetails($this->denormalizer->denormalize($data['ruleDetails'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SDBudgetRuleDetails::class, 'json', $context));
                unset($data['ruleDetails']);
            }
            if (\array_key_exists('ruleId', $data)) {
                $object->setRuleId($data['ruleId']);
                unset($data['ruleId']);
            }
            if (\array_key_exists('ruleStatus', $data)) {
                $object->setRuleStatus($data['ruleStatus']);
                unset($data['ruleStatus']);
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
            if ($object->isInitialized('ruleState') && null !== $object->getRuleState()) {
                $data['ruleState'] = $object->getRuleState();
            }
            if ($object->isInitialized('lastUpdatedDate') && null !== $object->getLastUpdatedDate()) {
                $data['lastUpdatedDate'] = $object->getLastUpdatedDate();
            }
            if ($object->isInitialized('createdDate') && null !== $object->getCreatedDate()) {
                $data['createdDate'] = $object->getCreatedDate();
            }
            if ($object->isInitialized('ruleDetails') && null !== $object->getRuleDetails()) {
                $data['ruleDetails'] = $this->normalizer->normalize($object->getRuleDetails(), 'json', $context);
            }
            $data['ruleId'] = $object->getRuleId();
            if ($object->isInitialized('ruleStatus') && null !== $object->getRuleStatus()) {
                $data['ruleStatus'] = $object->getRuleStatus();
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
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SDBudgetRule::class => false];
        }
    }
}
