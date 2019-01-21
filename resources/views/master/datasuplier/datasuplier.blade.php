@extends('main')

@section('content')

@include('master.datasuplier.tambah_datasuplier')

<article class="content">

	<div class="title-block text-primary">
	    <h1 class="title"> Data Suplier </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> / <span>Master Data</span> / <span class="text-primary" style="font-weight: bold;">Data Suplier</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">

			<div class="col-12">
				
				<div class="card">
                    <div class="card-block">
                        <div class="card-title-block">
                            <h3 class="title"> Data Suplier </h3>
                        </div>
                        <section>
                        	
                    		<div class="col-12" align="right" style="margin-bottom: 15px;">
                    			<button class="btn btn-primary btn-buka-modal"><i class="fa fa-plus"></i>&nbsp;Tambah Data</button>
                    		</div>
                        	
                        	<div class="table-responsive">
	                            <table class="table table-hover table-bordered table-striped" id="tabel_suplier" cellspacing="0">
	                                <thead class="bg-primary">
	                                    <tr>
							                <th>No</th>
							                <th>Perusahaan</th>
							                <th>Nama Suplier</th>
							                <th>Alamat</th>
							                <th>No Hp</th>
							                <th>Fax</th>
							                <th>Keterangan</th>
							                <th>Aksi</th>
							            </tr>
	                                </thead>
	                                <tbody>
	                                	
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

@section('extra_script')
<script type="text/javascript">
	
	$(document).ready(function(){

		// var table = $('#tabel_suplier').dataTable();

		var table = $('#tabel_suplier').DataTable({
			"destroy": true,
			"processing" : true,
			"serverside" : true,
			"ajax" : {
				url: '{{ route("datatable_datasuplier") }}',
				type: 'GET'
			},
			"columns" : [
				{"data" : "DT_RowIndex", orderable: true, searchable: false, "width" : "5%"}, //memanggil column row
				{"data" : "nama_perusahaan"},
				{"data" : "nama_sup"},
				{"data" : "alamat"},
				{"data" : "no_hp"},
				{"data" : "fax"},
				{"data" : "keterangan"},
				{"data" : "aksi", orderable: false, searchable: false, "width" : "10%"}
			]
		});

		$('.btn-buka-modal').click(function(){

			$('#tambah').modal('show');
			$('#form_datasuplier :input').val('');

		});

		$('#btn-simpan-sup').click(function(){
			alert('click');
			$.ajax({
				url: '{{route('simpan_datasuplier')}}',
				type:'JSON',
				data:$('#form_datasuplier').serialize(),
				method:'GET',
				success:function(response){
					if(response === true){
						$('#form_datasuplier :input').val('');

						$('#tambah').modal('hide');
						table.ajax.reload();
					}
				},
				error:function(){
					alert('error');
				}

			});

		});

		$('#tabel_suplier tbody').on('click', '.btn-edit',function(){
			var get_id = $(this).data('idx');
			console.log(get_id);

			$.ajax({
				url: '{{route('get_editdatasuplier')}}',
				type:'JSON',
				data:{id:get_id},
				method:'GET',
				success:function(response){
					console.log(response.data);
						$('#tambah').modal('show');

						$('#idx').val(response.data.id);
						$('input[name="nama_perusahaan"]').val(response.data.nama_perusahaan);
				},
				error:function(){
					alert('error');
				}

			});

		});

	});

</script>
@endsection