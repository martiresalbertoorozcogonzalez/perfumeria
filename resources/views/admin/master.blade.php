
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin PerfuVentas</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

   
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />

</head>

<body class="theme-deep-purple">

    @include('admin.partials.nav')

    <section class="content">
        <div class="container-fluid">
            
            @yield('content')
            
        </div>
    </section>

   
    <script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>
