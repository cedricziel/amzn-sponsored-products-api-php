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
    class SponsoredProductsDraftCampaignNegativeKeywordExtendedDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftCampaignNegativeKeywordExtendedData::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftCampaignNegativeKeywordExtendedData::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftCampaignNegativeKeywordExtendedData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('lastUpdateDateTime', $data)) {
                $object->setLastUpdateDateTime(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastUpdateDateTime']));
                unset($data['lastUpdateDateTime']);
            }
            if (\array_key_exists('servingStatus', $data)) {
                $object->setServingStatus($data['servingStatus']);
                unset($data['servingStatus']);
            }
            if (\array_key_exists('creationDateTime', $data)) {
                $object->setCreationDateTime(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['creationDateTime']));
                unset($data['creationDateTime']);
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
            if ($object->isInitialized('lastUpdateDateTime') && null !== $object->getLastUpdateDateTime()) {
                $data['lastUpdateDateTime'] = $object->getLastUpdateDateTime()->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('servingStatus') && null !== $object->getServingStatus()) {
                $data['servingStatus'] = $object->getServingStatus();
            }
            if ($object->isInitialized('creationDateTime') && null !== $object->getCreationDateTime()) {
                $data['creationDateTime'] = $object->getCreationDateTime()->format('Y-m-d\TH:i:sP');
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
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftCampaignNegativeKeywordExtendedData::class => false];
        }
    }
} else {
    class SponsoredProductsDraftCampaignNegativeKeywordExtendedDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftCampaignNegativeKeywordExtendedData::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftCampaignNegativeKeywordExtendedData::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftCampaignNegativeKeywordExtendedData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('lastUpdateDateTime', $data)) {
                $object->setLastUpdateDateTime(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastUpdateDateTime']));
                unset($data['lastUpdateDateTime']);
            }
            if (\array_key_exists('servingStatus', $data)) {
                $object->setServingStatus($data['servingStatus']);
                unset($data['servingStatus']);
            }
            if (\array_key_exists('creationDateTime', $data)) {
                $object->setCreationDateTime(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['creationDateTime']));
                unset($data['creationDateTime']);
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
            if ($object->isInitialized('lastUpdateDateTime') && null !== $object->getLastUpdateDateTime()) {
                $data['lastUpdateDateTime'] = $object->getLastUpdateDateTime()->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('servingStatus') && null !== $object->getServingStatus()) {
                $data['servingStatus'] = $object->getServingStatus();
            }
            if ($object->isInitialized('creationDateTime') && null !== $object->getCreationDateTime()) {
                $data['creationDateTime'] = $object->getCreationDateTime()->format('Y-m-d\TH:i:sP');
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
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftCampaignNegativeKeywordExtendedData::class => false];
        }
    }
}
