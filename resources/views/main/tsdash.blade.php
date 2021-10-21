<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ONE BUS | {{ $title }}</title>
    <link rel="stylesheet" href="/asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="/asset/css/bootstrap-icons.css">
    <link rel="stylesheet" href="/asset/icons-main/font/bootstrap-icons.css">

</head>

<body>
    <div class="containter mb-5">

        @include('main.snav')
    </div>

    <div class="container pt-3">
        @yield('content')
    </div>



</body>
{{-- <script>
  alert('Good luck on your project, Boss')
</script> --}}
<script src="/asset/js/jquery.min.js">
</script>
<script src="/asset/js/poper.min.js"">
  </script>
<script src="/asset/js/bootstrap.min.js"></script>
<div class="container">
    <footer class="fixed-bottom bg-success">
        <p class="text-center pt-1">Developed with <i class="bi bi-heart"></i> by <a
                href="https://instagram.com/ajileutik_">Aji Permana</a></p>

    </footer>

</div>
</body>

</html>
