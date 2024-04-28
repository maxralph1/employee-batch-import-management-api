<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'employee_id' => $this->employee_id,
            'username' => $this->username,
            'name_prefix' => $this->name_prefix,
            'first_name' => $this->first_name,
            'middle_name_initial' => $this->middle_name_initial,
            'last_name' => $this->last_name,
            'gender' => $this->gender,
            'email' => $this->email,
            'date_of_birth' => $this->date_of_birth,
            'time_of_birth' => $this->time_of_birth,
            'age_in_years' => $this->age_in_years,
            'date_of_joining' => $this->date_of_joining,
            'age_in_company' => $this->age_in_company,
            'phone_number' => $this->phone_number,
            'place_name' => $this->place_name,
            'county' => $this->county,
            'city' => $this->city,
            'zip' => $this->zip,
            'region' => $this->region,
            // 'user' => [
            //     'id' => $this->user->id,
            //     'username' => $this->user->username,
            //     'first_name' => $this->user->first_name,
            //     'last_name' => $this->user->last_name,
            // ],
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
