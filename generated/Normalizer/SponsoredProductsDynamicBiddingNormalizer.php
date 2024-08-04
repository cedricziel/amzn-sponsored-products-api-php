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
    class SponsoredProductsDynamicBiddingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsDynamicBidding::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsDynamicBidding::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsDynamicBidding();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('shopperCohortBidding', $data)) {
                $values = [];
                foreach ($data['shopperCohortBidding'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsShopperCohortBidding::class, 'json', $context);
                }
                $object->setShopperCohortBidding($values);
                unset($data['shopperCohortBidding']);
            }
            if (\array_key_exists('placementBidding', $data)) {
                $values_1 = [];
                foreach ($data['placementBidding'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsPlacementBidding::class, 'json', $context);
                }
                $object->setPlacementBidding($values_1);
                unset($data['placementBidding']);
            }
            if (\array_key_exists('strategy', $data)) {
                $object->setStrategy($data['strategy']);
                unset($data['strategy']);
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
            if ($object->isInitialized('shopperCohortBidding') && null !== $object->getShopperCohortBidding()) {
                $values = [];
                foreach ($object->getShopperCohortBidding() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['shopperCohortBidding'] = $values;
            }
            if ($object->isInitialized('placementBidding') && null !== $object->getPlacementBidding()) {
                $values_1 = [];
                foreach ($object->getPlacementBidding() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['placementBidding'] = $values_1;
            }
            $data['strategy'] = $object->getStrategy();
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsDynamicBidding::class => false];
        }
    }
} else {
    class SponsoredProductsDynamicBiddingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsDynamicBidding::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsDynamicBidding::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsDynamicBidding();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('shopperCohortBidding', $data)) {
                $values = [];
                foreach ($data['shopperCohortBidding'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsShopperCohortBidding::class, 'json', $context);
                }
                $object->setShopperCohortBidding($values);
                unset($data['shopperCohortBidding']);
            }
            if (\array_key_exists('placementBidding', $data)) {
                $values_1 = [];
                foreach ($data['placementBidding'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsPlacementBidding::class, 'json', $context);
                }
                $object->setPlacementBidding($values_1);
                unset($data['placementBidding']);
            }
            if (\array_key_exists('strategy', $data)) {
                $object->setStrategy($data['strategy']);
                unset($data['strategy']);
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
            if ($object->isInitialized('shopperCohortBidding') && null !== $object->getShopperCohortBidding()) {
                $values = [];
                foreach ($object->getShopperCohortBidding() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['shopperCohortBidding'] = $values;
            }
            if ($object->isInitialized('placementBidding') && null !== $object->getPlacementBidding()) {
                $values_1 = [];
                foreach ($object->getPlacementBidding() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['placementBidding'] = $values_1;
            }
            $data['strategy'] = $object->getStrategy();
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsDynamicBidding::class => false];
        }
    }
}
