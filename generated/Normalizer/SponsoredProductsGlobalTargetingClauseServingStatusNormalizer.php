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
    class SponsoredProductsGlobalTargetingClauseServingStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsGlobalTargetingClauseServingStatus::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsGlobalTargetingClauseServingStatus::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsGlobalTargetingClauseServingStatus();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('statusReasons', $data)) {
                $values = [];
                foreach ($data['statusReasons'] as $value) {
                    $values[] = $value;
                }
                $object->setStatusReasons($values);
                unset($data['statusReasons']);
            }
            if (\array_key_exists('targetingClauseServingStatus', $data)) {
                $object->setTargetingClauseServingStatus($data['targetingClauseServingStatus']);
                unset($data['targetingClauseServingStatus']);
            }
            if (\array_key_exists('marketplaceTargetingClauseServingStatus', $data)) {
                $values_1 = [];
                foreach ($data['marketplaceTargetingClauseServingStatus'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsMarketplaceTargetingClauseServingStatus::class, 'json', $context);
                }
                $object->setMarketplaceTargetingClauseServingStatus($values_1);
                unset($data['marketplaceTargetingClauseServingStatus']);
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
            if ($object->isInitialized('statusReasons') && null !== $object->getStatusReasons()) {
                $values = [];
                foreach ($object->getStatusReasons() as $value) {
                    $values[] = $value;
                }
                $data['statusReasons'] = $values;
            }
            if ($object->isInitialized('targetingClauseServingStatus') && null !== $object->getTargetingClauseServingStatus()) {
                $data['targetingClauseServingStatus'] = $object->getTargetingClauseServingStatus();
            }
            if ($object->isInitialized('marketplaceTargetingClauseServingStatus') && null !== $object->getMarketplaceTargetingClauseServingStatus()) {
                $values_1 = [];
                foreach ($object->getMarketplaceTargetingClauseServingStatus() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['marketplaceTargetingClauseServingStatus'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsGlobalTargetingClauseServingStatus::class => false];
        }
    }
} else {
    class SponsoredProductsGlobalTargetingClauseServingStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsGlobalTargetingClauseServingStatus::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsGlobalTargetingClauseServingStatus::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsGlobalTargetingClauseServingStatus();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('statusReasons', $data)) {
                $values = [];
                foreach ($data['statusReasons'] as $value) {
                    $values[] = $value;
                }
                $object->setStatusReasons($values);
                unset($data['statusReasons']);
            }
            if (\array_key_exists('targetingClauseServingStatus', $data)) {
                $object->setTargetingClauseServingStatus($data['targetingClauseServingStatus']);
                unset($data['targetingClauseServingStatus']);
            }
            if (\array_key_exists('marketplaceTargetingClauseServingStatus', $data)) {
                $values_1 = [];
                foreach ($data['marketplaceTargetingClauseServingStatus'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsMarketplaceTargetingClauseServingStatus::class, 'json', $context);
                }
                $object->setMarketplaceTargetingClauseServingStatus($values_1);
                unset($data['marketplaceTargetingClauseServingStatus']);
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
            if ($object->isInitialized('statusReasons') && null !== $object->getStatusReasons()) {
                $values = [];
                foreach ($object->getStatusReasons() as $value) {
                    $values[] = $value;
                }
                $data['statusReasons'] = $values;
            }
            if ($object->isInitialized('targetingClauseServingStatus') && null !== $object->getTargetingClauseServingStatus()) {
                $data['targetingClauseServingStatus'] = $object->getTargetingClauseServingStatus();
            }
            if ($object->isInitialized('marketplaceTargetingClauseServingStatus') && null !== $object->getMarketplaceTargetingClauseServingStatus()) {
                $values_1 = [];
                foreach ($object->getMarketplaceTargetingClauseServingStatus() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['marketplaceTargetingClauseServingStatus'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsGlobalTargetingClauseServingStatus::class => false];
        }
    }
}
