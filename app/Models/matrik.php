<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matrik extends Model
{
    use HasFactory;

    protected $fillable = [
        'kriteria1', 'kriteria2', 'nilai', 'kriteria_id'
    ];

    protected $table = 'matriks';

    public function kriteria1()
    {
        return $this->belongsTo(Kriteria::class, 'kriteria1');
    }

    public function kriteria2()
    {
        return $this->belongsTo(Kriteria::class, 'kriteria2');
    }
}
