<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sisterconcurn extends Model
{
    use HasFactory;
    protected $guarded = [];

   
    public function slider()
    {
        return $this->hasMany(Sisterconcurnslider::class, 'name', 'id');
    }
}
