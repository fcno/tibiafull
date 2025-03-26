<?php

namespace Modules\Erig\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Erig\Database\Factories\WorldFactory;

class World extends Model
{
    use HasFactory;

    protected $table = 'worlds';

    protected static function newFactory(): WorldFactory
    {
        return WorldFactory::new();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\Modules\Erig\Models\GameWorldType, \Modules\Erig\Models\World>
     */
    public function gameWorldType(): BelongsTo
    {
        return $this->belongsTo(GameWorldType::class, 'game_world_type_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\Modules\Erig\Models\Location, \Modules\Erig\Models\World>
     */
    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'location_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\Modules\Erig\Models\PVPType, \Modules\Erig\Models\World>
     */
    public function pvpType(): BelongsTo
    {
        return $this->belongsTo(PVPType::class, 'pvp_type_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\Modules\Erig\Models\TransferType, \Modules\Erig\Models\World>
     */
    public function transferType(): BelongsTo
    {
        return $this->belongsTo(TransferType::class, 'transfer_type_id', 'id');
    }
}
