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
    class SponsoredProductsGlobalKeywordNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsGlobalKeyword::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsGlobalKeyword::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsGlobalKeyword();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('keywordId', $data)) {
                $object->setKeywordId($data['keywordId']);
                unset($data['keywordId']);
            }
            if (\array_key_exists('campaignId', $data)) {
                $object->setCampaignId($data['campaignId']);
                unset($data['campaignId']);
            }
            if (\array_key_exists('matchType', $data)) {
                $object->setMatchType($data['matchType']);
                unset($data['matchType']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($this->denormalizer->denormalize($data['state'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsGlobalEntityState::class, 'json', $context));
                unset($data['state']);
            }
            if (\array_key_exists('bid', $data)) {
                $object->setBid($this->denormalizer->denormalize($data['bid'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsGlobalBid::class, 'json', $context));
                unset($data['bid']);
            }
            if (\array_key_exists('adGroupId', $data)) {
                $object->setAdGroupId($data['adGroupId']);
                unset($data['adGroupId']);
            }
            if (\array_key_exists('keywordText', $data)) {
                $object->setKeywordText($this->denormalizer->denormalize($data['keywordText'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsGlobalKeywordText::class, 'json', $context));
                unset($data['keywordText']);
            }
            if (\array_key_exists('extendedData', $data)) {
                $object->setExtendedData($this->denormalizer->denormalize($data['extendedData'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsGlobalKeywordExtendedData::class, 'json', $context));
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
            $data['keywordId'] = $object->getKeywordId();
            $data['campaignId'] = $object->getCampaignId();
            $data['matchType'] = $object->getMatchType();
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            $data['state'] = $this->normalizer->normalize($object->getState(), 'json', $context);
            $data['bid'] = $this->normalizer->normalize($object->getBid(), 'json', $context);
            $data['adGroupId'] = $object->getAdGroupId();
            $data['keywordText'] = $this->normalizer->normalize($object->getKeywordText(), 'json', $context);
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
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsGlobalKeyword::class => false];
        }
    }
} else {
    class SponsoredProductsGlobalKeywordNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsGlobalKeyword::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsGlobalKeyword::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsGlobalKeyword();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('keywordId', $data)) {
                $object->setKeywordId($data['keywordId']);
                unset($data['keywordId']);
            }
            if (\array_key_exists('campaignId', $data)) {
                $object->setCampaignId($data['campaignId']);
                unset($data['campaignId']);
            }
            if (\array_key_exists('matchType', $data)) {
                $object->setMatchType($data['matchType']);
                unset($data['matchType']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($this->denormalizer->denormalize($data['state'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsGlobalEntityState::class, 'json', $context));
                unset($data['state']);
            }
            if (\array_key_exists('bid', $data)) {
                $object->setBid($this->denormalizer->denormalize($data['bid'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsGlobalBid::class, 'json', $context));
                unset($data['bid']);
            }
            if (\array_key_exists('adGroupId', $data)) {
                $object->setAdGroupId($data['adGroupId']);
                unset($data['adGroupId']);
            }
            if (\array_key_exists('keywordText', $data)) {
                $object->setKeywordText($this->denormalizer->denormalize($data['keywordText'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsGlobalKeywordText::class, 'json', $context));
                unset($data['keywordText']);
            }
            if (\array_key_exists('extendedData', $data)) {
                $object->setExtendedData($this->denormalizer->denormalize($data['extendedData'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsGlobalKeywordExtendedData::class, 'json', $context));
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
            $data['keywordId'] = $object->getKeywordId();
            $data['campaignId'] = $object->getCampaignId();
            $data['matchType'] = $object->getMatchType();
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            $data['state'] = $this->normalizer->normalize($object->getState(), 'json', $context);
            $data['bid'] = $this->normalizer->normalize($object->getBid(), 'json', $context);
            $data['adGroupId'] = $object->getAdGroupId();
            $data['keywordText'] = $this->normalizer->normalize($object->getKeywordText(), 'json', $context);
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
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsGlobalKeyword::class => false];
        }
    }
}
