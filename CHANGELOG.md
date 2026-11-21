# Changelog

All notable changes to `laravel-carta-del-docente` will be documented in this file.

## v2.0.0 - 2026-11-21

### Breaking changes

- Minimum PHP version is now **8.2** (dropped PHP 8.0 and 8.1).
- Minimum Laravel version is now **11** (dropped Laravel 9 and 10).

Projects still on Laravel 9/10 or PHP < 8.2 can keep using `^1.4`.

### What's Changed

- Replace abandoned `nunomaduro/larastan` with `larastan/larastan`
- PHPStan CI now runs on PHP 8.4; config updated for PHPStan 2 / Larastan 3
- Bump actions/checkout from 6 to 7 in https://github.com/datomatic/laravel-carta-del-docente/pull/30

**Full Changelog**: https://github.com/datomatic/laravel-carta-del-docente/compare/v1.4.0...v2.0.0

## v1.4.0 - 2026-11-20

Adds PHP 8.6 support (CI now runs on PHP 8.6).

### What's Changed

* Bump ramsey/composer-install from 3 to 4 by @dependabot[bot] in https://github.com/datomatic/laravel-carta-del-docente/pull/27
* Bump dependabot/fetch-metadata from 2.5.0 to 3.0.0 by @dependabot[bot] in https://github.com/datomatic/laravel-carta-del-docente/pull/28
* Bump dependabot/fetch-metadata from 3.0.0 to 3.1.0 by @dependabot[bot] in https://github.com/datomatic/laravel-carta-del-docente/pull/29

**Full Changelog**: https://github.com/datomatic/laravel-carta-del-docente/compare/v1.3.1...v1.4.0

## v1.3.1 - 2026-03-17

Laravel 13 support

## v1.3.0 - 2025-02-24

- Laravel 12 support

## v1.2.2 - 2024-10-23

- add cache none param

## v1.2.1 - 2024-10-23

- update carta-del-docente wsdl

## v1.2.0 - 2024-03-14

Laravel 11 support

## v1.1.1a - 2023-02-15

Laravel 10 support

## v1.1.0 - 2022-10-25

- documentation
- accept int value as $operationType
- code refactoring

## v1.0.1 - 2022-10-24

- add params to facade methods

## v1.0.0 - 2022-10-21

Initial release
