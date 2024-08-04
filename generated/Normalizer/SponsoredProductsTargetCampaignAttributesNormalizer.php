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
    class SponsoredProductsTargetCampaignAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsTargetCampaignAttributes::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsTargetCampaignAttributes::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsTargetCampaignAttributes();
            if (\array_key_exists('budget', $data) && \is_int($data['budget'])) {
                $data['budget'] = (float) $data['budget'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('marketplaceId', $data)) {
                $object->setMarketplaceId($data['marketplaceId']);
                unset($data['marketplaceId']);
            }
            if (\array_key_exists('endDate', $data)) {
                $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data['endDate'])->setTime(0, 0, 0));
                unset($data['endDate']);
            }
            if (\array_key_exists('nameSuffix', $data)) {
                $object->setNameSuffix($data['nameSuffix']);
                unset($data['nameSuffix']);
            }
            if (\array_key_exists('startDate', $data)) {
                $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data['startDate'])->setTime(0, 0, 0));
                unset($data['startDate']);
            }
            if (\array_key_exists('advertiserId', $data)) {
                $object->setAdvertiserId($data['advertiserId']);
                unset($data['advertiserId']);
            }
            if (\array_key_exists('budget', $data)) {
                $object->setBudget($data['budget']);
                unset($data['budget']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
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
            $data['marketplaceId'] = $object->getMarketplaceId();
            if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
                $data['endDate'] = $object->getEndDate()->format('Y-m-d');
            }
            $data['nameSuffix'] = $object->getNameSuffix();
            if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
                $data['startDate'] = $object->getStartDate()->format('Y-m-d');
            }
            $data['advertiserId'] = $object->getAdvertiserId();
            if ($object->isInitialized('budget') && null !== $object->getBudget()) {
                $data['budget'] = $object->getBudget();
            }
            $data['status'] = $object->getStatus();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsTargetCampaignAttributes::class => false];
        }
    }
} else {
    class SponsoredProductsTargetCampaignAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsTargetCampaignAttributes::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsTargetCampaignAttributes::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsTargetCampaignAttributes();
            if (\array_key_exists('budget', $data) && \is_int($data['budget'])) {
                $data['budget'] = (float) $data['budget'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('marketplaceId', $data)) {
                $object->setMarketplaceId($data['marketplaceId']);
                unset($data['marketplaceId']);
            }
            if (\array_key_exists('endDate', $data)) {
                $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data['endDate'])->setTime(0, 0, 0));
                unset($data['endDate']);
            }
            if (\array_key_exists('nameSuffix', $data)) {
                $object->setNameSuffix($data['nameSuffix']);
                unset($data['nameSuffix']);
            }
            if (\array_key_exists('startDate', $data)) {
                $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data['startDate'])->setTime(0, 0, 0));
                unset($data['startDate']);
            }
            if (\array_key_exists('advertiserId', $data)) {
                $object->setAdvertiserId($data['advertiserId']);
                unset($data['advertiserId']);
            }
            if (\array_key_exists('budget', $data)) {
                $object->setBudget($data['budget']);
                unset($data['budget']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
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
            $data['marketplaceId'] = $object->getMarketplaceId();
            if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
                $data['endDate'] = $object->getEndDate()->format('Y-m-d');
            }
            $data['nameSuffix'] = $object->getNameSuffix();
            if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
                $data['startDate'] = $object->getStartDate()->format('Y-m-d');
            }
            $data['advertiserId'] = $object->getAdvertiserId();
            if ($object->isInitialized('budget') && null !== $object->getBudget()) {
                $data['budget'] = $object->getBudget();
            }
            $data['status'] = $object->getStatus();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsTargetCampaignAttributes::class => false];
        }
    }
}
