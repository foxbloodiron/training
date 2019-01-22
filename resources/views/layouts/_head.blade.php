<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Training | Laravel</title>
        <meta name="description" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('assets/alexis.png')}}">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="{{asset('assets/css/vendor.css')}}">
        <link rel="stylesheet" href="{{asset('assets/datatables/datatables.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/datepicker/css/bootstrap-datepicker.min.css')}}">
        <!-- Theme initialization -->
        <script>
            var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
            var themeName = themeSettings.themeName || '';


            var firstUrl = "{{ url('/') }}";

            if (themeName)
            {
                document.write('<link rel="stylesheet" id="theme-style" href="' + firstUrl +'/assets/css/app-' + themeName + '.css">');
            }
            else
            {
                document.write('<link rel="stylesheet" id="theme-style" href="' + firstUrl +'/assets/css/app.css">');
            }
        </script>
        <style type="text/css">
            .sidebar .sidebar-menu > li > a i {
    
                width: 15px !important;

            }
            .sidebar .sidebar-menu > li > a i.arrow {
    
                width: 8px !important;

            }
        </style>
</head>