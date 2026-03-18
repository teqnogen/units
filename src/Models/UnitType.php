<?php

namespace Teqnogen\Units\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UnitType extends Model
{
    protected $table = 'teqnogen_unit_types';
    protected $guarded = ['id'];

    public function units(): HasMany
    {
        return $this->hasMany(Unit::class);
    }
}