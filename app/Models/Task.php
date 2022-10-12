<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function statuses() {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function algorithms() {
        return $this->belongsTo(Algorithm::class, 'algorithm_id', 'id');
    }

}
