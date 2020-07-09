<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <title>System Data Company</title>
</head>
<body>
<br>
  @include('Template.navbar')
  <!-- POSTS -->
  <br>
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          @yield('content')
        </div>
      </div>
    </div>
  </section>
  <!-- END POSTS -->
  <br>
  @include('Template.footer')
  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>