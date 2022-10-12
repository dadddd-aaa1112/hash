<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Algorithm extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function scopeAlgorithm($query, $id)
    {
        return $query->where('id', $id);
    }
}
