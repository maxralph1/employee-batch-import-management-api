<?php

namespace App\Models;

// use App\Observers\EmployeeObserver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Attributes\ObservedBy;

// #[ObservedBy([EmployeeObserver::class])]
class Employee extends Model
{
    use HasFactory, HasUlids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        // 'user_id',
        'employee_id',
        'username',
        'name_prefix',
        'first_name',
        'middle_name_initial',
        'last_name',
        'gender',
        'email',
        'date_of_birth',
        'time_of_birth',
        'age_in_years',
        'date_of_joining',
        'age_in_company',
        'phone_number',
        'place_name',
        'county',
        'city',
        'zip',
        'region',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
