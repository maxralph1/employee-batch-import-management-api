<?php

namespace App\Observers;

use App\Models\Employee;

class EmployeeObserver
{
    /**
     * Handle the Employee "creating" event.
     */
    public function creating(Employee $employee): void
    {
        if (auth()->check()) {
            $employee->user_id = auth()->user()->id;
        }
    }
}
