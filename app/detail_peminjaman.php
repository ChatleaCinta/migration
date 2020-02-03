<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_peminjaman extends Model
{
  protected $table="detail_peminjaman";
  protected $primaryKey="id";
  protected $fillable = [
    'id_pinjam',
    'id_buku',
    'qty'
  ];

  public function buku() {
    return $this->belongsTo('App/Buku', 'id_buku');
  }
  public function peminjaman() {
    return $this->belongsTo('App/Peminjaman', 'id_pinjam');
  }
    public function Petugas_model(){
        return $this->belongsTo('App\Petugas_model', 'id_petugas');
    }
}