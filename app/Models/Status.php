<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function scopeStatus($query, $value)
    {
        return $query->where('status', $value);
    }
}
