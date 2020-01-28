<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = "peminjaman";
    protected $primaryKey = "id";
    protected $fillable = [
        'tgl',
        'id_anggota',
        'id_petugas',
        'tgl_deadline',
    ];
    public function Anggota_model(){
        return $this->belongsTo('App\Anggota_model', 'id_anggota');
    }
    public function Petugas_model(){
        return $this->belongsTo('App\Petugas_model', 'id_petugas');
    }

    public $timestamps = false;
}