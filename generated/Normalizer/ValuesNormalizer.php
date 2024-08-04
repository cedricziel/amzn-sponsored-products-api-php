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
    class ValuesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\Values::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\Values::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\Values();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('conversions', $data)) {
                $object->setConversions($this->denormalizer->denormalize($data['conversions'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\Conversions::class, 'json', $context));
                unset($data['conversions']);
            }
            if (\array_key_exists('clicks', $data)) {
                $object->setClicks($this->denormalizer->denormalize($data['clicks'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\Clicks::class, 'json', $context));
                unset($data['clicks']);
            }
            if (\array_key_exists('impressions', $data)) {
                $object->setImpressions($this->denormalizer->denormalize($data['impressions'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\Impressions::class, 'json', $context));
                unset($data['impressions']);
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
            if ($object->isInitialized('conversions') && null !== $object->getConversions()) {
                $data['conversions'] = $this->normalizer->normalize($object->getConversions(), 'json', $context);
            }
            if ($object->isInitialized('clicks') && null !== $object->getClicks()) {
                $data['clicks'] = $this->normalizer->normalize($object->getClicks(), 'json', $context);
            }
            if ($object->isInitialized('impressions') && null !== $object->getImpressions()) {
                $data['impressions'] = $this->normalizer->normalize($object->getImpressions(), 'json', $context);
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
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\Values::class => false];
        }
    }
} else {
    class ValuesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\Values::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\Values::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\Values();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('conversions', $data)) {
                $object->setConversions($this->denormalizer->denormalize($data['conversions'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\Conversions::class, 'json', $context));
                unset($data['conversions']);
            }
            if (\array_key_exists('clicks', $data)) {
                $object->setClicks($this->denormalizer->denormalize($data['clicks'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\Clicks::class, 'json', $context));
                unset($data['clicks']);
            }
            if (\array_key_exists('impressions', $data)) {
                $object->setImpressions($this->denormalizer->denormalize($data['impressions'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\Impressions::class, 'json', $context));
                unset($data['impressions']);
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
            if ($object->isInitialized('conversions') && null !== $object->getConversions()) {
                $data['conversions'] = $this->normalizer->normalize($object->getConversions(), 'json', $context);
            }
            if ($object->isInitialized('clicks') && null !== $object->getClicks()) {
                $data['clicks'] = $this->normalizer->normalize($object->getClicks(), 'json', $context);
            }
            if ($object->isInitialized('impressions') && null !== $object->getImpressions()) {
                $data['impressions'] = $this->normalizer->normalize($object->getImpressions(), 'json', $context);
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
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\Values::class => false];
        }
    }
}
