# Viewport Units Polyfill
A pure css solution for iOS 5/6/7's incomplete implementation of vw/vh units. This layout-breaking bug is separate from the \[relatively minor\] address bar shown/hidden discrepancy described in Future Work.

## References
* https://caniuse.com/#feat=viewport-units
* https://webdesignerwall.com/tutorials/css-fix-for-ios-vh-unit-bug

## Usage
**Platforms:** PHP 5.x and higher
**Dependencies**: None
### Native PHP Example
a
#### WordPress Example
b

## Alternative Solutions
[viewport-units-buggyfill](https://github.com/rodneyrehm/viewport-units-buggyfill) - a client-side implementation. Will not work before the js file is loaded and parsed, or if js is disabled.

https://gist.github.com/pburtchaell/e702f441ba9b3f76f587 - uses media queries only, no user agent sniffing

## Changelog

### 2017-10-20
Initial implementation

### 2019-03-30
Upload as a public repository

### Future Work
Also address vh value jump bug/feature in modern mobile browsers - ref:
* https://stackoverflow.com/q/37112218
* https://css-tricks.com/the-trick-to-viewport-units-on-mobile/
