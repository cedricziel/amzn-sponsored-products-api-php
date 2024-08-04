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
    class SponsoredProductsDraftCampaignNegativeKeywordSuccessResponseItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsDraftCampaignNegativeKeywordSuccessResponseItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsDraftCampaignNegativeKeywordSuccessResponseItem::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsDraftCampaignNegativeKeywordSuccessResponseItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('campaignNegativeKeyword', $data)) {
                $object->setCampaignNegativeKeyword($this->denormalizer->denormalize($data['campaignNegativeKeyword'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsDraftCampaignNegativeKeyword::class, 'json', $context));
                unset($data['campaignNegativeKeyword']);
            }
            if (\array_key_exists('campaignNegativeKeywordId', $data)) {
                $object->setCampaignNegativeKeywordId($data['campaignNegativeKeywordId']);
                unset($data['campaignNegativeKeywordId']);
            }
            if (\array_key_exists('index', $data)) {
                $object->setIndex($data['index']);
                unset($data['index']);
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
            if ($object->isInitialized('campaignNegativeKeyword') && null !== $object->getCampaignNegativeKeyword()) {
                $data['campaignNegativeKeyword'] = $this->normalizer->normalize($object->getCampaignNegativeKeyword(), 'json', $context);
            }
            if ($object->isInitialized('campaignNegativeKeywordId') && null !== $object->getCampaignNegativeKeywordId()) {
                $data['campaignNegativeKeywordId'] = $object->getCampaignNegativeKeywordId();
            }
            $data['index'] = $object->getIndex();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsDraftCampaignNegativeKeywordSuccessResponseItem::class => false];
        }
    }
} else {
    class SponsoredProductsDraftCampaignNegativeKeywordSuccessResponseItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsDraftCampaignNegativeKeywordSuccessResponseItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsDraftCampaignNegativeKeywordSuccessResponseItem::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsDraftCampaignNegativeKeywordSuccessResponseItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('campaignNegativeKeyword', $data)) {
                $object->setCampaignNegativeKeyword($this->denormalizer->denormalize($data['campaignNegativeKeyword'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsDraftCampaignNegativeKeyword::class, 'json', $context));
                unset($data['campaignNegativeKeyword']);
            }
            if (\array_key_exists('campaignNegativeKeywordId', $data)) {
                $object->setCampaignNegativeKeywordId($data['campaignNegativeKeywordId']);
                unset($data['campaignNegativeKeywordId']);
            }
            if (\array_key_exists('index', $data)) {
                $object->setIndex($data['index']);
                unset($data['index']);
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
            if ($object->isInitialized('campaignNegativeKeyword') && null !== $object->getCampaignNegativeKeyword()) {
                $data['campaignNegativeKeyword'] = $this->normalizer->normalize($object->getCampaignNegativeKeyword(), 'json', $context);
            }
            if ($object->isInitialized('campaignNegativeKeywordId') && null !== $object->getCampaignNegativeKeywordId()) {
                $data['campaignNegativeKeywordId'] = $object->getCampaignNegativeKeywordId();
            }
            $data['index'] = $object->getIndex();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsDraftCampaignNegativeKeywordSuccessResponseItem::class => false];
        }
    }
}
