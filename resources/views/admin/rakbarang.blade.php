@extends('layout.layout')

@section('content')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
           
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Barang yang harus disusun di Rak Barang</h4>
                                <button class="btn btn-dark btn-round ml-auto" data-toggle="modal" data-target="#modalCreate">
                                    <i class="fa fa-plus"></i>
                                    Tambah Data
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsiPOve">
                                <table id="add-row" class="display table ">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>ID Barang</th>
                                            <th>Kategori</th>
                                            <th>Nomor Rak</th>
                                            <th>Harga Barang</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no=1 @endphp
                                        @foreach ($data_rakbarang as $row)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $row->nama_barang }}</td>
                                            <td>{{ $row->id_barang }}</td>
                                            <td>{{ $row->nama_kategori}}</td>
                                            <td>{{ $row->nomor_rak}}</td>
                                            <td>Rp. {{ number_format($row->harga_barang) }}</td>
                                            <td>
                                                <a href="#modalEdit{{ $row->id }}" data-toggle="modal" class="btn btn-xs btn-primary"> <i class="fa fa-edit"> Edit</i></a>
                                                <a href="#modalHapus{{ $row->id }}" data-toggle="modal" class="btn btn-xs btn-danger"> <i class="fa fa-trash"> Hapus</i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                        Tambah Barang</span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="/rakbarang/store" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">


                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang ..." required>
                    </div>

                    <div class="form-group">
                        <label>ID Barang</label>
                        <input type="text" class="form-control" name="id_barang" placeholder="Nama Barang ..." required>
                    </div>

                    <div class="form-group">
                        <label>Kategori Barang</label>
                        <select class="form-control" name="id_kategori" required>
                            <option value="" hidden>Pilih Kategori</option>
                            @foreach ($data_kategori as $z)
                            <option value="{{ $z->id }}">{{ $z->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Nomor Rak</label>
                        <input type="number" class="form-control" name="nomor_rak" placeholder="nomor rak ..." required>
                    </div>

                    <div class="form-group">
                        <div class="input-group nb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Rp</span>
                            </div>
                            <input type="number" class="form-control" placeholder="Harga Barang ..." name="harga_barang" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-undo"></i> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>


@foreach ($data_rakbarang as $e)
<div class="modal fade" id="modalEdit{{ $e->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                        Edit Barang</span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="/rakbarang/update/{{ $e->id }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" value="{{ $e->nama_barang }}" name="nama_barang" placeholder="Nama Barang ..." required>
                    </div>

                    <div class="form-group">
                        <label>ID Barang</label>
                        <input type="text" class="form-control" value="{{ $e->id_barang }}" name="id_barang" placeholder="Nama Barang ..." required>
                    </div>

                    <div class="form-group">
                        <label>Kategori Barang</label>
                        <select class="form-control" name="id_kategori" required>
                            <option value="{{ $e->id_kategori }}"" hidden>Pilih Kategori</option>
                            @foreach ($data_kategori as $z)
                            <option value="{{ $e->id }}">{{ $e->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Nomor Rak</label>
                        <input type="number" class="form-control" value="{{ $e->nomor_rak }}" name="nomor_rak" placeholder="nomor rak ..." required>
                    </div>

                    <div class="form-group">
                        <div class="input-group nb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Rp</span>
                            </div>
                            <input type="number" class="form-control" value="{{ $e->harga_barang }}" placeholder="Harga ..." name="harga" required>
                        </div>
                    </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-undo"></i> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach



@foreach ($data_rakbarang as $f)
<div class="modal fade" id="modalHapus{{ $f->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                        Hapus</span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="GET" action="/rakbarang/destroy/{{ $f->id }}" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
                <div class="modal-body">

                    <div class="form-group">
                        <h4>Apakah Data ini ingin dihapus?</h4>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-undo"></i> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

@endsection()