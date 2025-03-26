<?php

namespace Modules\Erig\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Erig\Database\Factories\LocationFactory;

class Location extends Model
{
    use HasFactory;

    protected $table = 'locations';

    protected static function newFactory(): LocationFactory
    {
        return LocationFactory::new();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\Modules\Erig\Models\World>
     */
    public function worlds(): HasMany
    {
        return $this->hasMany(World::class, 'location_id', 'id');
    }
}
