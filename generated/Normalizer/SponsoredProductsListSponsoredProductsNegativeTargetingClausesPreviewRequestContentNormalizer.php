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
    class SponsoredProductsListSponsoredProductsNegativeTargetingClausesPreviewRequestContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsListSponsoredProductsNegativeTargetingClausesPreviewRequestContent::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsListSponsoredProductsNegativeTargetingClausesPreviewRequestContent::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsListSponsoredProductsNegativeTargetingClausesPreviewRequestContent();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('negativeTargetIdFilter', $data)) {
                $object->setNegativeTargetIdFilter($this->denormalizer->denormalize($data['negativeTargetIdFilter'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsObjectIdFilter::class, 'json', $context));
                unset($data['negativeTargetIdFilter']);
            }
            if (\array_key_exists('campaignIdFilter', $data)) {
                $object->setCampaignIdFilter($this->denormalizer->denormalize($data['campaignIdFilter'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsReducedObjectIdFilter::class, 'json', $context));
                unset($data['campaignIdFilter']);
            }
            if (\array_key_exists('stateFilter', $data)) {
                $object->setStateFilter($this->denormalizer->denormalize($data['stateFilter'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsEntityStateFilter::class, 'json', $context));
                unset($data['stateFilter']);
            }
            if (\array_key_exists('maxResults', $data)) {
                $object->setMaxResults($data['maxResults']);
                unset($data['maxResults']);
            }
            if (\array_key_exists('nextToken', $data)) {
                $object->setNextToken($data['nextToken']);
                unset($data['nextToken']);
            }
            if (\array_key_exists('asinFilter', $data)) {
                $object->setAsinFilter($this->denormalizer->denormalize($data['asinFilter'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsAsinFilter::class, 'json', $context));
                unset($data['asinFilter']);
            }
            if (\array_key_exists('adGroupIdFilter', $data)) {
                $object->setAdGroupIdFilter($this->denormalizer->denormalize($data['adGroupIdFilter'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsReducedObjectIdFilter::class, 'json', $context));
                unset($data['adGroupIdFilter']);
            }
            if (\array_key_exists('includeExtendedDataFields', $data)) {
                $object->setIncludeExtendedDataFields($data['includeExtendedDataFields']);
                unset($data['includeExtendedDataFields']);
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
            if ($object->isInitialized('negativeTargetIdFilter') && null !== $object->getNegativeTargetIdFilter()) {
                $data['negativeTargetIdFilter'] = $this->normalizer->normalize($object->getNegativeTargetIdFilter(), 'json', $context);
            }
            if ($object->isInitialized('campaignIdFilter') && null !== $object->getCampaignIdFilter()) {
                $data['campaignIdFilter'] = $this->normalizer->normalize($object->getCampaignIdFilter(), 'json', $context);
            }
            if ($object->isInitialized('stateFilter') && null !== $object->getStateFilter()) {
                $data['stateFilter'] = $this->normalizer->normalize($object->getStateFilter(), 'json', $context);
            }
            if ($object->isInitialized('maxResults') && null !== $object->getMaxResults()) {
                $data['maxResults'] = $object->getMaxResults();
            }
            if ($object->isInitialized('nextToken') && null !== $object->getNextToken()) {
                $data['nextToken'] = $object->getNextToken();
            }
            if ($object->isInitialized('asinFilter') && null !== $object->getAsinFilter()) {
                $data['asinFilter'] = $this->normalizer->normalize($object->getAsinFilter(), 'json', $context);
            }
            if ($object->isInitialized('adGroupIdFilter') && null !== $object->getAdGroupIdFilter()) {
                $data['adGroupIdFilter'] = $this->normalizer->normalize($object->getAdGroupIdFilter(), 'json', $context);
            }
            if ($object->isInitialized('includeExtendedDataFields') && null !== $object->getIncludeExtendedDataFields()) {
                $data['includeExtendedDataFields'] = $object->getIncludeExtendedDataFields();
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
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsListSponsoredProductsNegativeTargetingClausesPreviewRequestContent::class => false];
        }
    }
} else {
    class SponsoredProductsListSponsoredProductsNegativeTargetingClausesPreviewRequestContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsListSponsoredProductsNegativeTargetingClausesPreviewRequestContent::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsListSponsoredProductsNegativeTargetingClausesPreviewRequestContent::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsListSponsoredProductsNegativeTargetingClausesPreviewRequestContent();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('negativeTargetIdFilter', $data)) {
                $object->setNegativeTargetIdFilter($this->denormalizer->denormalize($data['negativeTargetIdFilter'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsObjectIdFilter::class, 'json', $context));
                unset($data['negativeTargetIdFilter']);
            }
            if (\array_key_exists('campaignIdFilter', $data)) {
                $object->setCampaignIdFilter($this->denormalizer->denormalize($data['campaignIdFilter'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsReducedObjectIdFilter::class, 'json', $context));
                unset($data['campaignIdFilter']);
            }
            if (\array_key_exists('stateFilter', $data)) {
                $object->setStateFilter($this->denormalizer->denormalize($data['stateFilter'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsEntityStateFilter::class, 'json', $context));
                unset($data['stateFilter']);
            }
            if (\array_key_exists('maxResults', $data)) {
                $object->setMaxResults($data['maxResults']);
                unset($data['maxResults']);
            }
            if (\array_key_exists('nextToken', $data)) {
                $object->setNextToken($data['nextToken']);
                unset($data['nextToken']);
            }
            if (\array_key_exists('asinFilter', $data)) {
                $object->setAsinFilter($this->denormalizer->denormalize($data['asinFilter'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsAsinFilter::class, 'json', $context));
                unset($data['asinFilter']);
            }
            if (\array_key_exists('adGroupIdFilter', $data)) {
                $object->setAdGroupIdFilter($this->denormalizer->denormalize($data['adGroupIdFilter'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsReducedObjectIdFilter::class, 'json', $context));
                unset($data['adGroupIdFilter']);
            }
            if (\array_key_exists('includeExtendedDataFields', $data)) {
                $object->setIncludeExtendedDataFields($data['includeExtendedDataFields']);
                unset($data['includeExtendedDataFields']);
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
            if ($object->isInitialized('negativeTargetIdFilter') && null !== $object->getNegativeTargetIdFilter()) {
                $data['negativeTargetIdFilter'] = $this->normalizer->normalize($object->getNegativeTargetIdFilter(), 'json', $context);
            }
            if ($object->isInitialized('campaignIdFilter') && null !== $object->getCampaignIdFilter()) {
                $data['campaignIdFilter'] = $this->normalizer->normalize($object->getCampaignIdFilter(), 'json', $context);
            }
            if ($object->isInitialized('stateFilter') && null !== $object->getStateFilter()) {
                $data['stateFilter'] = $this->normalizer->normalize($object->getStateFilter(), 'json', $context);
            }
            if ($object->isInitialized('maxResults') && null !== $object->getMaxResults()) {
                $data['maxResults'] = $object->getMaxResults();
            }
            if ($object->isInitialized('nextToken') && null !== $object->getNextToken()) {
                $data['nextToken'] = $object->getNextToken();
            }
            if ($object->isInitialized('asinFilter') && null !== $object->getAsinFilter()) {
                $data['asinFilter'] = $this->normalizer->normalize($object->getAsinFilter(), 'json', $context);
            }
            if ($object->isInitialized('adGroupIdFilter') && null !== $object->getAdGroupIdFilter()) {
                $data['adGroupIdFilter'] = $this->normalizer->normalize($object->getAdGroupIdFilter(), 'json', $context);
            }
            if ($object->isInitialized('includeExtendedDataFields') && null !== $object->getIncludeExtendedDataFields()) {
                $data['includeExtendedDataFields'] = $object->getIncludeExtendedDataFields();
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
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsListSponsoredProductsNegativeTargetingClausesPreviewRequestContent::class => false];
        }
    }
}
