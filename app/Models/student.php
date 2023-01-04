<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Return_;

class student extends Model
{
    use HasFactory;
    protected $table = "student";
    public $timestamps = false;

    // public function getLastNameAttribute($value)
    // {
    //     $this->attributes['last_name'] = ucwords($value);
    // }

    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = strtolower($value);
    }
    public function getFirstNameAttribute($value)
    {
        return strtoupper($value);
    }
}
