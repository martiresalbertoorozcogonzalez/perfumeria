
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
    <script>
    
        $('#edit').on('show.bs.modal', function (event) {
        
        var button = $(event.relatedTarget)
        
        var title = button.data('mytitle') 
        var cat_id = button.data('catid') 
        var modal = $(this)

        modal.find('.modal-body #title').val(title);
        modal.find('.modal-body #cat_id').val(cat_id);
        
        })

        $('#delete').on('show.bs.modal', function (event) {
        
        var button = $(event.relatedTarget) 
        
        var cat_id = button.data('catid') 
        var modal = $(this)

        modal.find('.modal-body #cat_id').val(cat_id);
        })  
        
        $('#editPerfume').on('show.bs.modal', function (event) {
        
        var button = $(event.relatedTarget)
        
        var name = button.data('name') 
        var description = button.data('description')
        var extract = button.data('extract')
        var price = button.data('price')
        var category_id = button.data('category')
        var perf_id = button.data('perfumeid')

        var modal = $(this)

        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #description').val(description);
        modal.find('.modal-body #extract').val(extract);
        modal.find('.modal-body #price').val(price);
        modal.find('.modal-body #category_id').val(category_id);
        modal.find('.modal-body #perf_id').val(perf_id);
        
        })
    
        $('#deleteperfume').on('show.bs.modal', function (event) {
        
        var button = $(event.relatedTarget) 
        
        var perf_id = button.data('perfumeid') 
        var modal = $(this)

        modal.find('.modal-body #perf_id').val(perf_id);
        }) 




        $('#deletemessage').on('show.bs.modal', function (event) {
        
        var button = $(event.relatedTarget) 
        
        var mess_id = button.data('messid') 
        var modal = $(this)

        modal.find('.modal-body #mess_id').val(mess_id);
        }) 


        $('#editAcerca').on('show.bs.modal', function (event) {
        
        var button = $(event.relatedTarget)
        
        var title = button.data('title') 
        var description = button.data('description')
        var acer_id = button.data('acerid')

        var modal = $(this)

        modal.find('.modal-body #title').val(title);
        modal.find('.modal-body #description').val(description);
        modal.find('.modal-body #acer_id').val(acer_id);
        
        })

        $('#deleteacerca').on('show.bs.modal', function (event) {
        
        var button = $(event.relatedTarget) 
        
        var acer_id = button.data('acerid') 
        var modal = $(this)

        modal.find('.modal-body #acer_id').val(acer_id);
        }) 

    </script>

</body>

</html>
