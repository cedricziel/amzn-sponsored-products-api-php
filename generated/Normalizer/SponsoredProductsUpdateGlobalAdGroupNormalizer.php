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
    class SponsoredProductsUpdateGlobalAdGroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsUpdateGlobalAdGroup::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsUpdateGlobalAdGroup::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsUpdateGlobalAdGroup();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('applicableMarketplaces', $data)) {
                $values = [];
                foreach ($data['applicableMarketplaces'] as $value) {
                    $values[] = $value;
                }
                $object->setApplicableMarketplaces($values);
                unset($data['applicableMarketplaces']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($this->denormalizer->denormalize($data['state'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsCreateOrUpdateGlobalEntityState::class, 'json', $context));
                unset($data['state']);
            }
            if (\array_key_exists('adGroupId', $data)) {
                $object->setAdGroupId($data['adGroupId']);
                unset($data['adGroupId']);
            }
            if (\array_key_exists('defaultBid', $data)) {
                $object->setDefaultBid($this->denormalizer->denormalize($data['defaultBid'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsGlobalBid::class, 'json', $context));
                unset($data['defaultBid']);
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
            if ($object->isInitialized('applicableMarketplaces') && null !== $object->getApplicableMarketplaces()) {
                $values = [];
                foreach ($object->getApplicableMarketplaces() as $value) {
                    $values[] = $value;
                }
                $data['applicableMarketplaces'] = $values;
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $this->normalizer->normalize($object->getState(), 'json', $context);
            }
            $data['adGroupId'] = $object->getAdGroupId();
            if ($object->isInitialized('defaultBid') && null !== $object->getDefaultBid()) {
                $data['defaultBid'] = $this->normalizer->normalize($object->getDefaultBid(), 'json', $context);
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
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsUpdateGlobalAdGroup::class => false];
        }
    }
} else {
    class SponsoredProductsUpdateGlobalAdGroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsUpdateGlobalAdGroup::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsUpdateGlobalAdGroup::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsUpdateGlobalAdGroup();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('applicableMarketplaces', $data)) {
                $values = [];
                foreach ($data['applicableMarketplaces'] as $value) {
                    $values[] = $value;
                }
                $object->setApplicableMarketplaces($values);
                unset($data['applicableMarketplaces']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($this->denormalizer->denormalize($data['state'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsCreateOrUpdateGlobalEntityState::class, 'json', $context));
                unset($data['state']);
            }
            if (\array_key_exists('adGroupId', $data)) {
                $object->setAdGroupId($data['adGroupId']);
                unset($data['adGroupId']);
            }
            if (\array_key_exists('defaultBid', $data)) {
                $object->setDefaultBid($this->denormalizer->denormalize($data['defaultBid'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsGlobalBid::class, 'json', $context));
                unset($data['defaultBid']);
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
            if ($object->isInitialized('applicableMarketplaces') && null !== $object->getApplicableMarketplaces()) {
                $values = [];
                foreach ($object->getApplicableMarketplaces() as $value) {
                    $values[] = $value;
                }
                $data['applicableMarketplaces'] = $values;
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $this->normalizer->normalize($object->getState(), 'json', $context);
            }
            $data['adGroupId'] = $object->getAdGroupId();
            if ($object->isInitialized('defaultBid') && null !== $object->getDefaultBid()) {
                $data['defaultBid'] = $this->normalizer->normalize($object->getDefaultBid(), 'json', $context);
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
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsUpdateGlobalAdGroup::class => false];
        }
    }
}
