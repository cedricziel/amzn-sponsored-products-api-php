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
    class SponsoredProductsAdGroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsAdGroup::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsAdGroup::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsAdGroup();
            if (\array_key_exists('defaultBid', $data) && \is_int($data['defaultBid'])) {
                $data['defaultBid'] = (float) $data['defaultBid'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('campaignId', $data)) {
                $object->setCampaignId($data['campaignId']);
                unset($data['campaignId']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('adGroupId', $data)) {
                $object->setAdGroupId($data['adGroupId']);
                unset($data['adGroupId']);
            }
            if (\array_key_exists('defaultBid', $data)) {
                $object->setDefaultBid($data['defaultBid']);
                unset($data['defaultBid']);
            }
            if (\array_key_exists('extendedData', $data)) {
                $object->setExtendedData($this->denormalizer->denormalize($data['extendedData'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsAdGroupExtendedData::class, 'json', $context));
                unset($data['extendedData']);
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
            $data['campaignId'] = $object->getCampaignId();
            $data['name'] = $object->getName();
            $data['state'] = $object->getState();
            $data['adGroupId'] = $object->getAdGroupId();
            $data['defaultBid'] = $object->getDefaultBid();
            if ($object->isInitialized('extendedData') && null !== $object->getExtendedData()) {
                $data['extendedData'] = $this->normalizer->normalize($object->getExtendedData(), 'json', $context);
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
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsAdGroup::class => false];
        }
    }
} else {
    class SponsoredProductsAdGroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsAdGroup::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsAdGroup::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsAdGroup();
            if (\array_key_exists('defaultBid', $data) && \is_int($data['defaultBid'])) {
                $data['defaultBid'] = (float) $data['defaultBid'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('campaignId', $data)) {
                $object->setCampaignId($data['campaignId']);
                unset($data['campaignId']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('adGroupId', $data)) {
                $object->setAdGroupId($data['adGroupId']);
                unset($data['adGroupId']);
            }
            if (\array_key_exists('defaultBid', $data)) {
                $object->setDefaultBid($data['defaultBid']);
                unset($data['defaultBid']);
            }
            if (\array_key_exists('extendedData', $data)) {
                $object->setExtendedData($this->denormalizer->denormalize($data['extendedData'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsAdGroupExtendedData::class, 'json', $context));
                unset($data['extendedData']);
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
            $data['campaignId'] = $object->getCampaignId();
            $data['name'] = $object->getName();
            $data['state'] = $object->getState();
            $data['adGroupId'] = $object->getAdGroupId();
            $data['defaultBid'] = $object->getDefaultBid();
            if ($object->isInitialized('extendedData') && null !== $object->getExtendedData()) {
                $data['extendedData'] = $this->normalizer->normalize($object->getExtendedData(), 'json', $context);
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
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsAdGroup::class => false];
        }
    }
}
