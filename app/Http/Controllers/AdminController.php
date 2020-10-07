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

    // view dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // view goods
    public function viewgoods()
    {
        return view('admin.viewgoods');
    }

    // show databarang in datatable
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
            $img = "<img style='width: 80%;' src='gambarbarang/" . $value['foto_barang'] . "' >";
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

    // function add goods
    public function addData(Request $request)
    {
        if ($_POST["action"] == "Add") {
            $imageName = $request->user_image->getClientOriginalName();
            $request->user_image->move(public_path('gambarbarang'), $imageName);

            $barang = new Barang();
            $barang->nama_barang = $request->namabarang;
            $barang->harga_awal = $request->hargabarang;
            $barang->deskripsi_barang = $request->deskripsiitem;
            $barang->kategori_barang = $request->kategoriitem;
            $barang->foto_barang = $imageName;
            $barang->status = $request->status;
            $barang->save();
            echo 'Data Inserted';
        }
    }

    // function upload image
    // public function upload_image()
    // {
    //     if (isset($_FILES['user_image'])) {
    //         $extension = explode('.', $_FILES['user_image']['name']);
    //         $new_name = rand() . '.' . $extension[1];
    //         $destination = './public/gambarbarang/' . $new_name;
    //         move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);
    //         return $new_name;
    //     }
    // }
}
