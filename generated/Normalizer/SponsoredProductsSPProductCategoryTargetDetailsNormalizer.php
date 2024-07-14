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
    class SponsoredProductsSPProductCategoryTargetDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsSPProductCategoryTargetDetails::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsSPProductCategoryTargetDetails::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsSPProductCategoryTargetDetails();
            if (\array_key_exists('productPriceLessThan', $data) && \is_int($data['productPriceLessThan'])) {
                $data['productPriceLessThan'] = (float) $data['productPriceLessThan'];
            }
            if (\array_key_exists('productRatingLessThan', $data) && \is_int($data['productRatingLessThan'])) {
                $data['productRatingLessThan'] = (float) $data['productRatingLessThan'];
            }
            if (\array_key_exists('productRatingGreaterThan', $data) && \is_int($data['productRatingGreaterThan'])) {
                $data['productRatingGreaterThan'] = (float) $data['productRatingGreaterThan'];
            }
            if (\array_key_exists('productPriceGreaterThan', $data) && \is_int($data['productPriceGreaterThan'])) {
                $data['productPriceGreaterThan'] = (float) $data['productPriceGreaterThan'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('productAgeRangeId', $data)) {
                $object->setProductAgeRangeId($data['productAgeRangeId']);
                unset($data['productAgeRangeId']);
            }
            if (\array_key_exists('productPriceLessThan', $data)) {
                $object->setProductPriceLessThan($data['productPriceLessThan']);
                unset($data['productPriceLessThan']);
            }
            if (\array_key_exists('productPrimeShippingEligible', $data)) {
                $object->setProductPrimeShippingEligible($data['productPrimeShippingEligible']);
                unset($data['productPrimeShippingEligible']);
            }
            if (\array_key_exists('productCategoryIdResolved', $data)) {
                $object->setProductCategoryIdResolved($data['productCategoryIdResolved']);
                unset($data['productCategoryIdResolved']);
            }
            if (\array_key_exists('productBrandId', $data)) {
                $object->setProductBrandId($data['productBrandId']);
                unset($data['productBrandId']);
            }
            if (\array_key_exists('productBrandIdResolved', $data)) {
                $object->setProductBrandIdResolved($data['productBrandIdResolved']);
                unset($data['productBrandIdResolved']);
            }
            if (\array_key_exists('productRatingLessThan', $data)) {
                $object->setProductRatingLessThan($data['productRatingLessThan']);
                unset($data['productRatingLessThan']);
            }
            if (\array_key_exists('productGenreId', $data)) {
                $object->setProductGenreId($data['productGenreId']);
                unset($data['productGenreId']);
            }
            if (\array_key_exists('productCategoryId', $data)) {
                $object->setProductCategoryId($data['productCategoryId']);
                unset($data['productCategoryId']);
            }
            if (\array_key_exists('productRatingGreaterThan', $data)) {
                $object->setProductRatingGreaterThan($data['productRatingGreaterThan']);
                unset($data['productRatingGreaterThan']);
            }
            if (\array_key_exists('productAgeRangeIdResolved', $data)) {
                $object->setProductAgeRangeIdResolved($data['productAgeRangeIdResolved']);
                unset($data['productAgeRangeIdResolved']);
            }
            if (\array_key_exists('productGenreIdResolved', $data)) {
                $object->setProductGenreIdResolved($data['productGenreIdResolved']);
                unset($data['productGenreIdResolved']);
            }
            if (\array_key_exists('productPriceGreaterThan', $data)) {
                $object->setProductPriceGreaterThan($data['productPriceGreaterThan']);
                unset($data['productPriceGreaterThan']);
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
            if ($object->isInitialized('productAgeRangeId') && null !== $object->getProductAgeRangeId()) {
                $data['productAgeRangeId'] = $object->getProductAgeRangeId();
            }
            if ($object->isInitialized('productPriceLessThan') && null !== $object->getProductPriceLessThan()) {
                $data['productPriceLessThan'] = $object->getProductPriceLessThan();
            }
            if ($object->isInitialized('productPrimeShippingEligible') && null !== $object->getProductPrimeShippingEligible()) {
                $data['productPrimeShippingEligible'] = $object->getProductPrimeShippingEligible();
            }
            if ($object->isInitialized('productCategoryIdResolved') && null !== $object->getProductCategoryIdResolved()) {
                $data['productCategoryIdResolved'] = $object->getProductCategoryIdResolved();
            }
            if ($object->isInitialized('productBrandId') && null !== $object->getProductBrandId()) {
                $data['productBrandId'] = $object->getProductBrandId();
            }
            if ($object->isInitialized('productBrandIdResolved') && null !== $object->getProductBrandIdResolved()) {
                $data['productBrandIdResolved'] = $object->getProductBrandIdResolved();
            }
            if ($object->isInitialized('productRatingLessThan') && null !== $object->getProductRatingLessThan()) {
                $data['productRatingLessThan'] = $object->getProductRatingLessThan();
            }
            if ($object->isInitialized('productGenreId') && null !== $object->getProductGenreId()) {
                $data['productGenreId'] = $object->getProductGenreId();
            }
            if ($object->isInitialized('productCategoryId') && null !== $object->getProductCategoryId()) {
                $data['productCategoryId'] = $object->getProductCategoryId();
            }
            if ($object->isInitialized('productRatingGreaterThan') && null !== $object->getProductRatingGreaterThan()) {
                $data['productRatingGreaterThan'] = $object->getProductRatingGreaterThan();
            }
            if ($object->isInitialized('productAgeRangeIdResolved') && null !== $object->getProductAgeRangeIdResolved()) {
                $data['productAgeRangeIdResolved'] = $object->getProductAgeRangeIdResolved();
            }
            if ($object->isInitialized('productGenreIdResolved') && null !== $object->getProductGenreIdResolved()) {
                $data['productGenreIdResolved'] = $object->getProductGenreIdResolved();
            }
            if ($object->isInitialized('productPriceGreaterThan') && null !== $object->getProductPriceGreaterThan()) {
                $data['productPriceGreaterThan'] = $object->getProductPriceGreaterThan();
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
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsSPProductCategoryTargetDetails::class => false];
        }
    }
} else {
    class SponsoredProductsSPProductCategoryTargetDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsSPProductCategoryTargetDetails::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsSPProductCategoryTargetDetails::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsSPProductCategoryTargetDetails();
            if (\array_key_exists('productPriceLessThan', $data) && \is_int($data['productPriceLessThan'])) {
                $data['productPriceLessThan'] = (float) $data['productPriceLessThan'];
            }
            if (\array_key_exists('productRatingLessThan', $data) && \is_int($data['productRatingLessThan'])) {
                $data['productRatingLessThan'] = (float) $data['productRatingLessThan'];
            }
            if (\array_key_exists('productRatingGreaterThan', $data) && \is_int($data['productRatingGreaterThan'])) {
                $data['productRatingGreaterThan'] = (float) $data['productRatingGreaterThan'];
            }
            if (\array_key_exists('productPriceGreaterThan', $data) && \is_int($data['productPriceGreaterThan'])) {
                $data['productPriceGreaterThan'] = (float) $data['productPriceGreaterThan'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('productAgeRangeId', $data)) {
                $object->setProductAgeRangeId($data['productAgeRangeId']);
                unset($data['productAgeRangeId']);
            }
            if (\array_key_exists('productPriceLessThan', $data)) {
                $object->setProductPriceLessThan($data['productPriceLessThan']);
                unset($data['productPriceLessThan']);
            }
            if (\array_key_exists('productPrimeShippingEligible', $data)) {
                $object->setProductPrimeShippingEligible($data['productPrimeShippingEligible']);
                unset($data['productPrimeShippingEligible']);
            }
            if (\array_key_exists('productCategoryIdResolved', $data)) {
                $object->setProductCategoryIdResolved($data['productCategoryIdResolved']);
                unset($data['productCategoryIdResolved']);
            }
            if (\array_key_exists('productBrandId', $data)) {
                $object->setProductBrandId($data['productBrandId']);
                unset($data['productBrandId']);
            }
            if (\array_key_exists('productBrandIdResolved', $data)) {
                $object->setProductBrandIdResolved($data['productBrandIdResolved']);
                unset($data['productBrandIdResolved']);
            }
            if (\array_key_exists('productRatingLessThan', $data)) {
                $object->setProductRatingLessThan($data['productRatingLessThan']);
                unset($data['productRatingLessThan']);
            }
            if (\array_key_exists('productGenreId', $data)) {
                $object->setProductGenreId($data['productGenreId']);
                unset($data['productGenreId']);
            }
            if (\array_key_exists('productCategoryId', $data)) {
                $object->setProductCategoryId($data['productCategoryId']);
                unset($data['productCategoryId']);
            }
            if (\array_key_exists('productRatingGreaterThan', $data)) {
                $object->setProductRatingGreaterThan($data['productRatingGreaterThan']);
                unset($data['productRatingGreaterThan']);
            }
            if (\array_key_exists('productAgeRangeIdResolved', $data)) {
                $object->setProductAgeRangeIdResolved($data['productAgeRangeIdResolved']);
                unset($data['productAgeRangeIdResolved']);
            }
            if (\array_key_exists('productGenreIdResolved', $data)) {
                $object->setProductGenreIdResolved($data['productGenreIdResolved']);
                unset($data['productGenreIdResolved']);
            }
            if (\array_key_exists('productPriceGreaterThan', $data)) {
                $object->setProductPriceGreaterThan($data['productPriceGreaterThan']);
                unset($data['productPriceGreaterThan']);
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
            if ($object->isInitialized('productAgeRangeId') && null !== $object->getProductAgeRangeId()) {
                $data['productAgeRangeId'] = $object->getProductAgeRangeId();
            }
            if ($object->isInitialized('productPriceLessThan') && null !== $object->getProductPriceLessThan()) {
                $data['productPriceLessThan'] = $object->getProductPriceLessThan();
            }
            if ($object->isInitialized('productPrimeShippingEligible') && null !== $object->getProductPrimeShippingEligible()) {
                $data['productPrimeShippingEligible'] = $object->getProductPrimeShippingEligible();
            }
            if ($object->isInitialized('productCategoryIdResolved') && null !== $object->getProductCategoryIdResolved()) {
                $data['productCategoryIdResolved'] = $object->getProductCategoryIdResolved();
            }
            if ($object->isInitialized('productBrandId') && null !== $object->getProductBrandId()) {
                $data['productBrandId'] = $object->getProductBrandId();
            }
            if ($object->isInitialized('productBrandIdResolved') && null !== $object->getProductBrandIdResolved()) {
                $data['productBrandIdResolved'] = $object->getProductBrandIdResolved();
            }
            if ($object->isInitialized('productRatingLessThan') && null !== $object->getProductRatingLessThan()) {
                $data['productRatingLessThan'] = $object->getProductRatingLessThan();
            }
            if ($object->isInitialized('productGenreId') && null !== $object->getProductGenreId()) {
                $data['productGenreId'] = $object->getProductGenreId();
            }
            if ($object->isInitialized('productCategoryId') && null !== $object->getProductCategoryId()) {
                $data['productCategoryId'] = $object->getProductCategoryId();
            }
            if ($object->isInitialized('productRatingGreaterThan') && null !== $object->getProductRatingGreaterThan()) {
                $data['productRatingGreaterThan'] = $object->getProductRatingGreaterThan();
            }
            if ($object->isInitialized('productAgeRangeIdResolved') && null !== $object->getProductAgeRangeIdResolved()) {
                $data['productAgeRangeIdResolved'] = $object->getProductAgeRangeIdResolved();
            }
            if ($object->isInitialized('productGenreIdResolved') && null !== $object->getProductGenreIdResolved()) {
                $data['productGenreIdResolved'] = $object->getProductGenreIdResolved();
            }
            if ($object->isInitialized('productPriceGreaterThan') && null !== $object->getProductPriceGreaterThan()) {
                $data['productPriceGreaterThan'] = $object->getProductPriceGreaterThan();
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
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsSPProductCategoryTargetDetails::class => false];
        }
    }
}
