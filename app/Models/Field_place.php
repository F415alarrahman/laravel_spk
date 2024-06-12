<?php

namespace App\Models;

use App\Models\Jenis;
use App\Models\Fasilitas;
use App\Models\Jenis_lapangan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Field_place extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'telephone',
        'img_url',
        'status',
        'created_at',
        'updated_at'
    ];


    public function jenis_lapangans()
    {
        return $this->hasMany(Jenis::class, 'field_place_id');
    }

    public function fasilitas_lapangans()
    {
        return $this->hasMany(Fasilitas::class, 'field_place_id');
    }
}
