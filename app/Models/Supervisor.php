<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'staff_id',
        'name',
        'office_phone_number',
        'email',
    ];
}
