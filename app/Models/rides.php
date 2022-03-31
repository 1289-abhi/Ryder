<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rides extends Model
{
    protected $fillable=['name','email','phone','passengers','pickaddress','dropaddress','date','time','car_type'];
    use HasFactory;

}
