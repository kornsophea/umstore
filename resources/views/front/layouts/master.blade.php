<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="{{ url('assets/css/heroic-features.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
      
    @yield('style')

</head>

<body>

@include('front.layouts.nav')

<!-- Page Content -->



    @yield('content')
    <!-- Page Features -->
    <!-- /.row -->


<!-- /.container -->
@include('front.layouts.footer')

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        let copy = document.querySelector(".logo-slide").cloneNode(true);
        document.querySelector(".logos").appendChild(copy);
    </script>

<script>
    document.getElementById('user-menu-toggle').addEventListener('click', function(e) {
        e.stopPropagation(); // Prevents the click event from bubbling up to the document
        var userMenu = document.getElementById('user-menu');
        userMenu.classList.toggle('hidden'); // Toggles the visibility of the menu
    });

    // Close the menu when clicking outside of it
    document.addEventListener('click', function(e) {
        var userMenu = document.getElementById('user-menu');
        if (e.target !== userMenu && !userMenu.contains(e.target)) {
            userMenu.classList.add('hidden');
        }
    });
</script>
@yield('script')

</body>

</html>
