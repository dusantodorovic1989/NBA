<<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<main role="main" class="container">
               {{-- @include('layouts.partials.header') --}}
                   <div class="row">
                       <div class="col-md-8 blog-main">
                            @yield('content')
                       </div><!-- /.blog-main -->                    </div><!-- /.row -->
                   {{-- @include('layouts.partials.footer') --}}
            </main><!-- /.container -->
</body>
</html>