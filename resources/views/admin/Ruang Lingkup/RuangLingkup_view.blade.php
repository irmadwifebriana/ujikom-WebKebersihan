@extends('admin.admin_master')
@section('admin')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Kelola Ruang Lingkup</h4>
    <a href="{{route('RuangLingkup_add_view')}}" style="  margin-bottom: 20px; " class="btn btn-success">Tambahkan
        Data</a>

    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr class="text-nowrap">
                        <th>id</th>
                        <th>Nama Lingkup</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allDataRuang as $ruanglingkup)
                    <tr>
                        <th scope="row">{{$ruanglingkup->id}}</th>
                        <td>{{$ruanglingkup->nama_lingkup}}</td>
                        <td>
                            <a href="{{route('RuangLingkup.edit', $ruanglingkup->id)}}"
                                class="btn btn-info">Ubah</a>
                            <a href="{{route('RuangLingkup.delete', $ruanglingkup->id)}}" id="delete"
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