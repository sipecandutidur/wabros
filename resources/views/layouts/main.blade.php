<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="whatsapp broadcast system" />
    <meta name="keywords" content="whatsapp,broadcast" />
    <meta name="author" content="teknologio" />

    <title>{{ $title }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/assets/plugins/font-awesome/css/all.min.css" rel="stylesheet"/>
    <link href="/assets/plugins/toastr/toastr.min.css" rel="stylesheet"/>

    <!-- Theme Styles -->
    <link href="/assets/css/lime.min.css" rel="stylesheet" />
    <link href="/assets/css/custom.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="loader">
      <div class="spinner-grow text-primary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    @include('partials.slider')

    @include('partials.header')

    @yield('content')




    <!-- Javascripts -->
    <script src="/assets/plugins/jquery/jquery-3.1.0.min.js"></script>
    <script src="/assets/plugins/bootstrap/popper.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/assets/plugins/chartjs/chart.min.js"></script>
    <script src="/assets/plugins/apexcharts/dist/apexcharts.min.js"></script>
    <script src="/assets/plugins/toastr/toastr.min.js"></script>
    <script src="/assets/js/lime.min.js"></script>
    <script src="/assets/js/pages/dashboard.js"></script>
  </body>
</html>
