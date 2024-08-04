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
    class SponsoredProductsRecommendedTargetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsRecommendedTarget::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsRecommendedTarget::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsRecommendedTarget();
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
            if (\array_key_exists('targetType', $data)) {
                $object->setTargetType($data['targetType']);
                unset($data['targetType']);
            }
            if (\array_key_exists('adAsin', $data)) {
                $object->setAdAsin($data['adAsin']);
                unset($data['adAsin']);
            }
            if (\array_key_exists('recommendedTarget', $data)) {
                $object->setRecommendedTarget($data['recommendedTarget']);
                unset($data['recommendedTarget']);
            }
            if (\array_key_exists('adGroupId', $data)) {
                $object->setAdGroupId($data['adGroupId']);
                unset($data['adGroupId']);
            }
            if (\array_key_exists('recommendationReasons', $data)) {
                $values = [];
                foreach ($data['recommendationReasons'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsRecommendationReason::class, 'json', $context);
                }
                $object->setRecommendationReasons($values);
                unset($data['recommendationReasons']);
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
            if ($object->isInitialized('adId') && null !== $object->getAdId()) {
                $data['adId'] = $object->getAdId();
            }
            if ($object->isInitialized('campaignId') && null !== $object->getCampaignId()) {
                $data['campaignId'] = $object->getCampaignId();
            }
            if ($object->isInitialized('targetType') && null !== $object->getTargetType()) {
                $data['targetType'] = $object->getTargetType();
            }
            if ($object->isInitialized('adAsin') && null !== $object->getAdAsin()) {
                $data['adAsin'] = $object->getAdAsin();
            }
            if ($object->isInitialized('recommendedTarget') && null !== $object->getRecommendedTarget()) {
                $data['recommendedTarget'] = $object->getRecommendedTarget();
            }
            if ($object->isInitialized('adGroupId') && null !== $object->getAdGroupId()) {
                $data['adGroupId'] = $object->getAdGroupId();
            }
            if ($object->isInitialized('recommendationReasons') && null !== $object->getRecommendationReasons()) {
                $values = [];
                foreach ($object->getRecommendationReasons() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['recommendationReasons'] = $values;
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
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsRecommendedTarget::class => false];
        }
    }
} else {
    class SponsoredProductsRecommendedTargetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsRecommendedTarget::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsRecommendedTarget::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsRecommendedTarget();
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
            if (\array_key_exists('targetType', $data)) {
                $object->setTargetType($data['targetType']);
                unset($data['targetType']);
            }
            if (\array_key_exists('adAsin', $data)) {
                $object->setAdAsin($data['adAsin']);
                unset($data['adAsin']);
            }
            if (\array_key_exists('recommendedTarget', $data)) {
                $object->setRecommendedTarget($data['recommendedTarget']);
                unset($data['recommendedTarget']);
            }
            if (\array_key_exists('adGroupId', $data)) {
                $object->setAdGroupId($data['adGroupId']);
                unset($data['adGroupId']);
            }
            if (\array_key_exists('recommendationReasons', $data)) {
                $values = [];
                foreach ($data['recommendationReasons'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsRecommendationReason::class, 'json', $context);
                }
                $object->setRecommendationReasons($values);
                unset($data['recommendationReasons']);
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
            if ($object->isInitialized('adId') && null !== $object->getAdId()) {
                $data['adId'] = $object->getAdId();
            }
            if ($object->isInitialized('campaignId') && null !== $object->getCampaignId()) {
                $data['campaignId'] = $object->getCampaignId();
            }
            if ($object->isInitialized('targetType') && null !== $object->getTargetType()) {
                $data['targetType'] = $object->getTargetType();
            }
            if ($object->isInitialized('adAsin') && null !== $object->getAdAsin()) {
                $data['adAsin'] = $object->getAdAsin();
            }
            if ($object->isInitialized('recommendedTarget') && null !== $object->getRecommendedTarget()) {
                $data['recommendedTarget'] = $object->getRecommendedTarget();
            }
            if ($object->isInitialized('adGroupId') && null !== $object->getAdGroupId()) {
                $data['adGroupId'] = $object->getAdGroupId();
            }
            if ($object->isInitialized('recommendationReasons') && null !== $object->getRecommendationReasons()) {
                $values = [];
                foreach ($object->getRecommendationReasons() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['recommendationReasons'] = $values;
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
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsRecommendedTarget::class => false];
        }
    }
}
