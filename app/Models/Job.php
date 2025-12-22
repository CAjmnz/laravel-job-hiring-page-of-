<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    // ✅ Make sure this points to the correct table
    protected $table = 'job_listings';

    protected $fillable = [
        'title',
        'salary',
        'employer_id',
    ];

    // ✅ Define the missing employer relationship
public function employer()
{
    return $this->belongsTo(Employer::class);
}

}
