# Teqnogen Units

Laravel package for unit conversion with predefined unit types and units.

## Installation

```bash
composer require teqnogen/units

php artisan migrate

php artisan vendor:publish

```

## Example

```bash

use Teqnogen\Units\UnitConverter;

$converter = app(UnitConverter::class);

// Convert 5 kilometers to meters
$valueInMeters = $converter->convert(5, 'km', 'm', 'length'); // 5000

// Convert 2 kilograms to grams
$valueInGrams = $converter->convert(2, 'kg', 'g', 'weight'); // 2000

```