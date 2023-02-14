<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Topics extends Model
{
    use HasFactory;

    protected $table = 'topic';

    public static function getAll()
    {
        return DB::table('topic')->paginate();
    }

    public static function getOne($id)
    {
        return DB::table('topic')->where('id', '=', '$id');
    }

    public function poem()
    {
        return $this->belongsTo(Poem::class);
    }
}
