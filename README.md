# Aist Console [![SensioLabsInsight](https://insight.sensiolabs.com/projects/8de5e288-7da5-4d00-aadb-202274a2f5a5/small.png)](https://insight.sensiolabs.com/projects/8de5e288-7da5-4d00-aadb-202274a2f5a5)

[![build status][build image]][build]
[![coverage status][coverage image]][coverage]
[![code climate][Code Climate image]][Code Climate]
[![scrutinizer][Scrutinizer image]][Scrutinizer]
[![check][SensioLabsInsight image]][SensioLabsInsight]
[![packagist][Packagist image]][Packagist]

![requirements][dependencies image]
[![issues][issues image]][issues]
[![pull requests][pull requests image]][pull requests]

[![Minimum PHP Version][Minimum PHP Version image]][PHP]
[![license][license image]][license]

*container-interop console.*

## Installation
Install via composer:
```console
$ composer require aist/console
```
> ###### zf-component-installer
>
> If you use [zf-component-installer](https://github.com/zendframework/zf-component-installer),
> that component will install itself as a module for you.

## Configuration
Register your commands and helpers in config
```php
// console.global.php
return [
    'console' => [
        'commands' => [
            YourCommand::class,
        ],
        'helpers' => [
        ],
    ],
];
```

  [build image]: https://img.shields.io/travis/ma-si/console/master.svg?style=flat-square
  [build]: https://secure.travis-ci.org/ma-si/console
  [coverage image]: https://img.shields.io/coveralls/ma-si/console.svg?style=flat-square
  [coverage]: https://coveralls.io/r/ma-si/console?branch=master
  
  [Code Climate image]: https://img.shields.io/codeclimate/github/ma-si/console.svg?style=flat-square
  [Code Climate]: https://codeclimate.com/github/ma-si/console
  [Scrutinizer image]: https://img.shields.io/scrutinizer/g/ma-si/console.svg?style=flat-square
  [Scrutinizer]: https://scrutinizer-ci.com/g/ma-si/console
  
  [SensioLabsInsight image]: https://img.shields.io/sensiolabs/i/8de5e288-7da5-4d00-aadb-202274a2f5a5.svg?style=flat-square
  [SensioLabsInsight]: https://insight.sensiolabs.com/projects/8de5e288-7da5-4d00-aadb-202274a2f5a5
  
  [Packagist image]: https://img.shields.io/packagist/v/aist/console.svg?style=flat-square
  [Packagist]: https://packagist.org/packages/aist/console

  [dependencies image]: https://img.shields.io/requires/github/ma-si/console.svg?style=flat-square
  [issues image]: https://img.shields.io/github/issues/ma-si/console.svg?style=flat-square
  [issues]: https://github.com/ma-si/console/issues
  [pull requests image]: https://img.shields.io/github/issues-pr/ma-si/console.svg?style=flat-square
  [pull requests]: https://github.com/ma-si/console/pulls
  
  [Minimum PHP Version image]: https://img.shields.io/badge/php-%3E%3D%207.0-8892BF.svg?style=flat-square
  [PHP]: https://php.net
  [license image]: https://poser.pugx.org/aist/console/license?format=flat-square
  [license]: https://opensource.org/licenses/BSD-3-Clause
