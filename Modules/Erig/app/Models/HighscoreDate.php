<?php

namespace Modules\Erig\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use Modules\Erig\Database\Factories\HighscoreDateFactory;

/**
 * @property \Illuminate\Support\Carbon $date
 */
class HighscoreDate extends Model
{
    use HasFactory;

    protected $table = 'highscore_dates';

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'date' => 'datetime:Y-m-d',
        ];
    }

    // protected static function newFactory(): HighscoreDateFactory
    // {
    //     // return HighscoreDateFactory::new();
    // }
}
