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
    class SponsoredProductsListTargetPromotionGroupsInternalRequestContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsListTargetPromotionGroupsInternalRequestContent::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsListTargetPromotionGroupsInternalRequestContent::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsListTargetPromotionGroupsInternalRequestContent();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('maxResults', $data)) {
                $object->setMaxResults($data['maxResults']);
                unset($data['maxResults']);
            }
            if (\array_key_exists('nextToken', $data)) {
                $object->setNextToken($data['nextToken']);
                unset($data['nextToken']);
            }
            if (\array_key_exists('targetPromotionGroupIdFilter', $data)) {
                $object->setTargetPromotionGroupIdFilter($this->denormalizer->denormalize($data['targetPromotionGroupIdFilter'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsObjectIdFilter::class, 'json', $context));
                unset($data['targetPromotionGroupIdFilter']);
            }
            if (\array_key_exists('adGroupIdFilter', $data)) {
                $object->setAdGroupIdFilter($this->denormalizer->denormalize($data['adGroupIdFilter'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsObjectIdFilter::class, 'json', $context));
                unset($data['adGroupIdFilter']);
            }
            if (\array_key_exists('apiGatewayContext', $data)) {
                $object->setApiGatewayContext($this->denormalizer->denormalize($data['apiGatewayContext'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsApiGatewayContext::class, 'json', $context));
                unset($data['apiGatewayContext']);
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
            if ($object->isInitialized('maxResults') && null !== $object->getMaxResults()) {
                $data['maxResults'] = $object->getMaxResults();
            }
            if ($object->isInitialized('nextToken') && null !== $object->getNextToken()) {
                $data['nextToken'] = $object->getNextToken();
            }
            if ($object->isInitialized('targetPromotionGroupIdFilter') && null !== $object->getTargetPromotionGroupIdFilter()) {
                $data['targetPromotionGroupIdFilter'] = $this->normalizer->normalize($object->getTargetPromotionGroupIdFilter(), 'json', $context);
            }
            if ($object->isInitialized('adGroupIdFilter') && null !== $object->getAdGroupIdFilter()) {
                $data['adGroupIdFilter'] = $this->normalizer->normalize($object->getAdGroupIdFilter(), 'json', $context);
            }
            $data['apiGatewayContext'] = $this->normalizer->normalize($object->getApiGatewayContext(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsListTargetPromotionGroupsInternalRequestContent::class => false];
        }
    }
} else {
    class SponsoredProductsListTargetPromotionGroupsInternalRequestContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsListTargetPromotionGroupsInternalRequestContent::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsListTargetPromotionGroupsInternalRequestContent::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsListTargetPromotionGroupsInternalRequestContent();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('maxResults', $data)) {
                $object->setMaxResults($data['maxResults']);
                unset($data['maxResults']);
            }
            if (\array_key_exists('nextToken', $data)) {
                $object->setNextToken($data['nextToken']);
                unset($data['nextToken']);
            }
            if (\array_key_exists('targetPromotionGroupIdFilter', $data)) {
                $object->setTargetPromotionGroupIdFilter($this->denormalizer->denormalize($data['targetPromotionGroupIdFilter'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsObjectIdFilter::class, 'json', $context));
                unset($data['targetPromotionGroupIdFilter']);
            }
            if (\array_key_exists('adGroupIdFilter', $data)) {
                $object->setAdGroupIdFilter($this->denormalizer->denormalize($data['adGroupIdFilter'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsObjectIdFilter::class, 'json', $context));
                unset($data['adGroupIdFilter']);
            }
            if (\array_key_exists('apiGatewayContext', $data)) {
                $object->setApiGatewayContext($this->denormalizer->denormalize($data['apiGatewayContext'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsApiGatewayContext::class, 'json', $context));
                unset($data['apiGatewayContext']);
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
            if ($object->isInitialized('maxResults') && null !== $object->getMaxResults()) {
                $data['maxResults'] = $object->getMaxResults();
            }
            if ($object->isInitialized('nextToken') && null !== $object->getNextToken()) {
                $data['nextToken'] = $object->getNextToken();
            }
            if ($object->isInitialized('targetPromotionGroupIdFilter') && null !== $object->getTargetPromotionGroupIdFilter()) {
                $data['targetPromotionGroupIdFilter'] = $this->normalizer->normalize($object->getTargetPromotionGroupIdFilter(), 'json', $context);
            }
            if ($object->isInitialized('adGroupIdFilter') && null !== $object->getAdGroupIdFilter()) {
                $data['adGroupIdFilter'] = $this->normalizer->normalize($object->getAdGroupIdFilter(), 'json', $context);
            }
            $data['apiGatewayContext'] = $this->normalizer->normalize($object->getApiGatewayContext(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\SponsoredProductsListTargetPromotionGroupsInternalRequestContent::class => false];
        }
    }
}
