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
    class GlobalBudgetRecommendationErrorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \cedricziel\amznsponsoredproductsapiphp\Generated\Model\GlobalBudgetRecommendationError::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === cedricziel\amznsponsoredproductsapiphp\Generated\Model\GlobalBudgetRecommendationError::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\GlobalBudgetRecommendationError();
            if (\array_key_exists('errorId', $data) && \is_int($data['errorId'])) {
                $data['errorId'] = (float) $data['errorId'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('countryCodes', $data)) {
                $values = [];
                foreach ($data['countryCodes'] as $value) {
                    $values[] = $value;
                }
                $object->setCountryCodes($values);
                unset($data['countryCodes']);
            }
            if (\array_key_exists('errorMessage', $data)) {
                $object->setErrorMessage($data['errorMessage']);
                unset($data['errorMessage']);
            }
            if (\array_key_exists('errorCode', $data)) {
                $object->setErrorCode($data['errorCode']);
                unset($data['errorCode']);
            }
            if (\array_key_exists('errorId', $data)) {
                $object->setErrorId($data['errorId']);
                unset($data['errorId']);
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
            if ($object->isInitialized('countryCodes') && null !== $object->getCountryCodes()) {
                $values = [];
                foreach ($object->getCountryCodes() as $value) {
                    $values[] = $value;
                }
                $data['countryCodes'] = $values;
            }
            if ($object->isInitialized('errorMessage') && null !== $object->getErrorMessage()) {
                $data['errorMessage'] = $object->getErrorMessage();
            }
            $data['errorCode'] = $object->getErrorCode();
            $data['errorId'] = $object->getErrorId();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\GlobalBudgetRecommendationError::class => false];
        }
    }
} else {
    class GlobalBudgetRecommendationErrorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \cedricziel\amznsponsoredproductsapiphp\Generated\Model\GlobalBudgetRecommendationError::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === cedricziel\amznsponsoredproductsapiphp\Generated\Model\GlobalBudgetRecommendationError::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\GlobalBudgetRecommendationError();
            if (\array_key_exists('errorId', $data) && \is_int($data['errorId'])) {
                $data['errorId'] = (float) $data['errorId'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('countryCodes', $data)) {
                $values = [];
                foreach ($data['countryCodes'] as $value) {
                    $values[] = $value;
                }
                $object->setCountryCodes($values);
                unset($data['countryCodes']);
            }
            if (\array_key_exists('errorMessage', $data)) {
                $object->setErrorMessage($data['errorMessage']);
                unset($data['errorMessage']);
            }
            if (\array_key_exists('errorCode', $data)) {
                $object->setErrorCode($data['errorCode']);
                unset($data['errorCode']);
            }
            if (\array_key_exists('errorId', $data)) {
                $object->setErrorId($data['errorId']);
                unset($data['errorId']);
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
            if ($object->isInitialized('countryCodes') && null !== $object->getCountryCodes()) {
                $values = [];
                foreach ($object->getCountryCodes() as $value) {
                    $values[] = $value;
                }
                $data['countryCodes'] = $values;
            }
            if ($object->isInitialized('errorMessage') && null !== $object->getErrorMessage()) {
                $data['errorMessage'] = $object->getErrorMessage();
            }
            $data['errorCode'] = $object->getErrorCode();
            $data['errorId'] = $object->getErrorId();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\GlobalBudgetRecommendationError::class => false];
        }
    }
}
