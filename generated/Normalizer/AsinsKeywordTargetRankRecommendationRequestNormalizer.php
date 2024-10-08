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
    class AsinsKeywordTargetRankRecommendationRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\AsinsKeywordTargetRankRecommendationRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\AsinsKeywordTargetRankRecommendationRequest::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\AsinsKeywordTargetRankRecommendationRequest();
            if (\array_key_exists('maxRecommendations', $data) && \is_int($data['maxRecommendations'])) {
                $data['maxRecommendations'] = (float) $data['maxRecommendations'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('asins', $data)) {
                $values = [];
                foreach ($data['asins'] as $value) {
                    $values[] = $value;
                }
                $object->setAsins($values);
                unset($data['asins']);
            }
            if (\array_key_exists('recommendationType', $data)) {
                $object->setRecommendationType($data['recommendationType']);
                unset($data['recommendationType']);
            }
            if (\array_key_exists('targets', $data)) {
                $values_1 = [];
                foreach ($data['targets'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setTargets($values_1);
                unset($data['targets']);
            }
            if (\array_key_exists('maxRecommendations', $data)) {
                $object->setMaxRecommendations($data['maxRecommendations']);
                unset($data['maxRecommendations']);
            }
            if (\array_key_exists('sortDimension', $data)) {
                $object->setSortDimension($data['sortDimension']);
                unset($data['sortDimension']);
            }
            if (\array_key_exists('locale', $data)) {
                $object->setLocale($data['locale']);
                unset($data['locale']);
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
            $values = [];
            foreach ($object->getAsins() as $value) {
                $values[] = $value;
            }
            $data['asins'] = $values;
            $data['recommendationType'] = $object->getRecommendationType();
            if ($object->isInitialized('targets') && null !== $object->getTargets()) {
                $values_1 = [];
                foreach ($object->getTargets() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['targets'] = $values_1;
            }
            if ($object->isInitialized('maxRecommendations') && null !== $object->getMaxRecommendations()) {
                $data['maxRecommendations'] = $object->getMaxRecommendations();
            }
            if ($object->isInitialized('sortDimension') && null !== $object->getSortDimension()) {
                $data['sortDimension'] = $object->getSortDimension();
            }
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $data['locale'] = $object->getLocale();
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
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\AsinsKeywordTargetRankRecommendationRequest::class => false];
        }
    }
} else {
    class AsinsKeywordTargetRankRecommendationRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\AsinsKeywordTargetRankRecommendationRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\AsinsKeywordTargetRankRecommendationRequest::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\AsinsKeywordTargetRankRecommendationRequest();
            if (\array_key_exists('maxRecommendations', $data) && \is_int($data['maxRecommendations'])) {
                $data['maxRecommendations'] = (float) $data['maxRecommendations'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('asins', $data)) {
                $values = [];
                foreach ($data['asins'] as $value) {
                    $values[] = $value;
                }
                $object->setAsins($values);
                unset($data['asins']);
            }
            if (\array_key_exists('recommendationType', $data)) {
                $object->setRecommendationType($data['recommendationType']);
                unset($data['recommendationType']);
            }
            if (\array_key_exists('targets', $data)) {
                $values_1 = [];
                foreach ($data['targets'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setTargets($values_1);
                unset($data['targets']);
            }
            if (\array_key_exists('maxRecommendations', $data)) {
                $object->setMaxRecommendations($data['maxRecommendations']);
                unset($data['maxRecommendations']);
            }
            if (\array_key_exists('sortDimension', $data)) {
                $object->setSortDimension($data['sortDimension']);
                unset($data['sortDimension']);
            }
            if (\array_key_exists('locale', $data)) {
                $object->setLocale($data['locale']);
                unset($data['locale']);
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
            $values = [];
            foreach ($object->getAsins() as $value) {
                $values[] = $value;
            }
            $data['asins'] = $values;
            $data['recommendationType'] = $object->getRecommendationType();
            if ($object->isInitialized('targets') && null !== $object->getTargets()) {
                $values_1 = [];
                foreach ($object->getTargets() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['targets'] = $values_1;
            }
            if ($object->isInitialized('maxRecommendations') && null !== $object->getMaxRecommendations()) {
                $data['maxRecommendations'] = $object->getMaxRecommendations();
            }
            if ($object->isInitialized('sortDimension') && null !== $object->getSortDimension()) {
                $data['sortDimension'] = $object->getSortDimension();
            }
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $data['locale'] = $object->getLocale();
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
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\AsinsKeywordTargetRankRecommendationRequest::class => false];
        }
    }
}
