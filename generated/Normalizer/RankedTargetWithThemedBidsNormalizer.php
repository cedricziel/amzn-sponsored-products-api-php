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
    class RankedTargetWithThemedBidsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\RankedTargetWithThemedBids::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\RankedTargetWithThemedBids::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\RankedTargetWithThemedBids();
            if (\array_key_exists('searchTermImpressionShare', $data) && \is_int($data['searchTermImpressionShare'])) {
                $data['searchTermImpressionShare'] = (float) $data['searchTermImpressionShare'];
            }
            if (\array_key_exists('searchTermImpressionRank', $data) && \is_int($data['searchTermImpressionRank'])) {
                $data['searchTermImpressionRank'] = (float) $data['searchTermImpressionRank'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('searchTermImpressionShare', $data)) {
                $object->setSearchTermImpressionShare($data['searchTermImpressionShare']);
                unset($data['searchTermImpressionShare']);
            }
            if (\array_key_exists('translation', $data)) {
                $object->setTranslation($data['translation']);
                unset($data['translation']);
            }
            if (\array_key_exists('bidInfo', $data)) {
                $values = [];
                foreach ($data['bidInfo'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\RankedTargetWithThemedBidsBidInfoItem::class, 'json', $context);
                }
                $object->setBidInfo($values);
                unset($data['bidInfo']);
            }
            if (\array_key_exists('searchTermImpressionRank', $data)) {
                $object->setSearchTermImpressionRank($data['searchTermImpressionRank']);
                unset($data['searchTermImpressionRank']);
            }
            if (\array_key_exists('keyword', $data)) {
                $object->setKeyword($data['keyword']);
                unset($data['keyword']);
            }
            if (\array_key_exists('userSelectedKeyword', $data)) {
                $object->setUserSelectedKeyword($data['userSelectedKeyword']);
                unset($data['userSelectedKeyword']);
            }
            if (\array_key_exists('recId', $data)) {
                $object->setRecId($data['recId']);
                unset($data['recId']);
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
            if ($object->isInitialized('searchTermImpressionShare') && null !== $object->getSearchTermImpressionShare()) {
                $data['searchTermImpressionShare'] = $object->getSearchTermImpressionShare();
            }
            if ($object->isInitialized('translation') && null !== $object->getTranslation()) {
                $data['translation'] = $object->getTranslation();
            }
            if ($object->isInitialized('bidInfo') && null !== $object->getBidInfo()) {
                $values = [];
                foreach ($object->getBidInfo() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['bidInfo'] = $values;
            }
            if ($object->isInitialized('searchTermImpressionRank') && null !== $object->getSearchTermImpressionRank()) {
                $data['searchTermImpressionRank'] = $object->getSearchTermImpressionRank();
            }
            if ($object->isInitialized('keyword') && null !== $object->getKeyword()) {
                $data['keyword'] = $object->getKeyword();
            }
            if ($object->isInitialized('userSelectedKeyword') && null !== $object->getUserSelectedKeyword()) {
                $data['userSelectedKeyword'] = $object->getUserSelectedKeyword();
            }
            if ($object->isInitialized('recId') && null !== $object->getRecId()) {
                $data['recId'] = $object->getRecId();
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
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\RankedTargetWithThemedBids::class => false];
        }
    }
} else {
    class RankedTargetWithThemedBidsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\RankedTargetWithThemedBids::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\RankedTargetWithThemedBids::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\RankedTargetWithThemedBids();
            if (\array_key_exists('searchTermImpressionShare', $data) && \is_int($data['searchTermImpressionShare'])) {
                $data['searchTermImpressionShare'] = (float) $data['searchTermImpressionShare'];
            }
            if (\array_key_exists('searchTermImpressionRank', $data) && \is_int($data['searchTermImpressionRank'])) {
                $data['searchTermImpressionRank'] = (float) $data['searchTermImpressionRank'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('searchTermImpressionShare', $data)) {
                $object->setSearchTermImpressionShare($data['searchTermImpressionShare']);
                unset($data['searchTermImpressionShare']);
            }
            if (\array_key_exists('translation', $data)) {
                $object->setTranslation($data['translation']);
                unset($data['translation']);
            }
            if (\array_key_exists('bidInfo', $data)) {
                $values = [];
                foreach ($data['bidInfo'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\RankedTargetWithThemedBidsBidInfoItem::class, 'json', $context);
                }
                $object->setBidInfo($values);
                unset($data['bidInfo']);
            }
            if (\array_key_exists('searchTermImpressionRank', $data)) {
                $object->setSearchTermImpressionRank($data['searchTermImpressionRank']);
                unset($data['searchTermImpressionRank']);
            }
            if (\array_key_exists('keyword', $data)) {
                $object->setKeyword($data['keyword']);
                unset($data['keyword']);
            }
            if (\array_key_exists('userSelectedKeyword', $data)) {
                $object->setUserSelectedKeyword($data['userSelectedKeyword']);
                unset($data['userSelectedKeyword']);
            }
            if (\array_key_exists('recId', $data)) {
                $object->setRecId($data['recId']);
                unset($data['recId']);
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
            if ($object->isInitialized('searchTermImpressionShare') && null !== $object->getSearchTermImpressionShare()) {
                $data['searchTermImpressionShare'] = $object->getSearchTermImpressionShare();
            }
            if ($object->isInitialized('translation') && null !== $object->getTranslation()) {
                $data['translation'] = $object->getTranslation();
            }
            if ($object->isInitialized('bidInfo') && null !== $object->getBidInfo()) {
                $values = [];
                foreach ($object->getBidInfo() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['bidInfo'] = $values;
            }
            if ($object->isInitialized('searchTermImpressionRank') && null !== $object->getSearchTermImpressionRank()) {
                $data['searchTermImpressionRank'] = $object->getSearchTermImpressionRank();
            }
            if ($object->isInitialized('keyword') && null !== $object->getKeyword()) {
                $data['keyword'] = $object->getKeyword();
            }
            if ($object->isInitialized('userSelectedKeyword') && null !== $object->getUserSelectedKeyword()) {
                $data['userSelectedKeyword'] = $object->getUserSelectedKeyword();
            }
            if ($object->isInitialized('recId') && null !== $object->getRecId()) {
                $data['recId'] = $object->getRecId();
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
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\RankedTargetWithThemedBids::class => false];
        }
    }
}
