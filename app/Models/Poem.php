<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Pagination\Paginator;

class Poem extends Model
{
    use HasFactory;
    /**
     *
     * @var string
     */
    protected $table = 'poem';

    public static function getAll(): Paginator
    {
        return DB::table('poem')->simplePaginate();
    }

    public static function findOrFail($id): \Illuminate\Database\Query\Builder
    {
        return DB::table('poem')->where('id', '=', "$id");
    }

    public function genre()
    {
        return $this->hasMany(Genre::class,  'genre_id');
    }

    public function topic()
    {
        return $this->hasMany(Topics::class, 'topic_id');
    }
}
