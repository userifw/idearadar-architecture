# TypeSafe/Jev Evaluation

## Goal

Evaluate TypeSafe/Jev as an additional classification stage against the existing project-analysis pipeline without changing production routing first.

## Dataset

- 4,344 real GitHub projects
- approximately 4.76 million input tokens

## Run

- approximately 47 minutes total
- 611 ms median API latency
- zero processing errors

For each result, the evaluation retained structured decisions and supporting metadata such as confidence/probability, latency, model information, and input hashes.

## Why the benchmark mattered

The objective was not to prove that a new model was universally better. The experiment was designed to identify where model decisions differed and whether those differences were operationally useful.

The comparison surfaced:

- classification disagreements
- uncertainty-handling differences
- candidates for false-positive/false-negative review
- a dataset-selection issue affecting the initial benchmark

The last point is important: evaluation infrastructure should be able to reveal problems in the benchmark itself, not only differences between models.

## Production decision

A new model should not replace an existing production stage solely because it is faster or cheaper. Routing changes require comparison on representative data, explicit failure handling, and review of disagreement classes.
