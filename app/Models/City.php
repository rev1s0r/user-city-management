<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['city_name'];

//    public function user()
//    {
//        return $this->hasOne(User::class);
//    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

}
