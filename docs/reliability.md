# Reliability

## Collection checkpoints

A source checkpoint advances only after the complete collection window succeeds. A small overlap between windows is safe because imports are idempotent.

## Window splitting

When a source search window contains too many results, the collector progressively splits it into smaller intervals instead of silently truncating the result set.

## Rate limits

External API limits are tracked and expensive enrichment can pause while source collection retains priority.

## Queues

Separate queues prevent slow AI or enrichment jobs from starving collection and metrics workloads.

## Retries

Network and provider failures use bounded retries/backoff. Permanent validation failures remain visible instead of entering infinite retry loops.

## History

Metric snapshots are created only when values change. AI results retain enough version information to compare decisions across model/prompt changes.
