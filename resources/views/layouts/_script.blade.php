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

        var pusher = new Pusher('f3dfb944b5caa13e1438', {
          cluster: 'ap1',
          forceTLS: true
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            console.log(data);
            console.log(data.length);
          appends(data['message']);
        });

        function appends(datas){
            $('#notifications-container').append('<li>'+
                            '<a href="" class="notification-item">'+
                                '<div class="img-col">'+
                                    '<div class="img" style="background-image: url('+ firstUrl+'/assets/assets/faces/3.jpg)"></div>'+
                                '</div>'+
                                '<div class="body-col">'+
                                    '<p>'+ datas +'</p>'+
                                '</div>'+
                            '</a>'+
                        '</li>');
        }

    });


</script>