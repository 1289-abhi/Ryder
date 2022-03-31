<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class drivers extends Model
{
    protected $fillable=['name','email','phone','address','city','state','vehicleType','noOfVehicles'];
    use HasFactory;
}
