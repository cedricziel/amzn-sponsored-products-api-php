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
    class SponsoredProductsCreateGlobalCampaignNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsCreateGlobalCampaign::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsCreateGlobalCampaign::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsCreateGlobalCampaign();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('endDate', $data)) {
                $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data['endDate'])->setTime(0, 0, 0));
                unset($data['endDate']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('targetingType', $data)) {
                $object->setTargetingType($data['targetingType']);
                unset($data['targetingType']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($this->denormalizer->denormalize($data['state'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsCreateOrUpdateGlobalEntityState::class, 'json', $context));
                unset($data['state']);
            }
            if (\array_key_exists('dynamicBidding', $data)) {
                $object->setDynamicBidding($this->denormalizer->denormalize($data['dynamicBidding'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsCreateOrUpdateDynamicBidding::class, 'json', $context));
                unset($data['dynamicBidding']);
            }
            if (\array_key_exists('startDate', $data)) {
                $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data['startDate'])->setTime(0, 0, 0));
                unset($data['startDate']);
            }
            if (\array_key_exists('budget', $data)) {
                $object->setBudget($this->denormalizer->denormalize($data['budget'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsGlobalBudget::class, 'json', $context));
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
            $data['name'] = $object->getName();
            $data['targetingType'] = $object->getTargetingType();
            $data['state'] = $this->normalizer->normalize($object->getState(), 'json', $context);
            if ($object->isInitialized('dynamicBidding') && null !== $object->getDynamicBidding()) {
                $data['dynamicBidding'] = $this->normalizer->normalize($object->getDynamicBidding(), 'json', $context);
            }
            if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
                $data['startDate'] = $object->getStartDate()->format('Y-m-d');
            }
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
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsCreateGlobalCampaign::class => false];
        }
    }
} else {
    class SponsoredProductsCreateGlobalCampaignNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsCreateGlobalCampaign::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsCreateGlobalCampaign::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsCreateGlobalCampaign();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('endDate', $data)) {
                $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data['endDate'])->setTime(0, 0, 0));
                unset($data['endDate']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('targetingType', $data)) {
                $object->setTargetingType($data['targetingType']);
                unset($data['targetingType']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($this->denormalizer->denormalize($data['state'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsCreateOrUpdateGlobalEntityState::class, 'json', $context));
                unset($data['state']);
            }
            if (\array_key_exists('dynamicBidding', $data)) {
                $object->setDynamicBidding($this->denormalizer->denormalize($data['dynamicBidding'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsCreateOrUpdateDynamicBidding::class, 'json', $context));
                unset($data['dynamicBidding']);
            }
            if (\array_key_exists('startDate', $data)) {
                $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data['startDate'])->setTime(0, 0, 0));
                unset($data['startDate']);
            }
            if (\array_key_exists('budget', $data)) {
                $object->setBudget($this->denormalizer->denormalize($data['budget'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsGlobalBudget::class, 'json', $context));
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
            $data['name'] = $object->getName();
            $data['targetingType'] = $object->getTargetingType();
            $data['state'] = $this->normalizer->normalize($object->getState(), 'json', $context);
            if ($object->isInitialized('dynamicBidding') && null !== $object->getDynamicBidding()) {
                $data['dynamicBidding'] = $this->normalizer->normalize($object->getDynamicBidding(), 'json', $context);
            }
            if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
                $data['startDate'] = $object->getStartDate()->format('Y-m-d');
            }
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
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsCreateGlobalCampaign::class => false];
        }
    }
}
