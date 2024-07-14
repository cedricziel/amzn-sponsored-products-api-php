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
    class SponsoredProductsCampaignNegativeTargetsMutationErrorSelectorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCampaignNegativeTargetsMutationErrorSelector::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCampaignNegativeTargetsMutationErrorSelector::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCampaignNegativeTargetsMutationErrorSelector();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('entityStateError', $data)) {
                $object->setEntityStateError($this->denormalizer->denormalize($data['entityStateError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsEntityStateError::class, 'json', $context));
                unset($data['entityStateError']);
            }
            if (\array_key_exists('missingValueError', $data)) {
                $object->setMissingValueError($this->denormalizer->denormalize($data['missingValueError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsMissingValueError::class, 'json', $context));
                unset($data['missingValueError']);
            }
            if (\array_key_exists('duplicateValueError', $data)) {
                $object->setDuplicateValueError($this->denormalizer->denormalize($data['duplicateValueError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDuplicateValueError::class, 'json', $context));
                unset($data['duplicateValueError']);
            }
            if (\array_key_exists('rangeError', $data)) {
                $object->setRangeError($this->denormalizer->denormalize($data['rangeError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsRangeError::class, 'json', $context));
                unset($data['rangeError']);
            }
            if (\array_key_exists('parentEntityError', $data)) {
                $object->setParentEntityError($this->denormalizer->denormalize($data['parentEntityError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsParentEntityError::class, 'json', $context));
                unset($data['parentEntityError']);
            }
            if (\array_key_exists('otherError', $data)) {
                $object->setOtherError($this->denormalizer->denormalize($data['otherError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsOtherError::class, 'json', $context));
                unset($data['otherError']);
            }
            if (\array_key_exists('throttledError', $data)) {
                $object->setThrottledError($this->denormalizer->denormalize($data['throttledError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsThrottledError::class, 'json', $context));
                unset($data['throttledError']);
            }
            if (\array_key_exists('entityNotFoundError', $data)) {
                $object->setEntityNotFoundError($this->denormalizer->denormalize($data['entityNotFoundError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsEntityNotFoundError::class, 'json', $context));
                unset($data['entityNotFoundError']);
            }
            if (\array_key_exists('targetingClauseSetupError', $data)) {
                $object->setTargetingClauseSetupError($this->denormalizer->denormalize($data['targetingClauseSetupError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsTargetingClauseSetupError::class, 'json', $context));
                unset($data['targetingClauseSetupError']);
            }
            if (\array_key_exists('malformedValueError', $data)) {
                $object->setMalformedValueError($this->denormalizer->denormalize($data['malformedValueError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsMalformedValueError::class, 'json', $context));
                unset($data['malformedValueError']);
            }
            if (\array_key_exists('billingError', $data)) {
                $object->setBillingError($this->denormalizer->denormalize($data['billingError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsBillingError::class, 'json', $context));
                unset($data['billingError']);
            }
            if (\array_key_exists('entityQuotaError', $data)) {
                $object->setEntityQuotaError($this->denormalizer->denormalize($data['entityQuotaError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsEntityQuotaError::class, 'json', $context));
                unset($data['entityQuotaError']);
            }
            if (\array_key_exists('internalServerError', $data)) {
                $object->setInternalServerError($this->denormalizer->denormalize($data['internalServerError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsInternalServerError::class, 'json', $context));
                unset($data['internalServerError']);
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
            if ($object->isInitialized('entityStateError') && null !== $object->getEntityStateError()) {
                $data['entityStateError'] = $this->normalizer->normalize($object->getEntityStateError(), 'json', $context);
            }
            if ($object->isInitialized('missingValueError') && null !== $object->getMissingValueError()) {
                $data['missingValueError'] = $this->normalizer->normalize($object->getMissingValueError(), 'json', $context);
            }
            if ($object->isInitialized('duplicateValueError') && null !== $object->getDuplicateValueError()) {
                $data['duplicateValueError'] = $this->normalizer->normalize($object->getDuplicateValueError(), 'json', $context);
            }
            if ($object->isInitialized('rangeError') && null !== $object->getRangeError()) {
                $data['rangeError'] = $this->normalizer->normalize($object->getRangeError(), 'json', $context);
            }
            if ($object->isInitialized('parentEntityError') && null !== $object->getParentEntityError()) {
                $data['parentEntityError'] = $this->normalizer->normalize($object->getParentEntityError(), 'json', $context);
            }
            if ($object->isInitialized('otherError') && null !== $object->getOtherError()) {
                $data['otherError'] = $this->normalizer->normalize($object->getOtherError(), 'json', $context);
            }
            if ($object->isInitialized('throttledError') && null !== $object->getThrottledError()) {
                $data['throttledError'] = $this->normalizer->normalize($object->getThrottledError(), 'json', $context);
            }
            if ($object->isInitialized('entityNotFoundError') && null !== $object->getEntityNotFoundError()) {
                $data['entityNotFoundError'] = $this->normalizer->normalize($object->getEntityNotFoundError(), 'json', $context);
            }
            if ($object->isInitialized('targetingClauseSetupError') && null !== $object->getTargetingClauseSetupError()) {
                $data['targetingClauseSetupError'] = $this->normalizer->normalize($object->getTargetingClauseSetupError(), 'json', $context);
            }
            if ($object->isInitialized('malformedValueError') && null !== $object->getMalformedValueError()) {
                $data['malformedValueError'] = $this->normalizer->normalize($object->getMalformedValueError(), 'json', $context);
            }
            if ($object->isInitialized('billingError') && null !== $object->getBillingError()) {
                $data['billingError'] = $this->normalizer->normalize($object->getBillingError(), 'json', $context);
            }
            if ($object->isInitialized('entityQuotaError') && null !== $object->getEntityQuotaError()) {
                $data['entityQuotaError'] = $this->normalizer->normalize($object->getEntityQuotaError(), 'json', $context);
            }
            if ($object->isInitialized('internalServerError') && null !== $object->getInternalServerError()) {
                $data['internalServerError'] = $this->normalizer->normalize($object->getInternalServerError(), 'json', $context);
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
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCampaignNegativeTargetsMutationErrorSelector::class => false];
        }
    }
} else {
    class SponsoredProductsCampaignNegativeTargetsMutationErrorSelectorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCampaignNegativeTargetsMutationErrorSelector::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCampaignNegativeTargetsMutationErrorSelector::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCampaignNegativeTargetsMutationErrorSelector();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('entityStateError', $data)) {
                $object->setEntityStateError($this->denormalizer->denormalize($data['entityStateError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsEntityStateError::class, 'json', $context));
                unset($data['entityStateError']);
            }
            if (\array_key_exists('missingValueError', $data)) {
                $object->setMissingValueError($this->denormalizer->denormalize($data['missingValueError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsMissingValueError::class, 'json', $context));
                unset($data['missingValueError']);
            }
            if (\array_key_exists('duplicateValueError', $data)) {
                $object->setDuplicateValueError($this->denormalizer->denormalize($data['duplicateValueError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDuplicateValueError::class, 'json', $context));
                unset($data['duplicateValueError']);
            }
            if (\array_key_exists('rangeError', $data)) {
                $object->setRangeError($this->denormalizer->denormalize($data['rangeError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsRangeError::class, 'json', $context));
                unset($data['rangeError']);
            }
            if (\array_key_exists('parentEntityError', $data)) {
                $object->setParentEntityError($this->denormalizer->denormalize($data['parentEntityError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsParentEntityError::class, 'json', $context));
                unset($data['parentEntityError']);
            }
            if (\array_key_exists('otherError', $data)) {
                $object->setOtherError($this->denormalizer->denormalize($data['otherError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsOtherError::class, 'json', $context));
                unset($data['otherError']);
            }
            if (\array_key_exists('throttledError', $data)) {
                $object->setThrottledError($this->denormalizer->denormalize($data['throttledError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsThrottledError::class, 'json', $context));
                unset($data['throttledError']);
            }
            if (\array_key_exists('entityNotFoundError', $data)) {
                $object->setEntityNotFoundError($this->denormalizer->denormalize($data['entityNotFoundError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsEntityNotFoundError::class, 'json', $context));
                unset($data['entityNotFoundError']);
            }
            if (\array_key_exists('targetingClauseSetupError', $data)) {
                $object->setTargetingClauseSetupError($this->denormalizer->denormalize($data['targetingClauseSetupError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsTargetingClauseSetupError::class, 'json', $context));
                unset($data['targetingClauseSetupError']);
            }
            if (\array_key_exists('malformedValueError', $data)) {
                $object->setMalformedValueError($this->denormalizer->denormalize($data['malformedValueError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsMalformedValueError::class, 'json', $context));
                unset($data['malformedValueError']);
            }
            if (\array_key_exists('billingError', $data)) {
                $object->setBillingError($this->denormalizer->denormalize($data['billingError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsBillingError::class, 'json', $context));
                unset($data['billingError']);
            }
            if (\array_key_exists('entityQuotaError', $data)) {
                $object->setEntityQuotaError($this->denormalizer->denormalize($data['entityQuotaError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsEntityQuotaError::class, 'json', $context));
                unset($data['entityQuotaError']);
            }
            if (\array_key_exists('internalServerError', $data)) {
                $object->setInternalServerError($this->denormalizer->denormalize($data['internalServerError'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsInternalServerError::class, 'json', $context));
                unset($data['internalServerError']);
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
            if ($object->isInitialized('entityStateError') && null !== $object->getEntityStateError()) {
                $data['entityStateError'] = $this->normalizer->normalize($object->getEntityStateError(), 'json', $context);
            }
            if ($object->isInitialized('missingValueError') && null !== $object->getMissingValueError()) {
                $data['missingValueError'] = $this->normalizer->normalize($object->getMissingValueError(), 'json', $context);
            }
            if ($object->isInitialized('duplicateValueError') && null !== $object->getDuplicateValueError()) {
                $data['duplicateValueError'] = $this->normalizer->normalize($object->getDuplicateValueError(), 'json', $context);
            }
            if ($object->isInitialized('rangeError') && null !== $object->getRangeError()) {
                $data['rangeError'] = $this->normalizer->normalize($object->getRangeError(), 'json', $context);
            }
            if ($object->isInitialized('parentEntityError') && null !== $object->getParentEntityError()) {
                $data['parentEntityError'] = $this->normalizer->normalize($object->getParentEntityError(), 'json', $context);
            }
            if ($object->isInitialized('otherError') && null !== $object->getOtherError()) {
                $data['otherError'] = $this->normalizer->normalize($object->getOtherError(), 'json', $context);
            }
            if ($object->isInitialized('throttledError') && null !== $object->getThrottledError()) {
                $data['throttledError'] = $this->normalizer->normalize($object->getThrottledError(), 'json', $context);
            }
            if ($object->isInitialized('entityNotFoundError') && null !== $object->getEntityNotFoundError()) {
                $data['entityNotFoundError'] = $this->normalizer->normalize($object->getEntityNotFoundError(), 'json', $context);
            }
            if ($object->isInitialized('targetingClauseSetupError') && null !== $object->getTargetingClauseSetupError()) {
                $data['targetingClauseSetupError'] = $this->normalizer->normalize($object->getTargetingClauseSetupError(), 'json', $context);
            }
            if ($object->isInitialized('malformedValueError') && null !== $object->getMalformedValueError()) {
                $data['malformedValueError'] = $this->normalizer->normalize($object->getMalformedValueError(), 'json', $context);
            }
            if ($object->isInitialized('billingError') && null !== $object->getBillingError()) {
                $data['billingError'] = $this->normalizer->normalize($object->getBillingError(), 'json', $context);
            }
            if ($object->isInitialized('entityQuotaError') && null !== $object->getEntityQuotaError()) {
                $data['entityQuotaError'] = $this->normalizer->normalize($object->getEntityQuotaError(), 'json', $context);
            }
            if ($object->isInitialized('internalServerError') && null !== $object->getInternalServerError()) {
                $data['internalServerError'] = $this->normalizer->normalize($object->getInternalServerError(), 'json', $context);
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
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsCampaignNegativeTargetsMutationErrorSelector::class => false];
        }
    }
}
