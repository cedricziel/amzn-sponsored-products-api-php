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
    class InitialBudgetRecommendationRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\amznsponsoredproductsapiphp\Generated\Model\InitialBudgetRecommendationRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && cedricziel\amznsponsoredproductsapiphp\Generated\Model\InitialBudgetRecommendationRequest::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\InitialBudgetRecommendationRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('bidding', $data)) {
                $object->setBidding($this->denormalizer->denormalize($data['bidding'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\Bidding::class, 'json', $context));
                unset($data['bidding']);
            }
            if (\array_key_exists('adGroups', $data)) {
                $values = [];
                foreach ($data['adGroups'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \cedricziel\amznsponsoredproductsapiphp\Generated\Model\AdGroup::class, 'json', $context);
                }
                $object->setAdGroups($values);
                unset($data['adGroups']);
            }
            if (\array_key_exists('endDate', $data)) {
                $object->setEndDate($data['endDate']);
                unset($data['endDate']);
            }
            if (\array_key_exists('targetingType', $data)) {
                $object->setTargetingType($data['targetingType']);
                unset($data['targetingType']);
            }
            if (\array_key_exists('startDate', $data)) {
                $object->setStartDate($data['startDate']);
                unset($data['startDate']);
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
            $data['bidding'] = $this->normalizer->normalize($object->getBidding(), 'json', $context);
            $values = [];
            foreach ($object->getAdGroups() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['adGroups'] = $values;
            if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
                $data['endDate'] = $object->getEndDate();
            }
            $data['targetingType'] = $object->getTargetingType();
            if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
                $data['startDate'] = $object->getStartDate();
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
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\InitialBudgetRecommendationRequest::class => false];
        }
    }
} else {
    class InitialBudgetRecommendationRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\amznsponsoredproductsapiphp\Generated\Model\InitialBudgetRecommendationRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && cedricziel\amznsponsoredproductsapiphp\Generated\Model\InitialBudgetRecommendationRequest::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\InitialBudgetRecommendationRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('bidding', $data)) {
                $object->setBidding($this->denormalizer->denormalize($data['bidding'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\Bidding::class, 'json', $context));
                unset($data['bidding']);
            }
            if (\array_key_exists('adGroups', $data)) {
                $values = [];
                foreach ($data['adGroups'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \cedricziel\amznsponsoredproductsapiphp\Generated\Model\AdGroup::class, 'json', $context);
                }
                $object->setAdGroups($values);
                unset($data['adGroups']);
            }
            if (\array_key_exists('endDate', $data)) {
                $object->setEndDate($data['endDate']);
                unset($data['endDate']);
            }
            if (\array_key_exists('targetingType', $data)) {
                $object->setTargetingType($data['targetingType']);
                unset($data['targetingType']);
            }
            if (\array_key_exists('startDate', $data)) {
                $object->setStartDate($data['startDate']);
                unset($data['startDate']);
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
            $data['bidding'] = $this->normalizer->normalize($object->getBidding(), 'json', $context);
            $values = [];
            foreach ($object->getAdGroups() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['adGroups'] = $values;
            if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
                $data['endDate'] = $object->getEndDate();
            }
            $data['targetingType'] = $object->getTargetingType();
            if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
                $data['startDate'] = $object->getStartDate();
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
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\InitialBudgetRecommendationRequest::class => false];
        }
    }
}
