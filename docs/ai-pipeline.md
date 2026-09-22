# AI Pipeline

The AI layer is provider-independent and designed for comparison rather than permanent coupling to one model.

## Principles

1. Deterministic filtering happens before expensive inference.
2. Local inference can reduce the candidate set further.
3. External models receive structured, bounded input.
4. Responses must satisfy a structured schema.
5. Provider/model/prompt/input versions are retained with results.
6. Failures are explicit and retry behavior is bounded.
7. Historical analyses are not silently overwritten when models change.

## Routing

```text
PHP pre-filter
      |
      v
Local classifier
      |
      v
External provider
      |
      v
Structured validation
      |
      v
Versioned analysis
      |
      v
Opportunity scoring
```

This design makes it possible to evaluate a new model alongside an existing stage before changing production routing.
