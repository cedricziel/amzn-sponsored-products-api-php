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
    class SponsoredProductsListTargetPromotionGroupsResponseContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsListTargetPromotionGroupsResponseContent::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsListTargetPromotionGroupsResponseContent::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsListTargetPromotionGroupsResponseContent();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('totalResults', $data)) {
                $object->setTotalResults($data['totalResults']);
                unset($data['totalResults']);
            }
            if (\array_key_exists('nextToken', $data)) {
                $object->setNextToken($data['nextToken']);
                unset($data['nextToken']);
            }
            if (\array_key_exists('targetPromotionGroups', $data)) {
                $values = [];
                foreach ($data['targetPromotionGroups'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsTargetPromotionGroup::class, 'json', $context);
                }
                $object->setTargetPromotionGroups($values);
                unset($data['targetPromotionGroups']);
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
            if ($object->isInitialized('totalResults') && null !== $object->getTotalResults()) {
                $data['totalResults'] = $object->getTotalResults();
            }
            if ($object->isInitialized('nextToken') && null !== $object->getNextToken()) {
                $data['nextToken'] = $object->getNextToken();
            }
            if ($object->isInitialized('targetPromotionGroups') && null !== $object->getTargetPromotionGroups()) {
                $values = [];
                foreach ($object->getTargetPromotionGroups() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['targetPromotionGroups'] = $values;
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
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsListTargetPromotionGroupsResponseContent::class => false];
        }
    }
} else {
    class SponsoredProductsListTargetPromotionGroupsResponseContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsListTargetPromotionGroupsResponseContent::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsListTargetPromotionGroupsResponseContent::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsListTargetPromotionGroupsResponseContent();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('totalResults', $data)) {
                $object->setTotalResults($data['totalResults']);
                unset($data['totalResults']);
            }
            if (\array_key_exists('nextToken', $data)) {
                $object->setNextToken($data['nextToken']);
                unset($data['nextToken']);
            }
            if (\array_key_exists('targetPromotionGroups', $data)) {
                $values = [];
                foreach ($data['targetPromotionGroups'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsTargetPromotionGroup::class, 'json', $context);
                }
                $object->setTargetPromotionGroups($values);
                unset($data['targetPromotionGroups']);
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
            if ($object->isInitialized('totalResults') && null !== $object->getTotalResults()) {
                $data['totalResults'] = $object->getTotalResults();
            }
            if ($object->isInitialized('nextToken') && null !== $object->getNextToken()) {
                $data['nextToken'] = $object->getNextToken();
            }
            if ($object->isInitialized('targetPromotionGroups') && null !== $object->getTargetPromotionGroups()) {
                $values = [];
                foreach ($object->getTargetPromotionGroups() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['targetPromotionGroups'] = $values;
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
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsListTargetPromotionGroupsResponseContent::class => false];
        }
    }
}
