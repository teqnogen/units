<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Teqnogen\Units\Models\Unit;
use Teqnogen\Units\Models\UnitType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teqnogen_units', function (Blueprint $table) {
            $table->id();

            // Foreign key to unit_types
            $table->foreignId('unit_type_id')
                  ->constrained('teqnogen_unit_types')
                  ->cascadeOnDelete();

            $table->string('name');     // e.g., meter
            $table->string('symbol');   // e.g., m
            $table->double('ratio')->nullable();    // multiplier relative to base unit
            $table->boolean('is_base')->default(false);

            $table->timestamps();
        });

                // Insert default units
                // dd(__DIR__);
        $unitsData = require __DIR__ . '/../../src/Database/Seeders/units.php';

        foreach ($unitsData as $typeName => $typeData) {
            $unitType = UnitType::firstOrCreate(['name' => $typeName]);

            foreach ($typeData['units'] as $unit) {
                Unit::firstOrCreate(
                    ['symbol' => $unit['symbol'], 'unit_type_id' => $unitType->id],
                    [
                        'name' => $unit['name'],
                        'ratio' => $unit['ratio'],
                        'is_base' => $unit['is_base'] ?? false,
                    ]
                );
            }
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teqnogen_units');
    }
};