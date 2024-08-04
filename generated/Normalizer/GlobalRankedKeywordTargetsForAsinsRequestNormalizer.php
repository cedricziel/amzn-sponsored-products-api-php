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
    class GlobalRankedKeywordTargetsForAsinsRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\GlobalRankedKeywordTargetsForAsinsRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\GlobalRankedKeywordTargetsForAsinsRequest::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\GlobalRankedKeywordTargetsForAsinsRequest();
            if (\array_key_exists('maxRecommendations', $data) && \is_int($data['maxRecommendations'])) {
                $data['maxRecommendations'] = (float) $data['maxRecommendations'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('countryCodes', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['countryCodes'] as $key => $value) {
                    $values[$key] = $this->denormalizer->denormalize($value, \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\CountryWithTargetsAndAsins::class, 'json', $context);
                }
                $object->setCountryCodes($values);
                unset($data['countryCodes']);
            }
            if (\array_key_exists('biddingStrategy', $data)) {
                $object->setBiddingStrategy($data['biddingStrategy']);
                unset($data['biddingStrategy']);
            }
            if (\array_key_exists('recommendationType', $data)) {
                $object->setRecommendationType($data['recommendationType']);
                unset($data['recommendationType']);
            }
            if (\array_key_exists('bidsEnabled', $data)) {
                $object->setBidsEnabled($data['bidsEnabled']);
                unset($data['bidsEnabled']);
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
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $values = [];
            foreach ($object->getCountryCodes() as $key => $value) {
                $values[$key] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['countryCodes'] = $values;
            if ($object->isInitialized('biddingStrategy') && null !== $object->getBiddingStrategy()) {
                $data['biddingStrategy'] = $object->getBiddingStrategy();
            }
            if ($object->isInitialized('recommendationType') && null !== $object->getRecommendationType()) {
                $data['recommendationType'] = $object->getRecommendationType();
            }
            if ($object->isInitialized('bidsEnabled') && null !== $object->getBidsEnabled()) {
                $data['bidsEnabled'] = $object->getBidsEnabled();
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
            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\GlobalRankedKeywordTargetsForAsinsRequest::class => false];
        }
    }
} else {
    class GlobalRankedKeywordTargetsForAsinsRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\GlobalRankedKeywordTargetsForAsinsRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\GlobalRankedKeywordTargetsForAsinsRequest::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\GlobalRankedKeywordTargetsForAsinsRequest();
            if (\array_key_exists('maxRecommendations', $data) && \is_int($data['maxRecommendations'])) {
                $data['maxRecommendations'] = (float) $data['maxRecommendations'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('countryCodes', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['countryCodes'] as $key => $value) {
                    $values[$key] = $this->denormalizer->denormalize($value, \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\CountryWithTargetsAndAsins::class, 'json', $context);
                }
                $object->setCountryCodes($values);
                unset($data['countryCodes']);
            }
            if (\array_key_exists('biddingStrategy', $data)) {
                $object->setBiddingStrategy($data['biddingStrategy']);
                unset($data['biddingStrategy']);
            }
            if (\array_key_exists('recommendationType', $data)) {
                $object->setRecommendationType($data['recommendationType']);
                unset($data['recommendationType']);
            }
            if (\array_key_exists('bidsEnabled', $data)) {
                $object->setBidsEnabled($data['bidsEnabled']);
                unset($data['bidsEnabled']);
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
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
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
            foreach ($object->getCountryCodes() as $key => $value) {
                $values[$key] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['countryCodes'] = $values;
            if ($object->isInitialized('biddingStrategy') && null !== $object->getBiddingStrategy()) {
                $data['biddingStrategy'] = $object->getBiddingStrategy();
            }
            if ($object->isInitialized('recommendationType') && null !== $object->getRecommendationType()) {
                $data['recommendationType'] = $object->getRecommendationType();
            }
            if ($object->isInitialized('bidsEnabled') && null !== $object->getBidsEnabled()) {
                $data['bidsEnabled'] = $object->getBidsEnabled();
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
            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\GlobalRankedKeywordTargetsForAsinsRequest::class => false];
        }
    }
}
