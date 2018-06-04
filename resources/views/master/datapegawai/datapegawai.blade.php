@extends('main')

@section('content')

@include('master.datapegawai.tambah_datapegawai')

<article class="content">

	<div class="title-block text-primary">
	    <h1 class="title"> Data Pegawai </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> / <span>Master Data</span> / <span class="text-primary" style="font-weight: bold;">Data Pegawai</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">

			<div class="col-12">
				
				<div class="card">
                    <div class="card-block">
                        <div class="card-title-block">
                            <h3 class="title"> Data Pegawai </h3>
                        </div>
                        <section>
                        	
                    		<div class="col-12" align="right" style="margin-bottom: 15px;">
                    			<button class="btn btn-primary" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i>&nbsp;Tambah Data</button>
                    		</div>
                        	
                        	<div class="table-responsive">
	                            <table class="table data-table table-hover" cellspacing="0">
	                                <thead class="bg-primary">
	                                    <tr>
							                <th>No</th>
							                <th>ID Pegawai</th>
							                <th>NIK</th>
							                <th>Nama Pegawai</th>
							                <th>Alamat</th>
							                <th>Status Karyawan</th>
							                <th>Aksi</th>
							            </tr>
	                                </thead>
	                                <tbody>
	                                	<tr>
	                                		<td>1</td>
	                                		<td>PG/001</td>
	                                		<td>1111</td>
	                                		<td>Alpha</td>
	                                		<td>Jl. Alpha</td>
	                                		<td>Sudah Menikah</td>
	                                		<td>
	                                			<div class="btn-group">
	                                				<button class="btn btn-primary btn-sm" title="Edit" type="button"><i class="fa fa-pencil"></i></button>
	                                				<button class="btn btn-danger btn-sm" title="Delete" type="button"><i class="fa fa-trash"></i></button>
	                                			</div>
	                                		</td>
	                                	</tr>
	                                	<tr>
	                                		<td>2</td>
	                                		<td>PG/002</td>
	                                		<td>1112</td>
	                                		<td>Bravo</td>
	                                		<td>Jl. Bravo</td>
	                                		<td>Sudah Menikah</td>
	                                		<td>
	                                			<div class="btn-group">
	                                				<button class="btn btn-primary btn-sm" title="Edit" type="button"><i class="fa fa-pencil"></i></button>
	                                				<button class="btn btn-danger btn-sm" title="Delete" type="button"><i class="fa fa-trash"></i></button>
	                                			</div>
	                                		</td>
	                                	</tr>
	                                	<tr>
	                                		<td>3</td>
	                                		<td>PG/003</td>
	                                		<td>1113</td>
	                                		<td>Charlie</td>
	                                		<td>Jl. Charlie</td>
	                                		<td>Lajang</td>
	                                		<td>
	                                			<div class="btn-group">
	                                				<button class="btn btn-primary btn-sm" title="Edit" type="button"><i class="fa fa-pencil"></i></button>
	                                				<button class="btn btn-danger btn-sm" title="Delete" type="button"><i class="fa fa-trash"></i></button>
	                                			</div>
	                                		</td>
	                                	</tr>
	                                </tbody>
	                            </table>
	                        </div>
                        </section>
                    </div>
                </div>

			</div>

		</div>

	</section>

</article>

@endsection