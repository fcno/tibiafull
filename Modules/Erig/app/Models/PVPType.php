<?php

namespace Modules\Erig\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Erig\Database\Factories\PVPTypeFactory;

class PVPType extends Model
{
    use HasFactory;

    protected $table = 'pvp_types';

    protected static function newFactory(): PVPTypeFactory
    {
        return PVPTypeFactory::new();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\Modules\Erig\Models\World>
     */
    public function worlds(): HasMany
    {
        return $this->hasMany(World::class, 'pvp_type_id', 'id');
    }
}
