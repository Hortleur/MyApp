<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Query\Builder;
class Genre extends Model
{
    use HasFactory;
    /**
     *
     * @var string
     */
    protected $table = 'genre';

    public static function getAll(): \Illuminate\Support\Collection
    {
        return DB::table('genre')->get();
    }

    public static function findOrFail($id): Builder
    {
        return DB::table('genre')->where('id', '=', "$id");
    }


    public function poem(): BelongsTo
    {
        return $this->belongsTo(Poem::class);
    }
}
