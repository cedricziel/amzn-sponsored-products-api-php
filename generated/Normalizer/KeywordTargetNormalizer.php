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
    class KeywordTargetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\amznsponsoredproductsapiphp\Generated\Model\KeywordTarget::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && cedricziel\amznsponsoredproductsapiphp\Generated\Model\KeywordTarget::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\KeywordTarget();
            if (\array_key_exists('bid', $data) && \is_int($data['bid'])) {
                $data['bid'] = (float) $data['bid'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('matchType', $data)) {
                $object->setMatchType($data['matchType']);
                unset($data['matchType']);
            }
            if (\array_key_exists('keyword', $data)) {
                $object->setKeyword($data['keyword']);
                unset($data['keyword']);
            }
            if (\array_key_exists('bid', $data)) {
                $object->setBid($data['bid']);
                unset($data['bid']);
            }
            if (\array_key_exists('userSelectedKeyword', $data)) {
                $object->setUserSelectedKeyword($data['userSelectedKeyword']);
                unset($data['userSelectedKeyword']);
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
            if ($object->isInitialized('matchType') && null !== $object->getMatchType()) {
                $data['matchType'] = $object->getMatchType();
            }
            if ($object->isInitialized('keyword') && null !== $object->getKeyword()) {
                $data['keyword'] = $object->getKeyword();
            }
            if ($object->isInitialized('bid') && null !== $object->getBid()) {
                $data['bid'] = $object->getBid();
            }
            if ($object->isInitialized('userSelectedKeyword') && null !== $object->getUserSelectedKeyword()) {
                $data['userSelectedKeyword'] = $object->getUserSelectedKeyword();
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
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\KeywordTarget::class => false];
        }
    }
} else {
    class KeywordTargetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\amznsponsoredproductsapiphp\Generated\Model\KeywordTarget::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && cedricziel\amznsponsoredproductsapiphp\Generated\Model\KeywordTarget::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\amznsponsoredproductsapiphp\Generated\Model\KeywordTarget();
            if (\array_key_exists('bid', $data) && \is_int($data['bid'])) {
                $data['bid'] = (float) $data['bid'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('matchType', $data)) {
                $object->setMatchType($data['matchType']);
                unset($data['matchType']);
            }
            if (\array_key_exists('keyword', $data)) {
                $object->setKeyword($data['keyword']);
                unset($data['keyword']);
            }
            if (\array_key_exists('bid', $data)) {
                $object->setBid($data['bid']);
                unset($data['bid']);
            }
            if (\array_key_exists('userSelectedKeyword', $data)) {
                $object->setUserSelectedKeyword($data['userSelectedKeyword']);
                unset($data['userSelectedKeyword']);
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
            if ($object->isInitialized('matchType') && null !== $object->getMatchType()) {
                $data['matchType'] = $object->getMatchType();
            }
            if ($object->isInitialized('keyword') && null !== $object->getKeyword()) {
                $data['keyword'] = $object->getKeyword();
            }
            if ($object->isInitialized('bid') && null !== $object->getBid()) {
                $data['bid'] = $object->getBid();
            }
            if ($object->isInitialized('userSelectedKeyword') && null !== $object->getUserSelectedKeyword()) {
                $data['userSelectedKeyword'] = $object->getUserSelectedKeyword();
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
            return [\cedricziel\amznsponsoredproductsapiphp\Generated\Model\KeywordTarget::class => false];
        }
    }
}
