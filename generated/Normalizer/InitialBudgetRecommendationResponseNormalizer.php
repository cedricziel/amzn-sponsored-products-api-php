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
    class InitialBudgetRecommendationResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\InitialBudgetRecommendationResponse::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\InitialBudgetRecommendationResponse::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\InitialBudgetRecommendationResponse();
            if (\array_key_exists('dailyBudget', $data) && \is_int($data['dailyBudget'])) {
                $data['dailyBudget'] = (float) $data['dailyBudget'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('specialEvents', $data)) {
                $values = [];
                foreach ($data['specialEvents'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SpecialEvent::class, 'json', $context);
                }
                $object->setSpecialEvents($values);
                unset($data['specialEvents']);
            }
            if (\array_key_exists('dailyBudget', $data)) {
                $object->setDailyBudget($data['dailyBudget']);
                unset($data['dailyBudget']);
            }
            if (\array_key_exists('recommendationId', $data)) {
                $object->setRecommendationId($data['recommendationId']);
                unset($data['recommendationId']);
            }
            if (\array_key_exists('benchmark', $data)) {
                $object->setBenchmark($this->denormalizer->denormalize($data['benchmark'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\Benchmark::class, 'json', $context));
                unset($data['benchmark']);
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
            $values = [];
            foreach ($object->getSpecialEvents() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['specialEvents'] = $values;
            $data['dailyBudget'] = $object->getDailyBudget();
            if ($object->isInitialized('recommendationId') && null !== $object->getRecommendationId()) {
                $data['recommendationId'] = $object->getRecommendationId();
            }
            $data['benchmark'] = $this->normalizer->normalize($object->getBenchmark(), 'json', $context);
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\InitialBudgetRecommendationResponse::class => false];
        }
    }
} else {
    class InitialBudgetRecommendationResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\InitialBudgetRecommendationResponse::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\InitialBudgetRecommendationResponse::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\InitialBudgetRecommendationResponse();
            if (\array_key_exists('dailyBudget', $data) && \is_int($data['dailyBudget'])) {
                $data['dailyBudget'] = (float) $data['dailyBudget'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('specialEvents', $data)) {
                $values = [];
                foreach ($data['specialEvents'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SpecialEvent::class, 'json', $context);
                }
                $object->setSpecialEvents($values);
                unset($data['specialEvents']);
            }
            if (\array_key_exists('dailyBudget', $data)) {
                $object->setDailyBudget($data['dailyBudget']);
                unset($data['dailyBudget']);
            }
            if (\array_key_exists('recommendationId', $data)) {
                $object->setRecommendationId($data['recommendationId']);
                unset($data['recommendationId']);
            }
            if (\array_key_exists('benchmark', $data)) {
                $object->setBenchmark($this->denormalizer->denormalize($data['benchmark'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\Benchmark::class, 'json', $context));
                unset($data['benchmark']);
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
            $values = [];
            foreach ($object->getSpecialEvents() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['specialEvents'] = $values;
            $data['dailyBudget'] = $object->getDailyBudget();
            if ($object->isInitialized('recommendationId') && null !== $object->getRecommendationId()) {
                $data['recommendationId'] = $object->getRecommendationId();
            }
            $data['benchmark'] = $this->normalizer->normalize($object->getBenchmark(), 'json', $context);
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\InitialBudgetRecommendationResponse::class => false];
        }
    }
}
