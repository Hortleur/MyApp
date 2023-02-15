<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Topics extends Model
{
    use HasFactory;

    protected $table = 'topic';

    public static function getAll(): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return DB::table('topic')->paginate();
    }

    public static function findOrFail($id): \Illuminate\Database\Query\Builder
    {
        return DB::table('topic')->where('id', '=', "$id");
    }

    public function poem()
    {
        return $this->belongsTo(Poem::class);
    }
}
