<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name']; // 👈 this is the important line

    public function jobs()
{
    return $this->belongsToMany(
        Job::class,   // Related model
        'job_tag',    // Pivot table
        'tag_id',     // Foreign key on pivot table for THIS model
        'job_id'      // Foreign key on pivot table for RELATED model
    );
}


}

