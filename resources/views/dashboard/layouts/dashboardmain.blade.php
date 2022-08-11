<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet" >
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		
    {{-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" defer></script> --}}
    {{-- <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js" defer></script> --}}
    
    <!-- Custom styles for this template -->
    <link href="/assets/css/dashboard/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background: #e03a3c;">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Wisata Puncak Badean</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <form action="{{ route('logout') }}" method="get">
        <button class="nav-link px-3 text-white btn btn-lg" type="submit">Sign out</button>
      </form>
      {{-- <a class="nav-link px-3 text-white" href="#">Sign out</a> --}}
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    @include('dashboard.layouts.partials._sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      @yield('dashboardcontents')
    </main>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script> --}}

      {{-- <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

      <!-- <script src="/assets/js/dashboard.js"></script> -->
      <script>
            
        $(document).ready( function () {
          $("#example").DataTable();
        } );

        $(document).ready( function () {
          $("#data-event").DataTable();
        } );

    </script> --}}
  </body>
</html>
