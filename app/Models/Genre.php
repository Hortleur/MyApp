<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Contracts\Pagination\Paginator;
class Genre extends Model
{
    use HasFactory;
    /**
     *
     * @var string
     */
    protected $table = 'genre';

    public static function getAll(): Paginator
    {
        return DB::table('genre')->simplePaginate();
    }

    public static function findOrFail($id)
    {
        return DB::table('genre')->where('id', '=', "$id");
    }

    public function poem(): BelongsTo
    {
        return $this->belongsTo(Poem::class);
    }
}
