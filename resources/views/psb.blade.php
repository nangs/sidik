<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="../../favicon.ico">

    <title>Ma'had Ihya' As Sunnah | Penerimaan Siswa Baru</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/fa/css/font-awesome.min.css" rel="stylesheet">
    <link href="/jquery-ui/jquery-ui.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">

    @yield('css')


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    @include('_navPsb')

    <div class="container main-content">

        @if (Session::has('alert'))
    	<div class="alert alert-info text-center">
    		<strong>{{Session::get('alert')}}</strong>
    	</div>
    	@endif

        @yield('content')

    </div>

    <div class="footer-end">
        <div class="container">
            <footer>
                <p>&copy; MIAS {{ date('Y') }} - PSB Online By : <a href="http://www.lintasmandirisurya.net">PT. Lintas Mandiri Surya</a></p>
            </footer>
        </div>
    </div>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/jquery-ui/jquery-ui.min.js"></script>

    @yield('script')

  </body>
</html>
