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
            $btn = "<button type='button' class='btn btn-primary btn-icon-split editbtn' name='editbtn' data-toggle='modal' id=" . $value['id'] . " 	style='padding-right: 6%;'>
						<span class='icon text-white'>
							<i class='fas fa-edit'></i>
						</span>
						<span class='text'>Edit Data</span>
                        </button>
                        <button type='button' class='btn btn-danger btn-icon-split deletebtn mt-2' name='deletebtn' data-toggle='modal' id=" . $value['id'] . ">
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

    // function get id goods
    public function getIdBarang()
    {
        $output = array();
        $data = Barang::find($_POST["id_barang"]);
        $output['nama_barang'] = $data->nama_barang;
        $output['harga_awal'] = $data->harga_awal;
        $output['deskripsi_barang'] = $data->deskripsi_barang;
        $output['kategori_barang'] = $data->kategori_barang;
        if ($data->foto_barang != '') {
            $output['foto_barang'] = '<img style="width: 100%;" src="gambarbarang/' . $data->foto_barang . '" /><input type="hidden" name="hidden_barang_image" value="' . $data->foto_barang . '"/>';
        } else {
            $output['foto_barang'] = '<input type="hidden" name="hidden_barang_image" value=""/>';
        }
        $output['status'] = $data->status;

        echo json_encode($output);
    }

    // function edit goods
    public function editgoods(Request $request)
    {
        if ($_POST["action"] == "Edit") {
            $imageName = $request->user_image->getClientOriginalName();
            $request->user_image->move(public_path('gambarbarang'), $imageName);
            $idbarang = $request->id_barang;
            $barang = Barang::find($idbarang);
            $barang->nama_barang = $request->namabarang;
            $barang->harga_awal = $request->hargabarang;
            $barang->deskripsi_barang = $request->deskripsiitem;
            $barang->kategori_barang = $request->kategoriitem;
            $barang->foto_barang = $imageName;
            $barang->status = $request->status;
            $barang->save();
            echo 'Data Updated';
        }
    }

    // function delete goods
    public function deletegoods()
    {
        $barang = Barang::find($_POST["id_barang"]);
        $barang->delete();
    }
}
