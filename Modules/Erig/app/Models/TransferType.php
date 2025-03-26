<?php

namespace Modules\Erig\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Erig\Database\Factories\TransferTypeFactory;

class TransferType extends Model
{
    use HasFactory;

    protected $table = 'transfer_types';

    protected static function newFactory(): TransferTypeFactory
    {
        return TransferTypeFactory::new();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\Modules\Erig\Models\World>
     */
    public function worlds(): HasMany
    {
        return $this->hasMany(World::class, 'transfer_type_id', 'id');
    }
}
