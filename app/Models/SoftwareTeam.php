<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareTeam extends Model
{
    use HasFactory;
    protected $fillable=['name','designation','employee_id','email','profile_photo','phone_number'];
}
