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
    class SponsoredProductsCreateTargetPromotionGroupsRequestContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCreateTargetPromotionGroupsRequestContent::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCreateTargetPromotionGroupsRequestContent::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCreateTargetPromotionGroupsRequestContent();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('adIds', $data)) {
                $values = [];
                foreach ($data['adIds'] as $value) {
                    $values[] = $value;
                }
                $object->setAdIds($values);
                unset($data['adIds']);
            }
            if (\array_key_exists('existingCampaignDetails', $data)) {
                $object->setExistingCampaignDetails($this->denormalizer->denormalize($data['existingCampaignDetails'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsExistingCampaignDetails::class, 'json', $context));
                unset($data['existingCampaignDetails']);
            }
            if (\array_key_exists('adGroupId', $data)) {
                $object->setAdGroupId($data['adGroupId']);
                unset($data['adGroupId']);
            }
            if (\array_key_exists('newCampaignDetails', $data)) {
                $object->setNewCampaignDetails($this->denormalizer->denormalize($data['newCampaignDetails'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsNewCampaignDetails::class, 'json', $context));
                unset($data['newCampaignDetails']);
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
            if ($object->isInitialized('adIds') && null !== $object->getAdIds()) {
                $values = [];
                foreach ($object->getAdIds() as $value) {
                    $values[] = $value;
                }
                $data['adIds'] = $values;
            }
            if ($object->isInitialized('existingCampaignDetails') && null !== $object->getExistingCampaignDetails()) {
                $data['existingCampaignDetails'] = $this->normalizer->normalize($object->getExistingCampaignDetails(), 'json', $context);
            }
            $data['adGroupId'] = $object->getAdGroupId();
            if ($object->isInitialized('newCampaignDetails') && null !== $object->getNewCampaignDetails()) {
                $data['newCampaignDetails'] = $this->normalizer->normalize($object->getNewCampaignDetails(), 'json', $context);
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
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCreateTargetPromotionGroupsRequestContent::class => false];
        }
    }
} else {
    class SponsoredProductsCreateTargetPromotionGroupsRequestContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCreateTargetPromotionGroupsRequestContent::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCreateTargetPromotionGroupsRequestContent::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCreateTargetPromotionGroupsRequestContent();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('adIds', $data)) {
                $values = [];
                foreach ($data['adIds'] as $value) {
                    $values[] = $value;
                }
                $object->setAdIds($values);
                unset($data['adIds']);
            }
            if (\array_key_exists('existingCampaignDetails', $data)) {
                $object->setExistingCampaignDetails($this->denormalizer->denormalize($data['existingCampaignDetails'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsExistingCampaignDetails::class, 'json', $context));
                unset($data['existingCampaignDetails']);
            }
            if (\array_key_exists('adGroupId', $data)) {
                $object->setAdGroupId($data['adGroupId']);
                unset($data['adGroupId']);
            }
            if (\array_key_exists('newCampaignDetails', $data)) {
                $object->setNewCampaignDetails($this->denormalizer->denormalize($data['newCampaignDetails'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsNewCampaignDetails::class, 'json', $context));
                unset($data['newCampaignDetails']);
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
            if ($object->isInitialized('adIds') && null !== $object->getAdIds()) {
                $values = [];
                foreach ($object->getAdIds() as $value) {
                    $values[] = $value;
                }
                $data['adIds'] = $values;
            }
            if ($object->isInitialized('existingCampaignDetails') && null !== $object->getExistingCampaignDetails()) {
                $data['existingCampaignDetails'] = $this->normalizer->normalize($object->getExistingCampaignDetails(), 'json', $context);
            }
            $data['adGroupId'] = $object->getAdGroupId();
            if ($object->isInitialized('newCampaignDetails') && null !== $object->getNewCampaignDetails()) {
                $data['newCampaignDetails'] = $this->normalizer->normalize($object->getNewCampaignDetails(), 'json', $context);
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
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCreateTargetPromotionGroupsRequestContent::class => false];
        }
    }
}
