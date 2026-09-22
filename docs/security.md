# Security

This public repository intentionally excludes production configuration, credentials, customer data, database dumps, internal hostnames, and deploy scripts.

Production design principles include:

- MySQL and Redis are not exposed to the public internet.
- Internal services communicate over private Docker networks.
- Administrative interfaces are access-controlled.
- Production debug mode is disabled.
- Secrets are supplied through the runtime environment and excluded from Git.
- Credentials and authorization headers are excluded from application logs.
- Server-side fetching of external project homepages is SSRF-aware.
- DNS results and redirects are checked against private, loopback, link-local, and metadata address ranges.
- Response size, MIME type, redirect count, and timeouts are bounded.

The examples in this repository are intentionally sanitized and are not deployment-ready production configuration.
