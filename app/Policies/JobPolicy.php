<?php

namespace App\Policies;

use App\Models\User;
use App\Models\job;
use Illuminate\Auth\Access\Response;

class JobPolicy
{
public function editJob(User $user, Job $job): bool
    {
        return $user->id === $job->employer_id;
    }
}
