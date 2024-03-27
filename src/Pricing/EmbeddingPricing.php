<?php

namespace Outl1ne\NovaOpenAI\Pricing;

class EmbeddingPricing extends Calculator
{
    public function calculate(int $inputTokens, int $outputTokens = null): ?float
    {
        if (!$this->basePricing->pricing) return null;
        $pricing = $this->basePricing->pricing->models->{$this->model} ?? null;

        if ($pricing === null) return null;
        return $this->basePricing->pricing->embedding->{$this->model} * $inputTokens / 1000;
    }
}
