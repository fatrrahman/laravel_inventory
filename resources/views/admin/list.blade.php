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
								<h4 class="card-title">Data User</h4>
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
											<th>Nama User</th>
											<th>Email</th>
											<th>Role</th>
										</tr>
									</thead>
									<tbody>
                                        @php $no=1 @endphp
                                        @foreach ($data_user as $row)
										<tr>
										
											<td>{{ $row->name }}</td>
											<td>{{ $row->email}}</td>
											<td>{{ $row->role }}</td>
											<td>
												<a href="#modalEdit{{ $row->id }}" data-toggle="modal"  class="btn btn-xs btn-primary"> <i class="fa fa-edit"> Edit</i></a>
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
						Tambah User</span>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="/user/store" enctype="multipart/form-data">
            @csrf
				<div class="modal-body">

					<div class="form-group">
						<label>Nama User</label>
						<input type="text" class="form-control" name="name" placeholder="Nama User ..." required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" class="form-control" name="email" placeholder="Email ..." required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="text" class="form-control" name="password" placeholder="Password ..." required>
					</div>
					<div class="form-group">
						<label>Role</label>
						<select class="form-control" name="role" required>
                            <option value="" hidden>Pilih Role</option>
                            <option value="admin" >Admin</option>
                            <option value="karyawan" >Karyawan</option>

                        </select>
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


@foreach ($data_user as $d)
<div class="modal fade" id="modalEdit{{ $d->id }}" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
						Edit Data User</span>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="/user/update/{{ $d->id }}" enctype="multipart/form-data">
            @csrf
				<div class="modal-body">

					<div class="form-group">
						<label>Nama User</label>
						<input type="text" class="form-control" value="{{ $d->name }}" name="name" placeholder="Nama User ..." required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" class="form-control" value="{{ $d->email }}" name="email" placeholder="Email ..." required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="text" class="form-control" name="password" placeholder="Password ..." required>
					</div>
					<div class="form-group">
						<label>Role</label>
						<select class="form-control" name="role" required>
                            <option <?php if($d['role']=="admin") echo "selected"; ?> value="admin" >Admin</option>
                            <option <?php if($d['role']=="karyawan") echo "selected"; ?> value="karyawan" >Karyawan</option>

                        </select>
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



@foreach ($data_user as $b)
<div class="modal fade" id="modalHapus{{ $b->id }}" tabindex="-1" role="dialog" aria-hidden="true">
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
			<form method="GET" action="/user/destroy/{{ $b->id }}" enctype="multipart/form-data">
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