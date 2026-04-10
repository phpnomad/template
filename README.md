# phpnomad/template

[![Latest Version](https://img.shields.io/packagist/v/phpnomad/template.svg)](https://packagist.org/packages/phpnomad/template)
[![Total Downloads](https://img.shields.io/packagist/dt/phpnomad/template.svg)](https://packagist.org/packages/phpnomad/template)
[![PHP Version](https://img.shields.io/packagist/php-v/phpnomad/template.svg)](https://packagist.org/packages/phpnomad/template)
[![License](https://img.shields.io/packagist/l/phpnomad/template.svg)](https://packagist.org/packages/phpnomad/template)

`phpnomad/template` is the template rendering abstraction for PHPNomad applications. It defines a small set of interfaces that describe how a template name becomes rendered output, without committing to any particular template engine. The primary contract is `CanRender`, which takes a template path and a data array and returns a string. Companion interfaces handle path and URL resolution, and a screen resolver interface covers admin routing for plugins that need it. A plain-PHP engine ships with the package, and `phpnomad/twig-integration` provides a Twig-backed implementation that slots into the same contract.

## Installation

```bash
composer require phpnomad/template
```

## Overview

- `CanRender` defines the render contract: a template path plus a data array returns a rendered string, or throws `TemplateException` if something goes wrong.
- `CanResolvePaths` and `CanResolveUrls` map a logical template name to a file path or a public URL, keeping callers free of filesystem assumptions.
- `ScreenResolverStrategy` covers admin and page-slug routing, including current-screen detection and URL generation for slug and action pairs.
- `RenderService` composes a path resolver with a `CanRender` implementation so application code passes a template name rather than an absolute file path.
- `PhpEngine` is the bundled default renderer. It appends `.php` to the resolved path, extracts the data array into scope, and captures the include through output buffering.

## Documentation

Full documentation lives at [phpnomad.com](https://phpnomad.com), including how `phpnomad/core` exposes a `Template` facade for static access to the render service inside a running application.

## License

Released under the MIT license. See [LICENSE.txt](LICENSE.txt).
