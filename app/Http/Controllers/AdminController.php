<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function viewgoods()
    {
        return view('admin.viewgoods');
    }

    public function dataBarang()
    {
        $databarang = Barang::get();
        foreach ($databarang as $value) {
            $tbody = array();
            $tbody[] = $value['id'];
            $tbody[] = $value['nama_barang'];
            $tbody[] = $value['tanggal_upload'];
            $harga = "Rp." . $value['harga_awal'];
            $tbody[] = $harga;
            $tbody[] = $value['deskripsi_barang'];
            $tbody[] = $value['kategori_barang'];
            $img = "<img style='width: 100%;' src='{{ asset('gambarbarang/')}}" . $value['foto_barang'] . "' ?>";
            $tbody[] = $img;
            $tbody[] = $value['status'];
            $btn = "<button type='button' class='btn btn-primary btn-icon-split editbtn' name='editbtn' data-toggle='modal' id=" . $value['id_barang'] . " 	style='padding-right: 6%;'>
						<span class='icon text-white'>
							<i class='fas fa-edit'></i>
						</span>
						<span class='text'>Edit Data</span>
                        </button>
                        <button type='button' class='btn btn-danger btn-icon-split deletebtn mt-2' name='deletebtn' data-toggle='modal' id=" . $value['id_barang'] . ">
						<span class='icon text-white'>
							<i class='fas fa-trash'></i>
						</span>
						<span class='text'>Delete Data</span>
						</button>";
            $tbody[] = $btn;
            $data[] = $tbody;
        }
        if ($databarang) {
            echo json_encode(array('data' => $data));
        } else {
            echo json_encode(array('data' => 0));
        }
    }
}
