@extends('admin.admin_master')
@section('admin')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Kelola Bagian</h4>
    <a href="{{route('Bagian_add_view')}}" style="  margin-bottom: 20px; " class="btn btn-success">Tambahkan
        Data</a>

    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr class="text-nowrap">
                        <th>id</th>
                        <th>Nama Lingkup</th>
                        <th>Nama Bagian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    /*echo "<pre>";
                    print_r($allDataBagian);
                    echo "</pre>";*/
                    ?>
                    @foreach($allDataBagian as $bagian)
                    <tr>
                        <th scope="row">{{$bagian->id}}</th>
                        <td>{{$bagian->ruanglingkup->nama_lingkup}}</td>
                        <td>{{$bagian->nama}}</td>
                        
                        <td>
                            <a href="{{route('Bagian.edit', $bagian->id)}}" class="btn btn-info">Ubah</a>
                            <a href="{{route('Bagian.delete', $bagian->id)}}" id="delete"
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