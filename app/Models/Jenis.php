<?php

namespace App\Models;

use App\Models\Field_place;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jenis extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis',
        'nilai',
        'field_place_id'
    ];

    public function Field_place()
    {
        return $this->belongsTo(Field_place::class, 'field_place_id');
    }
}
