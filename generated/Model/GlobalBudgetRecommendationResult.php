<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznSponsoredProductsApiPHP\Generated\Model;

class GlobalBudgetRecommendationResult extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $resultStatus = 'SUCCESS';
    /**
     * The budget recommendation for each country.
     *
     * @var array<string, CountryBudgetRecommendation>
     */
    protected $countryBudgetRecommendations;
    /**
     * The campaign Id.
     *
     * @var string
     */
    protected $campaignId;
    /**
     * Correlate the recommendations to the campaign index in the request. Zero-based.
     *
     * @var int
     */
    protected $index;
    /**
     * @var list<GlobalBudgetRecommendationError>
     */
    protected $errors;

    public function getResultStatus(): string
    {
        return $this->resultStatus;
    }

    public function setResultStatus(string $resultStatus): self
    {
        $this->initialized['resultStatus'] = true;
        $this->resultStatus = $resultStatus;

        return $this;
    }

    /**
     * The budget recommendation for each country.
     *
     * @return array<string, CountryBudgetRecommendation>
     */
    public function getCountryBudgetRecommendations(): iterable
    {
        return $this->countryBudgetRecommendations;
    }

    /**
     * The budget recommendation for each country.
     *
     * @param array<string, CountryBudgetRecommendation> $countryBudgetRecommendations
     */
    public function setCountryBudgetRecommendations(iterable $countryBudgetRecommendations): self
    {
        $this->initialized['countryBudgetRecommendations'] = true;
        $this->countryBudgetRecommendations = $countryBudgetRecommendations;

        return $this;
    }

    /**
     * The campaign Id.
     */
    public function getCampaignId(): string
    {
        return $this->campaignId;
    }

    /**
     * The campaign Id.
     */
    public function setCampaignId(string $campaignId): self
    {
        $this->initialized['campaignId'] = true;
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * Correlate the recommendations to the campaign index in the request. Zero-based.
     */
    public function getIndex(): int
    {
        return $this->index;
    }

    /**
     * Correlate the recommendations to the campaign index in the request. Zero-based.
     */
    public function setIndex(int $index): self
    {
        $this->initialized['index'] = true;
        $this->index = $index;

        return $this;
    }

    /**
     * @return list<GlobalBudgetRecommendationError>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param list<GlobalBudgetRecommendationError> $errors
     */
    public function setErrors(array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }
}
