<?php

namespace Modules\Erig\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Erig\Database\Factories\GameWorldTypeFactory;

class GameWorldType extends Model
{
    use HasFactory;

    protected $table = 'game_world_types';

    protected static function newFactory(): GameWorldTypeFactory
    {
        return GameWorldTypeFactory::new();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\Modules\Erig\Models\World>
     */
    public function worlds(): HasMany
    {
        return $this->hasMany(World::class, 'game_world_type_id', 'id');
    }
}
