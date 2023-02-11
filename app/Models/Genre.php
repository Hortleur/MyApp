<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Genre extends Model
{
    use HasFactory;
    /**
     *
     * @var string
     */
    protected $table = 'genre';

    public static function getAll(): LengthAwarePaginator
    {
        return DB::table('genre')->paginate();
    }

    public function poem(): BelongsTo
    {
        return $this->belongsTo(Poem::class);
    }
}
