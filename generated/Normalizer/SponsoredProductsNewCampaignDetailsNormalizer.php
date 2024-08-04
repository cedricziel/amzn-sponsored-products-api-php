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
    class SponsoredProductsNewCampaignDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsNewCampaignDetails::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsNewCampaignDetails::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsNewCampaignDetails();
            if (\array_key_exists('defaultBid', $data) && \is_int($data['defaultBid'])) {
                $data['defaultBid'] = (float) $data['defaultBid'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('endDate', $data)) {
                $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data['endDate'])->setTime(0, 0, 0));
                unset($data['endDate']);
            }
            if (\array_key_exists('namePrefix', $data)) {
                $object->setNamePrefix($data['namePrefix']);
                unset($data['namePrefix']);
            }
            if (\array_key_exists('dynamicBidding', $data)) {
                $object->setDynamicBidding($this->denormalizer->denormalize($data['dynamicBidding'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsNewCampaignDynamicBidding::class, 'json', $context));
                unset($data['dynamicBidding']);
            }
            if (\array_key_exists('startDate', $data)) {
                $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data['startDate'])->setTime(0, 0, 0));
                unset($data['startDate']);
            }
            if (\array_key_exists('defaultBid', $data)) {
                $object->setDefaultBid($data['defaultBid']);
                unset($data['defaultBid']);
            }
            if (\array_key_exists('budget', $data)) {
                $object->setBudget($this->denormalizer->denormalize($data['budget'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsNewCampaignBudget::class, 'json', $context));
                unset($data['budget']);
            }
            if (\array_key_exists('tags', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['tags'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setTags($values);
                unset($data['tags']);
            }
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
                $data['endDate'] = $object->getEndDate()->format('Y-m-d');
            }
            $data['namePrefix'] = $object->getNamePrefix();
            if ($object->isInitialized('dynamicBidding') && null !== $object->getDynamicBidding()) {
                $data['dynamicBidding'] = $this->normalizer->normalize($object->getDynamicBidding(), 'json', $context);
            }
            if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
                $data['startDate'] = $object->getStartDate()->format('Y-m-d');
            }
            $data['defaultBid'] = $object->getDefaultBid();
            $data['budget'] = $this->normalizer->normalize($object->getBudget(), 'json', $context);
            if ($object->isInitialized('tags') && null !== $object->getTags()) {
                $values = [];
                foreach ($object->getTags() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['tags'] = $values;
            }
            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsNewCampaignDetails::class => false];
        }
    }
} else {
    class SponsoredProductsNewCampaignDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsNewCampaignDetails::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsNewCampaignDetails::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsNewCampaignDetails();
            if (\array_key_exists('defaultBid', $data) && \is_int($data['defaultBid'])) {
                $data['defaultBid'] = (float) $data['defaultBid'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('endDate', $data)) {
                $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data['endDate'])->setTime(0, 0, 0));
                unset($data['endDate']);
            }
            if (\array_key_exists('namePrefix', $data)) {
                $object->setNamePrefix($data['namePrefix']);
                unset($data['namePrefix']);
            }
            if (\array_key_exists('dynamicBidding', $data)) {
                $object->setDynamicBidding($this->denormalizer->denormalize($data['dynamicBidding'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsNewCampaignDynamicBidding::class, 'json', $context));
                unset($data['dynamicBidding']);
            }
            if (\array_key_exists('startDate', $data)) {
                $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data['startDate'])->setTime(0, 0, 0));
                unset($data['startDate']);
            }
            if (\array_key_exists('defaultBid', $data)) {
                $object->setDefaultBid($data['defaultBid']);
                unset($data['defaultBid']);
            }
            if (\array_key_exists('budget', $data)) {
                $object->setBudget($this->denormalizer->denormalize($data['budget'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsNewCampaignBudget::class, 'json', $context));
                unset($data['budget']);
            }
            if (\array_key_exists('tags', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['tags'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setTags($values);
                unset($data['tags']);
            }
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
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
            if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
                $data['endDate'] = $object->getEndDate()->format('Y-m-d');
            }
            $data['namePrefix'] = $object->getNamePrefix();
            if ($object->isInitialized('dynamicBidding') && null !== $object->getDynamicBidding()) {
                $data['dynamicBidding'] = $this->normalizer->normalize($object->getDynamicBidding(), 'json', $context);
            }
            if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
                $data['startDate'] = $object->getStartDate()->format('Y-m-d');
            }
            $data['defaultBid'] = $object->getDefaultBid();
            $data['budget'] = $this->normalizer->normalize($object->getBudget(), 'json', $context);
            if ($object->isInitialized('tags') && null !== $object->getTags()) {
                $values = [];
                foreach ($object->getTags() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['tags'] = $values;
            }
            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsNewCampaignDetails::class => false];
        }
    }
}
