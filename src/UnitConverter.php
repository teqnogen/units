<?php

namespace Teqnogen\Units;

use Illuminate\Support\Facades\Cache;
use Teqnogen\Units\Models\Unit;
use Teqnogen\Units\Models\UnitType;

class UnitConverter
{
    public function convert(float $value, string $from, string $to, string $type): float
    {
        // Validate inputs
        if ($value === null || $from === '' || $to === '' || $type === '') {
            throw new \InvalidArgumentException("All parameters (value, from, to, type) are required.");
        }

        // Cache all units for the given type
        $units = Cache::remember("units_$type", 3600, function () use ($type) {
            return Unit::whereHas('type', fn($q) => $q->where('name', $type))
                ->get()
                ->keyBy('symbol'); // key by symbol for fast lookup
        });

        // Helper function to find unit by symbol or name
        $findUnit = fn($input) => $units[$input] ?? $units->first(fn($u) => strcasecmp($u->name, $input) === 0);

        $fromUnit = $findUnit($from);
        $toUnit = $findUnit($to);

        if (!$fromUnit || !$toUnit) {
            throw new \InvalidArgumentException("Invalid unit: from '$from' to '$to'");
        }

        $baseValue = $value * $fromUnit->ratio;

        return $baseValue / $toUnit->ratio;
    }

    public function addUnit(string $type, string $name, string $symbol, float $ratio)
    {
        $typeModel = UnitType::firstOrCreate([
            'name' => $type
        ]);

        Unit::create([
            'unit_type_id' => $typeModel->id,
            'name' => $name,
            'symbol' => $symbol,
            'ratio' => $ratio
        ]);

        cache()->forget("units_$type");
    }

    public function getUnits(?string $unit = null)
    {
        return Unit::when($unit, function ($query) use ($unit) {
                    $query->where(function ($q) use ($unit) {
                        $q->where('name', 'LIKE', "%{$unit}%")
                        ->orWhere('symbol', 'LIKE', "%{$unit}%");
                    });
                })->get();
    }

    public function getTypes(?string $type = null)
    {
        return UnitType::when($type, function ($query) use ($type) {
                    $query->where('name', 'LIKE', "%{$type}%");
                })->get();
    }
}