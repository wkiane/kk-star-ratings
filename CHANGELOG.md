# Change Log

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [4.2] - 2021-04-19

### Added
- Ability to use/show custom star ratings.
  - Example PHP Code
  ```php
    add_action('kksr_init', 'my_custom_star_ratings');
    function my_custom_star_ratings() {
        new kkStarRatings('foo');
    }
  ```

  - Example Shortcode
  ```html
  <!-- 'id' will default to the current post/page id -->
  [kkstarratings slug="foo" id=""]
  ```

### Fixed
- Fix calculation used in `kk_star_ratings_get` function.

## [4.1.10] - 2021-04-19

### Fixed
- Update stability tag.

## [4.1.9] - 2021-04-18

### Fixed
- Refactored form fields.
- Response payload fallback to defaults.

### Updated
- Tested with WordPress 5.7.1

## [4.1.8] - 2021-03-14

### Fixed
- Correctly load language files.

### Updated
- Tested with WordPress 5.7

## [4.1.7] - 2020-12-20

### Updated
- Tested with WordPress 5.6

### Fixed
- Correctly escaped attribute.

## [4.1.6] - 2020-12-16

### Security
- Sanitized and escaped all potential unsafe data.

## [4.1.5] - 2020-12-13

### Security
- Escaped html attributes to avoid possible XSS exploits (Thanks to Toan Nguyen of Techlab Corporation).

## [4.1.4] - 2020-11-28

### Updated
- Tested upto WordPress 5.5.3

## [4.1.3] - 2019-12-25

### Fixed
- Unique voting now correctly forbids multiple ratings by same IP. (GitHub PR #91).
- Options are now correctly synced when installing, upgrading and activating.
- Use absolute change log links in docs.

## [4.1.2] - 2019-11-05

### Fixed
- Special characters are now escaped in the title of structured data.

## [4.1.1] - 2019-10-29

### Fixed
- Factory/default options are now synced on activation.

## [4.1.0] - 2019-10-28

### Added
- Customizable gap/gutter between stars.
- Structured data in pages.

### Updated
- Svg icons

### Fixed
- Activation only ports the previous options if version was lower than 3.
- Relative star svg links instead of absolute links are now used in css.

## [4.0.0] - 2019-10-26

- Stability
