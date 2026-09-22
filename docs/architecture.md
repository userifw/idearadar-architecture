# Architecture

IdeaRadar separates acquisition, enrichment, AI analysis, scoring, validation, and human review.

## Design goals

- Source independence
- Idempotent processing
- Failure isolation
- Observable asynchronous work
- Reproducible AI decisions
- Controlled external API cost
- Safe handling of untrusted external URLs

## Source layer

Jobs and domain models do not depend directly on GitHub. A source adapter normalizes provider-specific payloads into a shared DTO.

## Persistence

Current project state is stored separately from historical metrics and AI-analysis history. Unchanged metric snapshots are not duplicated.

## Processing

Collection, enrichment, metrics, and AI workloads use separate queues. Each stage can fail and retry without forcing the whole pipeline to restart.

## Human control

AI classification and scoring are signals. They do not replace the final review step for projects selected for deeper investigation.
