<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SoftwareResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'designation' => $this->designation,
            'employee_id' => $this->employee_id,
            'email'       => $this->email,
            'phone_number' => $this->phone_number,
            'profile_photo' => asset('images/softwareteam/'.$this->profile_photo)
        ];
    }
}
