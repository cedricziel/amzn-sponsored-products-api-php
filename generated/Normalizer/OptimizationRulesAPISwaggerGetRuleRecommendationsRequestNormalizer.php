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
    class OptimizationRulesAPISwaggerGetRuleRecommendationsRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerGetRuleRecommendationsRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerGetRuleRecommendationsRequest::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerGetRuleRecommendationsRequest();
            if (\array_key_exists('maxResults', $data) && \is_int($data['maxResults'])) {
                $data['maxResults'] = (float) $data['maxResults'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ruleSubCategoryFilter', $data)) {
                $object->setRuleSubCategoryFilter($this->denormalizer->denormalize($data['ruleSubCategoryFilter'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerEntityFieldFilter::class, 'json', $context));
                unset($data['ruleSubCategoryFilter']);
            }
            if (\array_key_exists('recommendationIdFilter', $data)) {
                $object->setRecommendationIdFilter($data['recommendationIdFilter']);
                unset($data['recommendationIdFilter']);
            }
            if (\array_key_exists('campaignIdListFilter', $data)) {
                $values = [];
                foreach ($data['campaignIdListFilter'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerCampaignFilter::class, 'json', $context);
                }
                $object->setCampaignIdListFilter($values);
                unset($data['campaignIdListFilter']);
            }
            if (\array_key_exists('maxResults', $data)) {
                $object->setMaxResults($data['maxResults']);
                unset($data['maxResults']);
            }
            if (\array_key_exists('nextToken', $data)) {
                $object->setNextToken($data['nextToken']);
                unset($data['nextToken']);
            }
            if (\array_key_exists('ruleCategoryFilter', $data)) {
                $object->setRuleCategoryFilter($this->denormalizer->denormalize($data['ruleCategoryFilter'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerEntityFieldFilter::class, 'json', $context));
                unset($data['ruleCategoryFilter']);
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
            if ($object->isInitialized('ruleSubCategoryFilter') && null !== $object->getRuleSubCategoryFilter()) {
                $data['ruleSubCategoryFilter'] = $this->normalizer->normalize($object->getRuleSubCategoryFilter(), 'json', $context);
            }
            if ($object->isInitialized('recommendationIdFilter') && null !== $object->getRecommendationIdFilter()) {
                $data['recommendationIdFilter'] = $object->getRecommendationIdFilter();
            }
            if ($object->isInitialized('campaignIdListFilter') && null !== $object->getCampaignIdListFilter()) {
                $values = [];
                foreach ($object->getCampaignIdListFilter() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['campaignIdListFilter'] = $values;
            }
            if ($object->isInitialized('maxResults') && null !== $object->getMaxResults()) {
                $data['maxResults'] = $object->getMaxResults();
            }
            if ($object->isInitialized('nextToken') && null !== $object->getNextToken()) {
                $data['nextToken'] = $object->getNextToken();
            }
            if ($object->isInitialized('ruleCategoryFilter') && null !== $object->getRuleCategoryFilter()) {
                $data['ruleCategoryFilter'] = $this->normalizer->normalize($object->getRuleCategoryFilter(), 'json', $context);
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerGetRuleRecommendationsRequest::class => false];
        }
    }
} else {
    class OptimizationRulesAPISwaggerGetRuleRecommendationsRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerGetRuleRecommendationsRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerGetRuleRecommendationsRequest::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerGetRuleRecommendationsRequest();
            if (\array_key_exists('maxResults', $data) && \is_int($data['maxResults'])) {
                $data['maxResults'] = (float) $data['maxResults'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ruleSubCategoryFilter', $data)) {
                $object->setRuleSubCategoryFilter($this->denormalizer->denormalize($data['ruleSubCategoryFilter'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerEntityFieldFilter::class, 'json', $context));
                unset($data['ruleSubCategoryFilter']);
            }
            if (\array_key_exists('recommendationIdFilter', $data)) {
                $object->setRecommendationIdFilter($data['recommendationIdFilter']);
                unset($data['recommendationIdFilter']);
            }
            if (\array_key_exists('campaignIdListFilter', $data)) {
                $values = [];
                foreach ($data['campaignIdListFilter'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerCampaignFilter::class, 'json', $context);
                }
                $object->setCampaignIdListFilter($values);
                unset($data['campaignIdListFilter']);
            }
            if (\array_key_exists('maxResults', $data)) {
                $object->setMaxResults($data['maxResults']);
                unset($data['maxResults']);
            }
            if (\array_key_exists('nextToken', $data)) {
                $object->setNextToken($data['nextToken']);
                unset($data['nextToken']);
            }
            if (\array_key_exists('ruleCategoryFilter', $data)) {
                $object->setRuleCategoryFilter($this->denormalizer->denormalize($data['ruleCategoryFilter'], \CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerEntityFieldFilter::class, 'json', $context));
                unset($data['ruleCategoryFilter']);
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
            if ($object->isInitialized('ruleSubCategoryFilter') && null !== $object->getRuleSubCategoryFilter()) {
                $data['ruleSubCategoryFilter'] = $this->normalizer->normalize($object->getRuleSubCategoryFilter(), 'json', $context);
            }
            if ($object->isInitialized('recommendationIdFilter') && null !== $object->getRecommendationIdFilter()) {
                $data['recommendationIdFilter'] = $object->getRecommendationIdFilter();
            }
            if ($object->isInitialized('campaignIdListFilter') && null !== $object->getCampaignIdListFilter()) {
                $values = [];
                foreach ($object->getCampaignIdListFilter() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['campaignIdListFilter'] = $values;
            }
            if ($object->isInitialized('maxResults') && null !== $object->getMaxResults()) {
                $data['maxResults'] = $object->getMaxResults();
            }
            if ($object->isInitialized('nextToken') && null !== $object->getNextToken()) {
                $data['nextToken'] = $object->getNextToken();
            }
            if ($object->isInitialized('ruleCategoryFilter') && null !== $object->getRuleCategoryFilter()) {
                $data['ruleCategoryFilter'] = $this->normalizer->normalize($object->getRuleCategoryFilter(), 'json', $context);
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model\OptimizationRulesAPISwaggerGetRuleRecommendationsRequest::class => false];
        }
    }
}
