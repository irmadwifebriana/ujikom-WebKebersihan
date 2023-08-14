@extends('admin.admin_master')
@section('admin')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Kelola Tugas</h4>
    <a href="{{route('Penugasan_add_view')}}" style="  margin-bottom: 20px; " class="btn btn-success">Tambahkan
        Data</a>

    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr class="text-nowrap">
                        <th>id</th>
                        <th>Nama Petugas</th>
                        <th>Nama Bagian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allDataPenugasan as $penugasan)
                    <tr>
                        <th scope="row">{{$penugasan->id}}</th>
                        <td>{{$penugasan->nama_petugas}}</td>
                        <td>{{$penugasan->bagian->nama}}</td>
                        </td>

                        <td>
                            <a href="{{route('Penugasan.edit', $penugasan->id)}}" class="btn btn-info">Ubah</a>
                            <a href="{{route('Penugasan.delete', $penugasan->id)}}" id="delete"
                                class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Responsive Table -->
</div>

@endsection
