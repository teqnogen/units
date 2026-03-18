<?php

namespace Teqnogen\Units\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Unit extends Model
{
    protected $table = 'teqnogen_units';
    protected $guarded = ['id'];

    public function type(): BelongsTo
    {
        return $this->belongsTo(UnitType::class, 'unit_type_id');
    }
}