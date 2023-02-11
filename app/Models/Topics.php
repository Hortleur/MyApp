<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topics extends Model
{
    use HasFactory;

    protected $table = 'topic';

    public function poem()
    {
        return $this->belongsTo(Poem::class);
    }
}
