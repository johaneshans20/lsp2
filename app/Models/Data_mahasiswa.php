<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'data_mahasiswa';
    protected $guarded = ['id'];
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo('\App\models\User', 'id_user');
    }

    public function kursus()
    {
        return $this->belongsTo('\App\models\Kursus', 'id_kursus');
    }
}
