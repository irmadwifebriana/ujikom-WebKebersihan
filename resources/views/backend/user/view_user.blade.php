@extends('admin.admin_master')
@section('admin')

      <!-- Content Wrapper. Contains page content -->
<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Kelola Pengguna</h4>
	<a href="{{route('user.add')}}" style="margin-bottom: 20px;" type="button" class="btn btn-success">Tambah 
        Pengguna</a>
  <div class="card">
    <div class="table-responsive text-nowrap">
      <table class="table">
          <thead>
            <tr class="text-nowrap">
              <th>Id</th>
              <th>Level</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
					@foreach($allDataUser as $key => $user)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$user->usertype}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>
              <!-- <a href="{{route('user.add')}}" style="float:left;" type="button" class="btn btn-rounded btn-success mb-5">Tambah</a> -->
								  <a href="{{route('users.edit', $user->id)}}" class="btn btn-info">Ubah</a>
								  <a href="{{route('users.delete', $user->id)}}" id="delete" class="btn btn-danger">Hapus</a>
							</td>
            </tr>
					@endforeach
          </tbody>
      </table>
    </div>
  </div>
</div>

@endsection