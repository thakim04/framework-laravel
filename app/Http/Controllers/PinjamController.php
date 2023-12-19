<?php

namespace App\Http\Controllers;

use App\Models\Anggota_m;
use App\Models\Buku_m;
use App\Models\Pinjam_m;
use Illuminate\Http\Request;


class PinjamController extends Controller
{
  var $data;

  public function __construct(Pinjam_m $pinjam)
  {
  }
  public function index(Pinjam_m $pinjam)
  {
    $data = [
      'query' => $pinjam->get_records(),
      'is_update' => 0,
      'optpinjam' => Anggota_m::pluck('Nama', 'ID_Anggota'),
      'optpinjam1' => Buku_m::pluck('Judul', 'ID_Buku')
    ];
    return view('pinjam.add', $data);
  }
  public function save(Pinjam_m $pinjam, Request $request)
  {
    $validated = $request->validate([
      'ID_Anggota' => 'required',
      'ID_Buku' => 'required',
      'Tgl_Pinjam' => 'required',
      'Tgl_Kembali' => 'required'
    ]);

    $data['ID_Anggota'] = $request->input('ID_Anggota');
    $data['ID_Buku'] = $request->input('ID_Buku');
    $data['Tgl_Pinjam'] = $request->input('Tgl_Pinjam');
    $data['Tgl_Kembali'] = $request->input('Tgl_Kembali');
    //$is_update = $request->input('is_update');
    $pinjam->insert_record($data);
    return redirect('');
    //if ($is_update == 0) {
    /* if ($pinjam->insert_record($data))
        ;
      return redirect('pinjam');
    } else {
      $id = $request->input('id');
      if ($pinjam->update_by_id($data, $id))
        ;
      return redirect('pinjam');
    }*/
  }

}
