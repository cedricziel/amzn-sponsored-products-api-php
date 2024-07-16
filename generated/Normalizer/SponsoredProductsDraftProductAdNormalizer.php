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
    class SponsoredProductsDraftProductAdNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftProductAd::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftProductAd::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftProductAd();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('adId', $data)) {
                $object->setAdId($data['adId']);
                unset($data['adId']);
            }
            if (\array_key_exists('campaignId', $data)) {
                $object->setCampaignId($data['campaignId']);
                unset($data['campaignId']);
            }
            if (\array_key_exists('customText', $data)) {
                $object->setCustomText($data['customText']);
                unset($data['customText']);
            }
            if (\array_key_exists('asin', $data)) {
                $object->setAsin($data['asin']);
                unset($data['asin']);
            }
            if (\array_key_exists('sku', $data)) {
                $object->setSku($data['sku']);
                unset($data['sku']);
            }
            if (\array_key_exists('adGroupId', $data)) {
                $object->setAdGroupId($data['adGroupId']);
                unset($data['adGroupId']);
            }
            if (\array_key_exists('extendedData', $data)) {
                $object->setExtendedData($this->denormalizer->denormalize($data['extendedData'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftProductAdExtendedData::class, 'json', $context));
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
            $data['adId'] = $object->getAdId();
            $data['campaignId'] = $object->getCampaignId();
            if ($object->isInitialized('customText') && null !== $object->getCustomText()) {
                $data['customText'] = $object->getCustomText();
            }
            if ($object->isInitialized('asin') && null !== $object->getAsin()) {
                $data['asin'] = $object->getAsin();
            }
            if ($object->isInitialized('sku') && null !== $object->getSku()) {
                $data['sku'] = $object->getSku();
            }
            $data['adGroupId'] = $object->getAdGroupId();
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
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftProductAd::class => false];
        }
    }
} else {
    class SponsoredProductsDraftProductAdNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftProductAd::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftProductAd::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftProductAd();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('adId', $data)) {
                $object->setAdId($data['adId']);
                unset($data['adId']);
            }
            if (\array_key_exists('campaignId', $data)) {
                $object->setCampaignId($data['campaignId']);
                unset($data['campaignId']);
            }
            if (\array_key_exists('customText', $data)) {
                $object->setCustomText($data['customText']);
                unset($data['customText']);
            }
            if (\array_key_exists('asin', $data)) {
                $object->setAsin($data['asin']);
                unset($data['asin']);
            }
            if (\array_key_exists('sku', $data)) {
                $object->setSku($data['sku']);
                unset($data['sku']);
            }
            if (\array_key_exists('adGroupId', $data)) {
                $object->setAdGroupId($data['adGroupId']);
                unset($data['adGroupId']);
            }
            if (\array_key_exists('extendedData', $data)) {
                $object->setExtendedData($this->denormalizer->denormalize($data['extendedData'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftProductAdExtendedData::class, 'json', $context));
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
            $data['adId'] = $object->getAdId();
            $data['campaignId'] = $object->getCampaignId();
            if ($object->isInitialized('customText') && null !== $object->getCustomText()) {
                $data['customText'] = $object->getCustomText();
            }
            if ($object->isInitialized('asin') && null !== $object->getAsin()) {
                $data['asin'] = $object->getAsin();
            }
            if ($object->isInitialized('sku') && null !== $object->getSku()) {
                $data['sku'] = $object->getSku();
            }
            $data['adGroupId'] = $object->getAdGroupId();
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
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftProductAd::class => false];
        }
    }
}
