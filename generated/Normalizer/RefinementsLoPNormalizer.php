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
    class RefinementsLoPNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \cedricziel\amznsponsoredproductsapiphp\Generated\Model\RefinementsLoP::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === cedricziel\amznsponsoredproductsapiphp\Generated\Model\RefinementsLoP::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\RefinementsLoP();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ageRanges', $data)) {
                $values = [];
                foreach ($data['ageRanges'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \cedricziel\amznsponsoredproductsapiphp\Generated\Model\AgeRangeLoP::class, 'json', $context);
                }
                $object->setAgeRanges($values);
                unset($data['ageRanges']);
            }
            if (\array_key_exists('brands', $data)) {
                $values_1 = [];
                foreach ($data['brands'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \cedricziel\amznsponsoredproductsapiphp\Generated\Model\BrandLoP::class, 'json', $context);
                }
                $object->setBrands($values_1);
                unset($data['brands']);
            }
            if (\array_key_exists('genres', $data)) {
                $values_2 = [];
                foreach ($data['genres'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \cedricziel\amznsponsoredproductsapiphp\Generated\Model\GenreLoP::class, 'json', $context);
                }
                $object->setGenres($values_2);
                unset($data['genres']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('ageRanges') && null !== $object->getAgeRanges()) {
                $values = [];
                foreach ($object->getAgeRanges() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ageRanges'] = $values;
            }
            if ($object->isInitialized('brands') && null !== $object->getBrands()) {
                $values_1 = [];
                foreach ($object->getBrands() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['brands'] = $values_1;
            }
            if ($object->isInitialized('genres') && null !== $object->getGenres()) {
                $values_2 = [];
                foreach ($object->getGenres() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['genres'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\RefinementsLoP::class => false];
        }
    }
} else {
    class RefinementsLoPNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \cedricziel\amznsponsoredproductsapiphp\Generated\Model\RefinementsLoP::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === cedricziel\amznsponsoredproductsapiphp\Generated\Model\RefinementsLoP::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\RefinementsLoP();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ageRanges', $data)) {
                $values = [];
                foreach ($data['ageRanges'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \cedricziel\amznsponsoredproductsapiphp\Generated\Model\AgeRangeLoP::class, 'json', $context);
                }
                $object->setAgeRanges($values);
                unset($data['ageRanges']);
            }
            if (\array_key_exists('brands', $data)) {
                $values_1 = [];
                foreach ($data['brands'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \cedricziel\amznsponsoredproductsapiphp\Generated\Model\BrandLoP::class, 'json', $context);
                }
                $object->setBrands($values_1);
                unset($data['brands']);
            }
            if (\array_key_exists('genres', $data)) {
                $values_2 = [];
                foreach ($data['genres'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \cedricziel\amznsponsoredproductsapiphp\Generated\Model\GenreLoP::class, 'json', $context);
                }
                $object->setGenres($values_2);
                unset($data['genres']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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
            if ($object->isInitialized('ageRanges') && null !== $object->getAgeRanges()) {
                $values = [];
                foreach ($object->getAgeRanges() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ageRanges'] = $values;
            }
            if ($object->isInitialized('brands') && null !== $object->getBrands()) {
                $values_1 = [];
                foreach ($object->getBrands() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['brands'] = $values_1;
            }
            if ($object->isInitialized('genres') && null !== $object->getGenres()) {
                $values_2 = [];
                foreach ($object->getGenres() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['genres'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\RefinementsLoP::class => false];
        }
    }
}
