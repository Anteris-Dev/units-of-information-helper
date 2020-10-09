# A Byte-Sized Package for your Units of Information Conversion
[![Tests](https://github.com/Anteris-Dev/units-of-information-helper/workflows/Test/badge.svg)](https://github.com/Anteris-Dev/units-of-information-helper/actions?query=workflow%3ATest)
[![Check & fix styling](https://github.com/Anteris-Dev/units-of-information-helper/workflows/Check%20&%20fix%20styling/badge.svg)](https://github.com/Anteris-Dev/units-of-information-helper/actions?query=workflow%3A%22Check+%26+fix+styling%22)

Okay, we lied... it's 14.8 Megabytes, but it's sooo worth it.

# To Install
```bash
composer require anteris-dev/units-of-information-helper:dev-master
```

# About
This package helps convert units of information (Bits, Bytes, Kilobytes, Megabytes, Gigabytes, Terabytes, etc.) to other units of information and readable strings.

## Example: Gigabytes to Megabytes
```php

use Anteris\Helper\UnitsOfInformation\Gigabyte;
use Anteris\Helper\UnitsOfInformation\Megabyte;

Gigabyte::toMegabyte(2); // 2048

// OR

Megabyte::fromGigabyte(2); // 2048

```

## Example: Human Readable String
```php

use Anteris\Helper\UnitsOfInformation\Kilobyte;
use Anteris\Helper\UnitsOfInformation\Human;

// Outputs: 1.00 MB
echo Human::megabyte(
    Kilobyte::toMegabyte(1028)
);

```
