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
			  <h4 class="box-title">Tambah Data</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="post" action="{{route('Penugasan.update', $editData->id)}}">
                       @csrf
						<div class="row">
							<div class="col-md-6">
							</div>
                            <!--end basic select-->
							</div>
                            <!--end col md6-->
							<div class="col-md-6">
                                    <div class="form-group">
                                    <h5>Bagian<span class="text-danger">*</span></h5>
                                        <select class="form-control select2" style="width: 100;" name="id_bagian" id="id_bagian">
                                            <option value="{{$editData->id_bagian}}">{{$editData->bagian->nama}}</option>
                                            @foreach ($bagian as $penugasan)
                                            <option value="{{$penugasan->id}}">{{$penugasan->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                        </div>
						<div class="col-md-6">
                            <div class="form-group">
                                    <h5>Nama Petugas <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="nama_petugas" value="{{$editData->nama_petugas}}" class="form-control" required data-validation-required-message="This field is required"> </div>
                            </div>
                        </div>
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
