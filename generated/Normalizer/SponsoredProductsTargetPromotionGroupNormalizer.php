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
    class SponsoredProductsTargetPromotionGroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsTargetPromotionGroup::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsTargetPromotionGroup::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsTargetPromotionGroup();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('productCampaignAdGroupIds', $data)) {
                $values = [];
                foreach ($data['productCampaignAdGroupIds'] as $value) {
                    $values[] = $value;
                }
                $object->setProductCampaignAdGroupIds($values);
                unset($data['productCampaignAdGroupIds']);
            }
            if (\array_key_exists('targetPromotionGroupId', $data)) {
                $object->setTargetPromotionGroupId($data['targetPromotionGroupId']);
                unset($data['targetPromotionGroupId']);
            }
            if (\array_key_exists('autoTargetingCampaignAdIds', $data)) {
                $values_1 = [];
                foreach ($data['autoTargetingCampaignAdIds'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setAutoTargetingCampaignAdIds($values_1);
                unset($data['autoTargetingCampaignAdIds']);
            }
            if (\array_key_exists('keywordCampaignAdGroupIds', $data)) {
                $values_2 = [];
                foreach ($data['keywordCampaignAdGroupIds'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setKeywordCampaignAdGroupIds($values_2);
                unset($data['keywordCampaignAdGroupIds']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('targetPromotionGroupName', $data)) {
                $object->setTargetPromotionGroupName($data['targetPromotionGroupName']);
                unset($data['targetPromotionGroupName']);
            }
            if (\array_key_exists('autoTargetingCampaignAdGroupId', $data)) {
                $object->setAutoTargetingCampaignAdGroupId($data['autoTargetingCampaignAdGroupId']);
                unset($data['autoTargetingCampaignAdGroupId']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('productCampaignAdGroupIds') && null !== $object->getProductCampaignAdGroupIds()) {
                $values = [];
                foreach ($object->getProductCampaignAdGroupIds() as $value) {
                    $values[] = $value;
                }
                $data['productCampaignAdGroupIds'] = $values;
            }
            if ($object->isInitialized('targetPromotionGroupId') && null !== $object->getTargetPromotionGroupId()) {
                $data['targetPromotionGroupId'] = $object->getTargetPromotionGroupId();
            }
            if ($object->isInitialized('autoTargetingCampaignAdIds') && null !== $object->getAutoTargetingCampaignAdIds()) {
                $values_1 = [];
                foreach ($object->getAutoTargetingCampaignAdIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['autoTargetingCampaignAdIds'] = $values_1;
            }
            if ($object->isInitialized('keywordCampaignAdGroupIds') && null !== $object->getKeywordCampaignAdGroupIds()) {
                $values_2 = [];
                foreach ($object->getKeywordCampaignAdGroupIds() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['keywordCampaignAdGroupIds'] = $values_2;
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            if ($object->isInitialized('targetPromotionGroupName') && null !== $object->getTargetPromotionGroupName()) {
                $data['targetPromotionGroupName'] = $object->getTargetPromotionGroupName();
            }
            if ($object->isInitialized('autoTargetingCampaignAdGroupId') && null !== $object->getAutoTargetingCampaignAdGroupId()) {
                $data['autoTargetingCampaignAdGroupId'] = $object->getAutoTargetingCampaignAdGroupId();
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsTargetPromotionGroup::class => false];
        }
    }
} else {
    class SponsoredProductsTargetPromotionGroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsTargetPromotionGroup::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsTargetPromotionGroup::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsTargetPromotionGroup();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('productCampaignAdGroupIds', $data)) {
                $values = [];
                foreach ($data['productCampaignAdGroupIds'] as $value) {
                    $values[] = $value;
                }
                $object->setProductCampaignAdGroupIds($values);
                unset($data['productCampaignAdGroupIds']);
            }
            if (\array_key_exists('targetPromotionGroupId', $data)) {
                $object->setTargetPromotionGroupId($data['targetPromotionGroupId']);
                unset($data['targetPromotionGroupId']);
            }
            if (\array_key_exists('autoTargetingCampaignAdIds', $data)) {
                $values_1 = [];
                foreach ($data['autoTargetingCampaignAdIds'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setAutoTargetingCampaignAdIds($values_1);
                unset($data['autoTargetingCampaignAdIds']);
            }
            if (\array_key_exists('keywordCampaignAdGroupIds', $data)) {
                $values_2 = [];
                foreach ($data['keywordCampaignAdGroupIds'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setKeywordCampaignAdGroupIds($values_2);
                unset($data['keywordCampaignAdGroupIds']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('targetPromotionGroupName', $data)) {
                $object->setTargetPromotionGroupName($data['targetPromotionGroupName']);
                unset($data['targetPromotionGroupName']);
            }
            if (\array_key_exists('autoTargetingCampaignAdGroupId', $data)) {
                $object->setAutoTargetingCampaignAdGroupId($data['autoTargetingCampaignAdGroupId']);
                unset($data['autoTargetingCampaignAdGroupId']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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
            if ($object->isInitialized('productCampaignAdGroupIds') && null !== $object->getProductCampaignAdGroupIds()) {
                $values = [];
                foreach ($object->getProductCampaignAdGroupIds() as $value) {
                    $values[] = $value;
                }
                $data['productCampaignAdGroupIds'] = $values;
            }
            if ($object->isInitialized('targetPromotionGroupId') && null !== $object->getTargetPromotionGroupId()) {
                $data['targetPromotionGroupId'] = $object->getTargetPromotionGroupId();
            }
            if ($object->isInitialized('autoTargetingCampaignAdIds') && null !== $object->getAutoTargetingCampaignAdIds()) {
                $values_1 = [];
                foreach ($object->getAutoTargetingCampaignAdIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['autoTargetingCampaignAdIds'] = $values_1;
            }
            if ($object->isInitialized('keywordCampaignAdGroupIds') && null !== $object->getKeywordCampaignAdGroupIds()) {
                $values_2 = [];
                foreach ($object->getKeywordCampaignAdGroupIds() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['keywordCampaignAdGroupIds'] = $values_2;
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            if ($object->isInitialized('targetPromotionGroupName') && null !== $object->getTargetPromotionGroupName()) {
                $data['targetPromotionGroupName'] = $object->getTargetPromotionGroupName();
            }
            if ($object->isInitialized('autoTargetingCampaignAdGroupId') && null !== $object->getAutoTargetingCampaignAdGroupId()) {
                $data['autoTargetingCampaignAdGroupId'] = $object->getAutoTargetingCampaignAdGroupId();
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsTargetPromotionGroup::class => false];
        }
    }
}
