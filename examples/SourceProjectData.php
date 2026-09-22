<?php

declare(strict_types=1);

namespace Showcase\Sources;

use DateTimeImmutable;

final readonly class SourceProjectData
{
    /**
     * @param list<string> $topics
     * @param array<string, mixed> $rawData
     */
    public function __construct(
        public string $externalId,
        public string $name,
        public ?string $fullName,
        public string $url,
        public ?string $description,
        public ?string $homepageUrl,
        public ?string $authorName,
        public ?string $primaryLanguage,
        public array $topics,
        public bool $isFork,
        public bool $isArchived,
        public bool $isTemplate,
        public ?DateTimeImmutable $sourceCreatedAt,
        public ?DateTimeImmutable $sourceUpdatedAt,
        public int $starsCount,
        public int $forksCount,
        public int $openIssuesCount,
        public array $rawData,
    ) {}
}
