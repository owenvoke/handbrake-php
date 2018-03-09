# Changelog

All notable changes to `handbrake-php` will be documented in this file.

Updates should follow the [Keep a CHANGELOG](http://keepachangelog.com/) principles.

## v2.0.0 - 2018-03-09

### Added
- Add a new `handbrakeBinary` config property to specify a custom path (semi-pulled from @BurakBoz's fork)
- Add new `audioEncodingScheme` config property
- Add unit tests for the Handbrake class

### Changed
- Change visibility of `generateCommand()` to `public`

### Removed
- Remove the `__get()`, `__set()` and `getConfig()` methods from the `Config` class

## v1.0.3 - 2017-12-06

### Fixed
- Change to legal name in LICENSE

## v1.0.2 - 2017-11-20

### Fixed
- Correct LICENSE to be valid

## v1.0.1 - 2017-11-17

### Added
- Update the directory structure
- Add Travis and StyleCI

## v1.0.0 - 2017-04-01

### Added
- Initial release of the Handbrake system
