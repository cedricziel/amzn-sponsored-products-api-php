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
    class SponsoredProductsMalformedValueErrorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsMalformedValueError::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsMalformedValueError::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsMalformedValueError();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('reason', $data)) {
                $object->setReason($data['reason']);
                unset($data['reason']);
            }
            if (\array_key_exists('fragment', $data)) {
                $object->setFragment($data['fragment']);
                unset($data['fragment']);
            }
            if (\array_key_exists('marketplace', $data)) {
                $object->setMarketplace($data['marketplace']);
                unset($data['marketplace']);
            }
            if (\array_key_exists('cause', $data)) {
                $object->setCause($this->denormalizer->denormalize($data['cause'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsErrorCause::class, 'json', $context));
                unset($data['cause']);
            }
            if (\array_key_exists('message', $data)) {
                $object->setMessage($data['message']);
                unset($data['message']);
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
            $data['reason'] = $object->getReason();
            if ($object->isInitialized('fragment') && null !== $object->getFragment()) {
                $data['fragment'] = $object->getFragment();
            }
            if ($object->isInitialized('marketplace') && null !== $object->getMarketplace()) {
                $data['marketplace'] = $object->getMarketplace();
            }
            if ($object->isInitialized('cause') && null !== $object->getCause()) {
                $data['cause'] = $this->normalizer->normalize($object->getCause(), 'json', $context);
            }
            $data['message'] = $object->getMessage();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsMalformedValueError::class => false];
        }
    }
} else {
    class SponsoredProductsMalformedValueErrorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsMalformedValueError::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsMalformedValueError::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsMalformedValueError();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('reason', $data)) {
                $object->setReason($data['reason']);
                unset($data['reason']);
            }
            if (\array_key_exists('fragment', $data)) {
                $object->setFragment($data['fragment']);
                unset($data['fragment']);
            }
            if (\array_key_exists('marketplace', $data)) {
                $object->setMarketplace($data['marketplace']);
                unset($data['marketplace']);
            }
            if (\array_key_exists('cause', $data)) {
                $object->setCause($this->denormalizer->denormalize($data['cause'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsErrorCause::class, 'json', $context));
                unset($data['cause']);
            }
            if (\array_key_exists('message', $data)) {
                $object->setMessage($data['message']);
                unset($data['message']);
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
            $data['reason'] = $object->getReason();
            if ($object->isInitialized('fragment') && null !== $object->getFragment()) {
                $data['fragment'] = $object->getFragment();
            }
            if ($object->isInitialized('marketplace') && null !== $object->getMarketplace()) {
                $data['marketplace'] = $object->getMarketplace();
            }
            if ($object->isInitialized('cause') && null !== $object->getCause()) {
                $data['cause'] = $this->normalizer->normalize($object->getCause(), 'json', $context);
            }
            $data['message'] = $object->getMessage();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsMalformedValueError::class => false];
        }
    }
}
