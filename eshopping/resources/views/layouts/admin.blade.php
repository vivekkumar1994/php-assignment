
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-',app()->getlocale())}}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name ='csrf-token' content = "{{csrf_token()}}">

  <title>{{config('app.name','Laravel')}}

  </title>

   <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <link id="pagestyle" href= "{{asset('admin/css/material-dashboard.min.css')}}" rel="stylesheet" />

   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
</head>

<body>
 <div class="wrapper">
    @include('layouts.inc.sidebar')
 </div>
 <div class='main-panel'>
    @include('layouts.inc.adminnav')
    <div class='content'>
        @yield('content')

    </div>
    @include('layouts.inc.adminfooter')
 </div>


    <script src = "{{ asset('admin/js/bootstrap.bundle.min.js')}}"></script>
    <script src = "{{ asset('admin/js/popper.min.js')}}"></script>
    <script src = "{{ asset('admin/js/material-dashboard.min.js')}}"></script>
    <script src = "{{ asset('admin/js/perfect-scrollbar.min.js')}}" defeer></script>
    <script src = "{{ asset('admin/js/smooth-scrollbar.min.js')}}" defer></script>
    <script src = "{{ asset('admin/js/chartjs.min.js')}}" defeer></script>


@yield('scripts')
</body>

</html>
