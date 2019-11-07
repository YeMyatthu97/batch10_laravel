<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Home - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/blog-home.css" rel="stylesheet')}}">

</head>

<body>

  <!-- Navigation -->
  @include ('part.nav')

  <!-- Page Content -->
 @yield('contact')
  <!-- /.container -->

  <!-- Footer -->
 @include ('part.footer')
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('js/app.js')}}"></script>

</body>

</html>
