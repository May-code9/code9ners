<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{{asset('favicon.ico')}}">
  <title>DashBoard | {{ config('app.name') }}</title>
  <!-- Fontawesome icon CSS -->
  <link rel="stylesheet" href="{{asset('vendor/font-awesome-4.7.0/css/font-awesome.min.css')}}" type="text/css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('vendor/bootstrap4beta/css/bootstrap.css')}}" type="text/css">

  <!-- DataTables Responsive CSS -->
  <link href="{{asset('vendor/datatables/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/datatables/css/responsive.dataTables.min.css')}}" rel="stylesheet">

  <!-- jvectormap CSS -->
  <!--<link href="{{asset('vendor/jquery-jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet">-->

  <!-- Adminux CSS -->
  <link rel="stylesheet" href="{{asset('css/dark_blue_adminux.css')}}" type="text/css">

  <!-- May CSS -->
  <link rel="stylesheet" href="{{asset('css/may.css')}}" type="text/css">

  @if(Route::currentRouteName() == 'minstrelViewImages')
  <!-- Swipebox CSS -->
  <link href="{{ asset('vendor/masonry_swipebox/swipebox.min.css') }}" rel="stylesheet">
  @endif
</head>
