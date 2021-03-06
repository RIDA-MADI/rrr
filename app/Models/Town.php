<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    use HasFactory;
    protected $table = "towns";
    protected $fillable =['name','id'];
    protected $hidden = ['city_id'];
}
