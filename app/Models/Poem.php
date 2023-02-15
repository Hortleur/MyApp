<?php

namespace App\Models;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

class Poem extends Model
{
    use HasFactory;
    /**
     *
     * @var string
     */
    protected $table = 'poem';

    public static function getAll(): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return DB::table('poem')->paginate();
    }

    public static function findOrFail($id): \Illuminate\Database\Query\Builder
    {
        return DB::table('poem')->where('id', '=', "$id");
    }

    public function genre()
    {
        return $this->hasMany(Genre::class,  'genre_id');
    }

    public static function getAllByGenre($genreId): Paginator
    {
        return DB::table('poem')->where("genre_id", "=", "$genreId")->paginate();
    }

    public function topic()
    {
        return $this->hasMany(Topics::class, 'topic_id');
    }
}
