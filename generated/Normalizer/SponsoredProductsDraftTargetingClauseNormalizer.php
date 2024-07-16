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
    class SponsoredProductsDraftTargetingClauseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftTargetingClause::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftTargetingClause::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftTargetingClause();
            if (\array_key_exists('bid', $data) && \is_int($data['bid'])) {
                $data['bid'] = (float) $data['bid'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('expression', $data)) {
                $values = [];
                foreach ($data['expression'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsTargetingExpressionPredicate::class, 'json', $context);
                }
                $object->setExpression($values);
                unset($data['expression']);
            }
            if (\array_key_exists('targetId', $data)) {
                $object->setTargetId($data['targetId']);
                unset($data['targetId']);
            }
            if (\array_key_exists('resolvedExpression', $data)) {
                $values_1 = [];
                foreach ($data['resolvedExpression'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsTargetingExpressionPredicate::class, 'json', $context);
                }
                $object->setResolvedExpression($values_1);
                unset($data['resolvedExpression']);
            }
            if (\array_key_exists('campaignId', $data)) {
                $object->setCampaignId($data['campaignId']);
                unset($data['campaignId']);
            }
            if (\array_key_exists('expressionType', $data)) {
                $object->setExpressionType($data['expressionType']);
                unset($data['expressionType']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('bid', $data) && $data['bid'] !== null) {
                $object->setBid($data['bid']);
                unset($data['bid']);
            } elseif (\array_key_exists('bid', $data) && $data['bid'] === null) {
                $object->setBid(null);
            }
            if (\array_key_exists('adGroupId', $data)) {
                $object->setAdGroupId($data['adGroupId']);
                unset($data['adGroupId']);
            }
            if (\array_key_exists('extendedData', $data)) {
                $object->setExtendedData($this->denormalizer->denormalize($data['extendedData'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftTargetingClauseExtendedData::class, 'json', $context));
                unset($data['extendedData']);
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
            $values = [];
            foreach ($object->getExpression() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['expression'] = $values;
            $data['targetId'] = $object->getTargetId();
            $values_1 = [];
            foreach ($object->getResolvedExpression() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['resolvedExpression'] = $values_1;
            $data['campaignId'] = $object->getCampaignId();
            $data['expressionType'] = $object->getExpressionType();
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            if ($object->isInitialized('bid') && null !== $object->getBid()) {
                $data['bid'] = $object->getBid();
            }
            $data['adGroupId'] = $object->getAdGroupId();
            if ($object->isInitialized('extendedData') && null !== $object->getExtendedData()) {
                $data['extendedData'] = $this->normalizer->normalize($object->getExtendedData(), 'json', $context);
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
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftTargetingClause::class => false];
        }
    }
} else {
    class SponsoredProductsDraftTargetingClauseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftTargetingClause::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftTargetingClause::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftTargetingClause();
            if (\array_key_exists('bid', $data) && \is_int($data['bid'])) {
                $data['bid'] = (float) $data['bid'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('expression', $data)) {
                $values = [];
                foreach ($data['expression'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsTargetingExpressionPredicate::class, 'json', $context);
                }
                $object->setExpression($values);
                unset($data['expression']);
            }
            if (\array_key_exists('targetId', $data)) {
                $object->setTargetId($data['targetId']);
                unset($data['targetId']);
            }
            if (\array_key_exists('resolvedExpression', $data)) {
                $values_1 = [];
                foreach ($data['resolvedExpression'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsTargetingExpressionPredicate::class, 'json', $context);
                }
                $object->setResolvedExpression($values_1);
                unset($data['resolvedExpression']);
            }
            if (\array_key_exists('campaignId', $data)) {
                $object->setCampaignId($data['campaignId']);
                unset($data['campaignId']);
            }
            if (\array_key_exists('expressionType', $data)) {
                $object->setExpressionType($data['expressionType']);
                unset($data['expressionType']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('bid', $data) && $data['bid'] !== null) {
                $object->setBid($data['bid']);
                unset($data['bid']);
            } elseif (\array_key_exists('bid', $data) && $data['bid'] === null) {
                $object->setBid(null);
            }
            if (\array_key_exists('adGroupId', $data)) {
                $object->setAdGroupId($data['adGroupId']);
                unset($data['adGroupId']);
            }
            if (\array_key_exists('extendedData', $data)) {
                $object->setExtendedData($this->denormalizer->denormalize($data['extendedData'], \cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftTargetingClauseExtendedData::class, 'json', $context));
                unset($data['extendedData']);
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
            $values = [];
            foreach ($object->getExpression() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['expression'] = $values;
            $data['targetId'] = $object->getTargetId();
            $values_1 = [];
            foreach ($object->getResolvedExpression() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['resolvedExpression'] = $values_1;
            $data['campaignId'] = $object->getCampaignId();
            $data['expressionType'] = $object->getExpressionType();
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            if ($object->isInitialized('bid') && null !== $object->getBid()) {
                $data['bid'] = $object->getBid();
            }
            $data['adGroupId'] = $object->getAdGroupId();
            if ($object->isInitialized('extendedData') && null !== $object->getExtendedData()) {
                $data['extendedData'] = $this->normalizer->normalize($object->getExtendedData(), 'json', $context);
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
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\SponsoredProductsDraftTargetingClause::class => false];
        }
    }
}
