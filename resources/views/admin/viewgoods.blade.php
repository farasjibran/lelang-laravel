@extends('layouts.main')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">View Goods</h1>
</div>

<div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
        <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">Action</div>
                <a class="dropdown-item addbtn">
                    <i class="fas fa-plus fa-sm fa-fw" style="color: green;">
                    </i> Add Data
                </a>
                <a class="dropdown-item" href="{{ route('printpdf')}}">
                    <i class="fas fa-file-pdf fa-sm fa-fw" style="color: blue;">
                    </i> Generate Pdf
                </a>
                <a class="dropdown-item" href="">
                    <i class="fas fa-file-excel fa-sm fa-fw" style="color: green;">
                    </i> Generate Excel
                </a>
            </div>
        </div>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" cellspacing="0" width="100%" id="dataLelang">
                <thead class="text-white" style="background-color: #499bea;">
                    <tr>
                        <th>Id Barang</th>
                        <th>Nama Barang</th>
                        <th>Tanggal Upload</th>
                        <th>Harga Awal</th>
                        <th>Deskripsi Barang</th>
                        <th>Kategori Barang</th>
                        <th>Foto Barang</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id Barang</th>
                        <th>Nama Barang</th>
                        <th>Tanggal Upload</th>
                        <th>Harga Awal</th>
                        <th>Deskripsi Barang</th>
                        <th>Kategori Barang</th>
                        <th>Foto Barang</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formtambah" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name Goods</label>
                        <input type="text" name="namabarang" id="nmabarang" class="form-control" placeholder="Enter Name Goods">
                    </div>
                    <div class="form-group">
                        <label>Price Goods</label>
                        <input type="text" name="hargabarang" id="hrgbarang" class="form-control" placeholder="Enter Price Goods">
                    </div>
                    <div class="form-group">
                        <label>Description Item</label>
                        <textarea type="text" name="deskripsiitem" id="deskitem" class="form-control" placeholder="Enter Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Category Item</label>
                        <select class="custom-select drpdw" name="kategoriitem" id="ktgritem">
                            <option selected>Select Category</option>
                            <option value="Basketball Shoe">Basketball Shoe</option>
                            <option value="T-Shirt">T-Shirt</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Hoodie">Hoodie</option>
                            <option value="Shorts">Shorts</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Picture</label>
                        <input type="file" name="user_image" id="user_image" class="form-control">
                    </div>
                    <input value="open" type="hidden" id="statusbarang" name="status" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <input type="hidden" name="action" class="btn btn-success" value="Add" />
                    <input type="submit" value="Add" name="action" class="btn btn-success" />
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formedit" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Thumbnail</label>
                        <span id="foto_barang"></span>
                    </div>
                    <div class="form-group">
                        <label>Name Goods</label>
                        <input type="text" name="namabarang" id="namabarang" class="form-control" placeholder="Enter Name Goods">
                    </div>
                    <div class="form-group">
                        <label>Price Goods</label>
                        <input type="text" name="hargabarang" id="hargabarang" class="form-control" placeholder="Enter Price Goods">
                    </div>
                    <div class="form-group">
                        <label>Description Item</label>
                        <textarea type="text" name="deskripsiitem" id="deskripsiitem" class="form-control" placeholder="Enter Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Category Item</label>
                        <select class="custom-select drpdw" name="kategoriitem" id="kategoriitem">
                            <option selected>Select Category</option>
                            <option value="Basketball Shoe">Basketball Shoe</option>
                            <option value="T-Shirt">T-Shirt</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Hoodie">Hoodie</option>
                            <option value="Shorts">Shorts</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Picture</label>
                        <input type="file" name="user_image" id="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="custom-select drpdw" name="status" id="status">
                            <option selected>Status</option>
                            <option value="open">Open</option>
                            <option value="close">Close</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <input type="hidden" name="id_barang" id="id_barang" class="btn btn-success" value="" />
                    <input type="hidden" name="action" class="btn btn-success" value="Edit" />
                    <input type="submit" value="Edit" name="action" class="btn btn-success" />
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
