# Vatlayer PHP

This is a PHP package of the service Vatlayer.
You can find additional information in the documentation via this link

<a href="https://vatlayer.com/documentation">https://vatlayer.com/documentation </a>

# How to install?

```
composer require alxdorosenco/vatlayer-php
```

## Endpoint 1: Simple VAT number validation

"validate" endpoint
```php
require __DIR__ . '/vendor/autoload.php';
use AlxDorosenco\VatlayerPhp\Vatlayer;

Vatlayer::connect('access_key')->validate()->setVatNumber('LU26375245')->toArray();
Vatlayer::connect('access_key')->validate()->setVatNumber('LU26375245')->setFormat(1)->toJson();
```

```php
require __DIR__ . '/vendor/autoload.php';
use AlxDorosenco\VatlayerPhp\Vatlayer;

Vatlayer::connect('access_key')
                ->validate()
                ->setVatNumber('LU26375245')
                ->setCallback('CALLBACK_FUNCTION')
                ->setFormat(1)
                ->toJson();
```

## Endpoint 2: VAT rate for single EU member state

"rate" endpoint - via country code
```php
require __DIR__ . '/vendor/autoload.php';
use AlxDorosenco\VatlayerPhp\Vatlayer;

Vatlayer::connect('access_key')->rate()->setCountryCode('GB')->toArray();
Vatlayer::connect('access_key')->rate()->setCountryCode('GB')->setFormat(1)->toJson();
```

"rate" endpoint - via custom IP address
```php
require __DIR__ . '/vendor/autoload.php';
use AlxDorosenco\VatlayerPhp\Vatlayer;

Vatlayer::connect('access_key')->rate()->setIpAddress('176.249.153.36')->toArray();
Vatlayer::connect('access_key')->rate()->setIpAddress('176.249.153.36')->setFormat(1)->toJson();
```

"rate" - get EU VAT rate for a specific country - via client IP address
```php
require __DIR__ . '/vendor/autoload.php';
use AlxDorosenco\VatlayerPhp\Vatlayer;

Vatlayer::connect('access_key')->rate()->setCountryCode('GB')->setClientIp(1)->toArray();
Vatlayer::connect('access_key')->rate()->setCountryCode('GB')->setClientIp(1)->toJson();
```

## Endpoint 3: VAT rates for all EU member states
"rate_list" endpoint
```php
require __DIR__ . '/vendor/autoload.php';
use AlxDorosenco\VatlayerPhp\Vatlayer;

Vatlayer::connect('access_key')->rateList()->toArray();
Vatlayer::connect('access_key')->rateList()->setFormat(1)->toJson();
```

## Endpoint 4: Price calculation
"price" endpoint
```php
require __DIR__ . '/vendor/autoload.php';
use AlxDorosenco\VatlayerPhp\Vatlayer;

Vatlayer::connect('access_key')
                ->price()
                ->setAmount(100)
                ->setCountryCode('GB')
                ->setType('medical')
                ->setIncl(1)
                ->toArray();
                
Vatlayer::connect('access_key')
                ->price()
                ->setAmount(100)
                ->setCountryCode('GB')
                ->setType('medical')
                ->setIncl(1)
                ->setFormat(1)
                ->toJson();
```

## Endpoint 5: Reduced VAT Rates - Types of Goods
"types" endpoint
```php
require __DIR__ . '/vendor/autoload.php';
use AlxDorosenco\VatlayerPhp\Vatlayer;

Vatlayer::connect('access_key')->types()->toArray();
Vatlayer::connect('access_key')->types()->setFormat(1)->toJson();
```

## License
Released under the MIT License, see [LICENSE](LICENSE).