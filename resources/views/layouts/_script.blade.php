<!-- Reference block for JS -->
<div class="ref" id="ref">
    <div class="color-primary"></div>
    <div class="awalUrl">
    	<input type="hidden" id="awalUrl" value="{{url('/')}}">
    </div>
    <div class="chart">
        <div class="color-primary"></div>
        <div class="color-secondary"></div>
    </div>
</div>
<script src="{{asset('assets/js/vendor.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/datatables/datatables.min.js')}}"></script>
<script src="{{asset('assets/datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('assets/js/pusher.min.js')}}"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$("input[type='number']").keydown(function (e) {
	        // Allow: backspace, delete, tab, escape, enter and .
	        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
	             // Allow: Ctrl/cmd+A
	            (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
	             // Allow: Ctrl/cmd+C
	            (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
	             // Allow: Ctrl/cmd+X
	            (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
	             // Allow: home, end, left, right
	            (e.keyCode >= 35 && e.keyCode <= 39)) {
	                 // let it happen, don't do anything
	                 return;
	        }
	        // Ensure that it is a number and stop the keypress
	        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
	            e.preventDefault();
	        }
    	});
        $.extend(true,$.fn.dataTable.defaults,{
          "responsive":true,

          "pageLength": 10,
        "lengthMenu": [[10, 20, 50, - 1], [10, 20, 50, "All"]],
        "language": {
            "searchPlaceholder": "Cari Data",
            "emptyTable": "Tidak ada data",
            "sInfo": "Menampilkan _START_ - _END_ Dari _TOTAL_ Data",
            "sSearch": '<i class="fa fa-search"></i>',
            "sLengthMenu": "Menampilkan &nbsp; _MENU_ &nbsp; Data",
            "infoEmpty": "",
            "paginate": {
                    "previous": "Sebelumnya",
                    "next": "Selanjutnya",
                 }
          }

        });

		$('.data-table').DataTable();

		$('.datepicker').datepicker({
			format:"dd-mm-yyyy",
		});
	});
</script>
<script type="text/javascript">
    
    $(document).ready(function(){

        var p_key = "{{env('PUSHER_APP_KEY')}}";
        var p_cluster = "{{env('PUSHER_APP_CLUSTER')}}";

        var pusher = new Pusher(p_key, {
          cluster: p_cluster,
          forceTLS: true
        });

        // console.log(p_key);
        // console.log(p_cluster);

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            // console.log(data);
            // console.log(data.response.aksi);


            var jumlah_nav_notif = parseInt($('#jumlah_notif').html()) + 1;

            // console.log(jumlah_nav_notif);

            appends(data);

            $('#jumlah_notif').text(jumlah_nav_notif);

        });

        @if(Auth::check())
            $.ajax({
                url:'{{route('get_notif')}}',
                type:'GET',
                success:function(response){
                        // console.log(response);

                        $('#jumlah_notif').html(response.length);
                    
                        for (var i = 0; i < 5; i++) {
                            $('#notifications-container').append(
                                '<li>'+
                                    '<a href="javascript:void(0);" class="notification-item">'+
                                        '<div class="img-col">'+
                                            '<div class="img" style="background-image: url('+ firstUrl +'/assets/assets/faces/3.jpg) "></div>'+
                                        '</div>'+
                                        '<div class="body-col">'+
                                            '<p>'+
                                                '<span class="accent">'+ response[i].name +'</span> melakukan aksi '+ response[i].aksi_user + ' : ' +
                                                '<span class="accent">'+ response[i].data +'</span> di <span class="accent">' + 
                                                    response[i].menu
                                                 + '</span> </p>'+
                                        '</div>'+
                                    '</a>'+
                                '</li>'
                                );
                        }
                    
                        var jumlah_notif = parseInt(response.length) + 1;

                        // console.log(jumlah_notif);

                },
                error:function(response){
                    alert('error');
                }


            });

        @endif

        function appends(datas){
            $('#notifications-container').prepend('<li>'+
                            '<a href="javascript:void(0);" class="notification-item" style="background-color:#f5f5f5">'+
                                '<div class="img-col">'+
                                    '<div class="img" style="background-image: url('+ firstUrl+'/assets/assets/faces/3.jpg)"></div>'+
                                '</div>'+
                                '<div class="body-col">'+
                                    '<p><span class="accent">'+ datas.response.user +'</span> melakukan aksi '+ datas.response.aksi +
                                        ' : <span class="accent">' + datas.response.ket + '</span> di <span class="accent">' + 
                                        datas.response.menu + '</span>' +
                                    '</p>'+
                                '</div>'+
                            '</a>'+
                        '</li>');

            $('#notifications-container > li:last-child').remove();
        }

    });


</script>