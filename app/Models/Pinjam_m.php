<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam_m extends Model
{
  use HasFactory;

  protected $table = 'mst_Pinjam';
  protected $primaryKey = 'ID_Pinjam';
  public $timestamps = false;

  function get_records($criteria = '')
  {
    $result = self::select('mst_pinjam.*', 'mst_anggota.Nama as Nama_anggota', 'mst_buku.Judul as Nama.Judul')
      ->join('mst_anggota', 'mst_pinjam.ID_Anggota', '=', 'mst_anggota.ID_Anggota')
      ->join('mst_buku', 'mst_pinjam.ID_buku', '=', 'mst_buku.ID_Buku')
      ->when($criteria, function ($query, $criteria) {
        return $query->where('mst_Pinjam.ID_Pinjam', $criteria);
      })
      ->get();
    return $result;
  }
  function insert_record($data)
  {
    $result = self::insert($data);
    return $result;
  }
  function update_by_id($data, $id)
  {
    $result = self::where('ID_Pinjam', $id)
      ->update($data);
    return $result;
  }
  function delete_by_id($id)
  {
    $result = self::where('ID_Pinjam', $id)
      ->delete();
    return $result;
  }


}
