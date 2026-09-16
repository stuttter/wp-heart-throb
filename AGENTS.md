# WP Heart Throb contributor guidance

## Compatibility

- Preserve PHP 7.4 and WordPress 6.4 compatibility unless a dedicated pull
  request explicitly changes the published minimums.
- Preserve public functions, hook registration, script and style handles,
  asset URLs, Heartbeat request and response keys, and the toolbar item ID.
- Treat changes to Heartbeat timing, front-end asset loading, toolbar markup,
  and animation behavior as compatibility-sensitive.

## Tests

- Add or update a regression test before changing observed PHP behavior.
- Characterize hook registration, enqueued asset arguments, toolbar visibility,
  Heartbeat payload handling, and helper return values when touching runtime
  code.
- Run `composer test`, the declared PHP syntax matrix, and metadata/artifact
  validation before requesting review.

## Automation

Follow the organization-level safety boundaries. AI-authored implementation
must remain a draft pull request and cannot modify workflows, release policy,
ownership, security policy, dependencies, or this file without a specific
maintainer decision for that change.
