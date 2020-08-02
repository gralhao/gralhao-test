<p align="center">
  <a href="https://github.com/gralhao/gralhao" rel="noopener">
    <img src="https://github.com/gralhao/gralhao/raw/master/docs/assets/logo.svg" alt="Gralhao logo">
  </a>
</p>

<h3 align="center">gralhao/gralhao-test</h3>

<div align="center">

[![Latest Stable Version](https://img.shields.io/packagist/v/gralhao/gralhao-test.svg?style=flat-square)](https://packagist.org/packages/gralhao/gralhao-test)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.4-8892BF.svg)](https://php.net/)
[![Build Status](https://travis-ci.com/gralhao/gralhao-test.svg?branch=master)](https://travis-ci.com/gralhao/gralhao-test)
[![Status](https://img.shields.io/badge/status-active-success.svg)]()
[![License](https://img.shields.io/badge/license-BSD-blue.svg)](/LICENSE)

</div>

---

<div align="center">
  <p>A pack of tools to make simple Gralhao application tests</p>
</div>

## Index

- [About](#about)
- [Getting Started](#getting_started)
- [Usage](#usage)
- [Built Using](#built_using)
- [Authors](#authors)
- [Acknowledgments](#acknowledgement)

## About <a name = "about"></a>
This library extends [PHP Unit](https://github.com/sebastianbergmann/phpunit) and all PHP Unit features still available.

## Getting Started <a name = "getting_started"></a>

### Prerequisites
PHP ^7.4, Phalcon ^4.x, Gralhao ^1.x

### Usage <a name="usage"></a>
Installing
```bash
composer require gralhao/gralhao-test
```
Creating test classes:
```php
class MyClassTest extends \Gralhao\Test\TestCase
{
}
```

Bootstraping:
```php
public function testReturnAnApplicationInstance(): void
{
    $this->bootstrap()->setConfig([
        'modules' => []
    ]);
    $this->assertInstanceOf(\Phalcon\Mvc\Micro::class, $this->getApp());
}
```

Testing collections:
```php
public function testReturnAValidRequestResponse(): void
{
    $request = new \Gralhao\Test\Request();
    $request->setMethod('POST')
        ->setPath('/test')
        ->setHeader('key', 'value')
        ->setBody('test');
    $response = $this->dispatch($request);
    $this->assertEquals(200, $response->getStatusCode());
    $this->assertEquals('test', $response->data->body);
    $this->assertEquals('value', $response->data->headers->key);
}
```

## Built Using <a name = "built_using"></a>
- [PHP Unit](https://github.com/sebastianbergmann/phpunit)
- [Gralhao](https://github.com/gralhao/gralhao)
- [Phalcon](https://phalcon.io/)

## Authors <a name = "authors"></a>
- [@mocallu](https://github.com/mocallu) - Idea & Initial work

See also the list of [contributors](https://github.com/gralhao/gralhao-test/contributors) who participated in this project.

## Acknowledgements <a name = "acknowledgement"></a>
- [Phalcon Project](https://phalcon.io)
- [A.K.A. Gralhao](https://en.wikipedia.org/wiki/Red-throated_caracara)
