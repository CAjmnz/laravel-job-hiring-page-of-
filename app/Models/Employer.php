<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'website', 'user_id']; // 👈 include user_id if it's the FK

    // Each employer belongs to a single user (account owner)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); 
    }

    // Optional: if an employer can have many jobs
public function jobs()
{
    return $this->hasMany(Job::class);
}

}
