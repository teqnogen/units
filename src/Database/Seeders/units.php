<?php

return [

    'length' => [
        'base' => 'm',
        'units' => [
            ['name' => 'millimeter', 'symbol' => 'mm', 'ratio' => 0.001, 'is_base' => false],
            ['name' => 'centimeter', 'symbol' => 'cm', 'ratio' => 0.01, 'is_base' => false],
            ['name' => 'meter', 'symbol' => 'm', 'ratio' => 1, 'is_base' => true],
            ['name' => 'kilometer', 'symbol' => 'km', 'ratio' => 1000, 'is_base' => false],
            ['name' => 'inch', 'symbol' => 'in', 'ratio' => 0.0254, 'is_base' => false],
            ['name' => 'foot', 'symbol' => 'ft', 'ratio' => 0.3048, 'is_base' => false],
            ['name' => 'yard', 'symbol' => 'yd', 'ratio' => 0.9144, 'is_base' => false],
            ['name' => 'mile', 'symbol' => 'mi', 'ratio' => 1609.34, 'is_base' => false],
        ],
    ],

    'weight' => [
        'base' => 'g',
        'units' => [
            ['name' => 'milligram', 'symbol' => 'mg', 'ratio' => 0.001, 'is_base' => false],
            ['name' => 'gram', 'symbol' => 'g', 'ratio' => 1, 'is_base' => true],
            ['name' => 'kilogram', 'symbol' => 'kg', 'ratio' => 1000, 'is_base' => false],
            ['name' => 'pound', 'symbol' => 'lb', 'ratio' => 453.592, 'is_base' => false],
            ['name' => 'ounce', 'symbol' => 'oz', 'ratio' => 28.3495, 'is_base' => false],
            ['name' => 'ton', 'symbol' => 't', 'ratio' => 1000000, 'is_base' => false],
        ],
    ],

    'volume' => [
        'base' => 'l',
        'units' => [
            ['name' => 'milliliter', 'symbol' => 'ml', 'ratio' => 0.001, 'is_base' => false],
            ['name' => 'liter', 'symbol' => 'l', 'ratio' => 1, 'is_base' => true],
            ['name' => 'cubic meter', 'symbol' => 'm3', 'ratio' => 1000, 'is_base' => false],
            ['name' => 'gallon', 'symbol' => 'gal', 'ratio' => 3.78541, 'is_base' => false],
            ['name' => 'pint', 'symbol' => 'pt', 'ratio' => 0.473176, 'is_base' => false],
            ['name' => 'cup', 'symbol' => 'cup', 'ratio' => 0.24, 'is_base' => false],
        ],
    ],

    'area' => [
        'base' => 'm2',
        'units' => [
            ['name' => 'square millimeter', 'symbol' => 'mm2', 'ratio' => 0.000001, 'is_base' => false],
            ['name' => 'square centimeter', 'symbol' => 'cm2', 'ratio' => 0.0001, 'is_base' => false],
            ['name' => 'square meter', 'symbol' => 'm2', 'ratio' => 1, 'is_base' => true],
            ['name' => 'square kilometer', 'symbol' => 'km2', 'ratio' => 1000000, 'is_base' => false],
            ['name' => 'acre', 'symbol' => 'ac', 'ratio' => 4046.86, 'is_base' => false],
            ['name' => 'hectare', 'symbol' => 'ha', 'ratio' => 10000, 'is_base' => false],
            ['name' => 'square foot', 'symbol' => 'ft2', 'ratio' => 0.092903, 'is_base' => false],
            ['name' => 'square yard', 'symbol' => 'yd2', 'ratio' => 0.836127, 'is_base' => false],
        ],
    ],

    'speed' => [
        'base' => 'm/s',
        'units' => [
            ['name' => 'meter per second', 'symbol' => 'm/s', 'ratio' => 1, 'is_base' => true],
            ['name' => 'kilometer per hour', 'symbol' => 'km/h', 'ratio' => 0.277778, 'is_base' => false],
            ['name' => 'mile per hour', 'symbol' => 'mph', 'ratio' => 0.44704, 'is_base' => false],
            ['name' => 'foot per second', 'symbol' => 'ft/s', 'ratio' => 0.3048, 'is_base' => false],
            ['name' => 'knot', 'symbol' => 'kn', 'ratio' => 0.514444, 'is_base' => false],
        ],
    ],

    'time' => [
        'base' => 's',
        'units' => [
            ['name' => 'second', 'symbol' => 's', 'ratio' => 1, 'is_base' => true],
            ['name' => 'minute', 'symbol' => 'min', 'ratio' => 60, 'is_base' => false],
            ['name' => 'hour', 'symbol' => 'h', 'ratio' => 3600, 'is_base' => false],
            ['name' => 'day', 'symbol' => 'd', 'ratio' => 86400, 'is_base' => false],
        ],
    ],

    'temperature' => [
        'base' => 'C', // Celsius
        'units' => [
            ['name' => 'Celsius', 'symbol' => 'C', 'ratio' => 1, 'is_base' => true],
            ['name' => 'Fahrenheit', 'symbol' => 'F', 'ratio' => null, 'is_base' => false],
            ['name' => 'Kelvin', 'symbol' => 'K', 'ratio' => null, 'is_base' => false],
        ],
    ],

];