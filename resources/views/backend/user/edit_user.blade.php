@extends('admin.admin_master')
@section('admin')

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
                    <h4 class="box-title">Ubah Pengguna</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="{{route('users.update', $editData->id)}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Level Pengguna <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="selectUser" id="select" required class="form-control">
                                                    <option value="">Pilih Level Pengguna</option>
                                                    <option value="admin"
                                                        {{($editData->usertype=="admin"? "Selected":"")}}>Admin</option>
                                                    <option value="kordinator"
                                                        {{($editData->usertype=="kordinator"? "Selected":"")}}>Kordinator</option>
                                                    <option value="petugas"
                                                        {{($editData->usertype=="petugas"? "Selected":"")}}>Petugas</option>

                                                </select>
                                            </div>
                                        </div>
                                        <!--end basic select-->
                                    </div>
                                    <!--end col md6-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Nama <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="textName" value="{{$editData->name}}"
                                                    class="form-control" required
                                                    data-validation-required-message="This field is required">
                                            </div>
                                            <div class="form-control-feedback"><small>Add <code>required</code>
                                                    attribute to field for required validation.</small></div>
                                        </div>
                                    </div>
                                    <!--end col md6-->
                                </div>
                                <!--END row select-->

                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <h5>Email <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="email" name="email" value="{{$editData->email}}"
                                                    class="form-control" required
                                                    data-validation-required-message="This field is required">
                                            </div>
                                        </div>

                                    </div>

                                    <!-- <div class="col-md-6">
                        <div class="form-group">
								<h5>Password<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="password" name="password" class="form-control" required data-validation-required-message="This field is required"> </div>
							    </div>
                        </div> -->

                                </div>
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

@endsection