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
    class RuleDurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\RuleDuration::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\RuleDuration::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\RuleDuration();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('eventTypeRuleDuration', $data)) {
                $object->setEventTypeRuleDuration($this->denormalizer->denormalize($data['eventTypeRuleDuration'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\EventTypeRuleDuration::class, 'json', $context));
                unset($data['eventTypeRuleDuration']);
            }
            if (\array_key_exists('dateRangeTypeRuleDuration', $data)) {
                $object->setDateRangeTypeRuleDuration($this->denormalizer->denormalize($data['dateRangeTypeRuleDuration'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\DateRangeTypeRuleDuration::class, 'json', $context));
                unset($data['dateRangeTypeRuleDuration']);
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
            if ($object->isInitialized('eventTypeRuleDuration') && null !== $object->getEventTypeRuleDuration()) {
                $data['eventTypeRuleDuration'] = $this->normalizer->normalize($object->getEventTypeRuleDuration(), 'json', $context);
            }
            if ($object->isInitialized('dateRangeTypeRuleDuration') && null !== $object->getDateRangeTypeRuleDuration()) {
                $data['dateRangeTypeRuleDuration'] = $this->normalizer->normalize($object->getDateRangeTypeRuleDuration(), 'json', $context);
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
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\RuleDuration::class => false];
        }
    }
} else {
    class RuleDurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\RuleDuration::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\RuleDuration::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\RuleDuration();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('eventTypeRuleDuration', $data)) {
                $object->setEventTypeRuleDuration($this->denormalizer->denormalize($data['eventTypeRuleDuration'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\EventTypeRuleDuration::class, 'json', $context));
                unset($data['eventTypeRuleDuration']);
            }
            if (\array_key_exists('dateRangeTypeRuleDuration', $data)) {
                $object->setDateRangeTypeRuleDuration($this->denormalizer->denormalize($data['dateRangeTypeRuleDuration'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\DateRangeTypeRuleDuration::class, 'json', $context));
                unset($data['dateRangeTypeRuleDuration']);
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
            if ($object->isInitialized('eventTypeRuleDuration') && null !== $object->getEventTypeRuleDuration()) {
                $data['eventTypeRuleDuration'] = $this->normalizer->normalize($object->getEventTypeRuleDuration(), 'json', $context);
            }
            if ($object->isInitialized('dateRangeTypeRuleDuration') && null !== $object->getDateRangeTypeRuleDuration()) {
                $data['dateRangeTypeRuleDuration'] = $this->normalizer->normalize($object->getDateRangeTypeRuleDuration(), 'json', $context);
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
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\RuleDuration::class => false];
        }
    }
}
