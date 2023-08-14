@extends('admin.admin_master')
@section('admin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Ubah Data</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="{{route('Bagian.update', $editData->id)}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                    </div>
                                    <!--end basic select-->
                                </div>
                                <!--end col md6-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <h5>Nama Lingkup <span class="text-danger">*</span></h5>
                                        <select class="form-control select2" style="width: 100;" name="id_ruanglingkup" id="id_ruanglingkup">
                                            <!-- <option disable value>Pilih Alat<option> -->
                                                <option value="{{$editData->id_ruanglingkup}}">{{$editData->ruanglingkup->nama_lingkup}}</option>
                                                @foreach ($ruanglingkup as $bagian)
                                                <option value="{{$bagian->id}}">{{$bagian->nama_lingkup}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Nama Bagian <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="nama" value="{{$editData->nama}}"
                                                class="form-control" required
                                                data-validation-required-message="This field is required">
                                        </div>
                                    </div>
                                </div>
                                <!--end col md6-->
                        </div>
                        <!--END row select-->

                        <!-- <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <h5>Tempat Prodi <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="nama_ruang" value="{{$editData->nama_ruang}}"
                                            class="form-control" required
                                            data-validation-required-message="This field is required">
                                    </div>
                                </div>

                            </div>

                        </div> -->
                        <!--end row -->

                        <div class="text-xs-right pt-4">
                            <button type="submit" class="btn btn-rounded btn-info">Submit</button>
                        </div>
                        </form>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
    </div>
    <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
</div>
<!-- /.content-wrapper -->

@endsection
