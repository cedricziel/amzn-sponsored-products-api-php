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
    class SpecialEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SpecialEvent::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === cedricziel\amznsponsoredproductsapiphp\Generated\Model\SpecialEvent::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SpecialEvent();
            if (\array_key_exists('budgetModifier', $data) && \is_int($data['budgetModifier'])) {
                $data['budgetModifier'] = (float) $data['budgetModifier'];
            }
            if (\array_key_exists('dailyBudget', $data) && \is_int($data['dailyBudget'])) {
                $data['dailyBudget'] = (float) $data['dailyBudget'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('budgetModifier', $data)) {
                $object->setBudgetModifier($data['budgetModifier']);
                unset($data['budgetModifier']);
            }
            if (\array_key_exists('endDate', $data)) {
                $object->setEndDate($data['endDate']);
                unset($data['endDate']);
            }
            if (\array_key_exists('dailyBudget', $data)) {
                $object->setDailyBudget($data['dailyBudget']);
                unset($data['dailyBudget']);
            }
            if (\array_key_exists('eventKey', $data)) {
                $object->setEventKey($data['eventKey']);
                unset($data['eventKey']);
            }
            if (\array_key_exists('eventName', $data)) {
                $object->setEventName($data['eventName']);
                unset($data['eventName']);
            }
            if (\array_key_exists('startDate', $data)) {
                $object->setStartDate($data['startDate']);
                unset($data['startDate']);
            }
            if (\array_key_exists('benchmark', $data)) {
                $object->setBenchmark($this->denormalizer->denormalize($data['benchmark'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\Benchmark::class, 'json', $context));
                unset($data['benchmark']);
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
            if ($object->isInitialized('budgetModifier') && null !== $object->getBudgetModifier()) {
                $data['budgetModifier'] = $object->getBudgetModifier();
            }
            if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
                $data['endDate'] = $object->getEndDate();
            }
            if ($object->isInitialized('dailyBudget') && null !== $object->getDailyBudget()) {
                $data['dailyBudget'] = $object->getDailyBudget();
            }
            if ($object->isInitialized('eventKey') && null !== $object->getEventKey()) {
                $data['eventKey'] = $object->getEventKey();
            }
            if ($object->isInitialized('eventName') && null !== $object->getEventName()) {
                $data['eventName'] = $object->getEventName();
            }
            if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
                $data['startDate'] = $object->getStartDate();
            }
            if ($object->isInitialized('benchmark') && null !== $object->getBenchmark()) {
                $data['benchmark'] = $this->normalizer->normalize($object->getBenchmark(), 'json', $context);
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
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SpecialEvent::class => false];
        }
    }
} else {
    class SpecialEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SpecialEvent::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === cedricziel\amznsponsoredproductsapiphp\Generated\Model\SpecialEvent::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SpecialEvent();
            if (\array_key_exists('budgetModifier', $data) && \is_int($data['budgetModifier'])) {
                $data['budgetModifier'] = (float) $data['budgetModifier'];
            }
            if (\array_key_exists('dailyBudget', $data) && \is_int($data['dailyBudget'])) {
                $data['dailyBudget'] = (float) $data['dailyBudget'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('budgetModifier', $data)) {
                $object->setBudgetModifier($data['budgetModifier']);
                unset($data['budgetModifier']);
            }
            if (\array_key_exists('endDate', $data)) {
                $object->setEndDate($data['endDate']);
                unset($data['endDate']);
            }
            if (\array_key_exists('dailyBudget', $data)) {
                $object->setDailyBudget($data['dailyBudget']);
                unset($data['dailyBudget']);
            }
            if (\array_key_exists('eventKey', $data)) {
                $object->setEventKey($data['eventKey']);
                unset($data['eventKey']);
            }
            if (\array_key_exists('eventName', $data)) {
                $object->setEventName($data['eventName']);
                unset($data['eventName']);
            }
            if (\array_key_exists('startDate', $data)) {
                $object->setStartDate($data['startDate']);
                unset($data['startDate']);
            }
            if (\array_key_exists('benchmark', $data)) {
                $object->setBenchmark($this->denormalizer->denormalize($data['benchmark'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\Benchmark::class, 'json', $context));
                unset($data['benchmark']);
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
            if ($object->isInitialized('budgetModifier') && null !== $object->getBudgetModifier()) {
                $data['budgetModifier'] = $object->getBudgetModifier();
            }
            if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
                $data['endDate'] = $object->getEndDate();
            }
            if ($object->isInitialized('dailyBudget') && null !== $object->getDailyBudget()) {
                $data['dailyBudget'] = $object->getDailyBudget();
            }
            if ($object->isInitialized('eventKey') && null !== $object->getEventKey()) {
                $data['eventKey'] = $object->getEventKey();
            }
            if ($object->isInitialized('eventName') && null !== $object->getEventName()) {
                $data['eventName'] = $object->getEventName();
            }
            if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
                $data['startDate'] = $object->getStartDate();
            }
            if ($object->isInitialized('benchmark') && null !== $object->getBenchmark()) {
                $data['benchmark'] = $this->normalizer->normalize($object->getBenchmark(), 'json', $context);
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
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SpecialEvent::class => false];
        }
    }
}
