<?php

declare(strict_types=1);

namespace Showcase\Sources;

use DateTimeImmutable;

interface SourceInterface
{
    public function code(): string;

    /** @return iterable<SourceProjectData> */
    public function projects(DateTimeImmutable $from, DateTimeImmutable $until): iterable;

    public function project(string $identifier): SourceProjectData;

    /** @param array<string, mixed> $payload */
    public function normalize(array $payload): SourceProjectData;
}
