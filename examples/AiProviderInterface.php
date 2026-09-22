<?php

declare(strict_types=1);

namespace Showcase\AI;

interface AiProviderInterface
{
    public function analyzeProject(ProjectAnalysisInput $input): ProjectAnalysisData;

    public function healthCheck(): bool;

    public function providerName(): string;

    public function modelName(): string;
}
