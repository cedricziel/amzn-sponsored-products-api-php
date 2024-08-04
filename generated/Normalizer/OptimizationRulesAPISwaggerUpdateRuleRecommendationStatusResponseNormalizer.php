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
    class OptimizationRulesAPISwaggerUpdateRuleRecommendationStatusResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerUpdateRuleRecommendationStatusResponse::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerUpdateRuleRecommendationStatusResponse::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerUpdateRuleRecommendationStatusResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('success', $data)) {
                $values = [];
                foreach ($data['success'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerUpdateRuleRecommendationStatusResponseSuccessItem::class, 'json', $context);
                }
                $object->setSuccess($values);
                unset($data['success']);
            }
            if (\array_key_exists('error', $data)) {
                $values_1 = [];
                foreach ($data['error'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerUpdateRuleRecommendationStatusResponseErrorItem::class, 'json', $context);
                }
                $object->setError($values_1);
                unset($data['error']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('success') && null !== $object->getSuccess()) {
                $values = [];
                foreach ($object->getSuccess() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['success'] = $values;
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $values_1 = [];
                foreach ($object->getError() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['error'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerUpdateRuleRecommendationStatusResponse::class => false];
        }
    }
} else {
    class OptimizationRulesAPISwaggerUpdateRuleRecommendationStatusResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerUpdateRuleRecommendationStatusResponse::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerUpdateRuleRecommendationStatusResponse::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerUpdateRuleRecommendationStatusResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('success', $data)) {
                $values = [];
                foreach ($data['success'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerUpdateRuleRecommendationStatusResponseSuccessItem::class, 'json', $context);
                }
                $object->setSuccess($values);
                unset($data['success']);
            }
            if (\array_key_exists('error', $data)) {
                $values_1 = [];
                foreach ($data['error'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerUpdateRuleRecommendationStatusResponseErrorItem::class, 'json', $context);
                }
                $object->setError($values_1);
                unset($data['error']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            if ($object->isInitialized('success') && null !== $object->getSuccess()) {
                $values = [];
                foreach ($object->getSuccess() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['success'] = $values;
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $values_1 = [];
                foreach ($object->getError() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['error'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerUpdateRuleRecommendationStatusResponse::class => false];
        }
    }
}
