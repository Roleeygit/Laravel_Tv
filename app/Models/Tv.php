<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;


class Tv extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "size"
     ];

    public $timestamps = false;

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
