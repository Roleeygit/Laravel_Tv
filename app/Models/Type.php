<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tv;

class Type extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        "name"
    ];
    public $timestamps = false;

    public function tv() 
    {
        return $this->hasMany(Tv::class);
    }
}
